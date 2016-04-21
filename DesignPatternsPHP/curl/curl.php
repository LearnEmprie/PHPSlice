<?php

function curls($urls, $post, $number)
{
$ok = 0;//统计成功次数
$queue = curl_multi_init();
$map = array();
foreach ($urls as $key => $url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//每个URL都可以对应相应的参数
//      curl_setopt($ch, CURLOPT_POSTFIELDS, $post[$key]);
//这里选择每个URL都是相同的参数
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_NOSIGNAL, true);
curl_multi_add_handle($queue, $ch);
$map[(string)$ch] = $url;
}
$responses = array();
do {
while (($code = curl_multi_exec($queue, $active)) == CURLM_CALL_MULTI_PERFORM) ;
if ($code != CURLM_OK) {
break;
}
while ($done = curl_multi_info_read($queue)) {
//记录错误信息，没有为空
$error = curl_error($done['handle']);
//记录错误代码，一般做压测的时候统计200
$code = curl_getinfo($done['handle'], CURLINFO_HTTP_CODE);
if($code == 200)
$ok++;
$results = curl_multi_getcontent($done['handle']);
$responses[$map[(string)$done['handle']]] = compact('error', 'results');
$responses[$map[(string)$done['handle']]] = $code;
curl_multi_remove_handle($queue, $done['handle']);
curl_close($done['handle']);
}
if ($active > 0) {
curl_multi_select($queue, 0.5);
}
} while ($active);
curl_multi_close($queue);
$datas['ok'] = $ok;
$datas['error'] = $number-$ok;
$datas['rate'] = $datas['ok']/$number;//成功率
$datas['responses'] = $responses;//所有并发请求结果
return $datas;
}



$number = 100;//并发1000
$data = ['content'=>'呵呵哒'];//发送内容
$url = 'http://jskzcounter.jiashuangkuaizi.com/string/key/1';//对腾讯来吧，自己的博客扛不住
for($i = 0; $i < $number; $i++){//生成对应数量的URL
    $urls[$i] = $url.$i;
}
$sTime = microtime(1);
$result = curls($urls, $data, $number);//开始
echo '最终耗时' . (microtime(1) - $sTime);
print_r($result);