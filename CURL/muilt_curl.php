<?php




function rolling_curl($urls, $delay)
{
    $queue = curl_multi_init();
    $map   = array();

    foreach ($urls as $url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOSIGNAL, true);
        curl_multi_add_handle($queue, $ch);
        $map[(string)$ch] = $url;
    }

    $responses = array();

    do {
        while (($code = curl_multi_exec($queue, $active)) == CURLM_CALL_MULTI_PERFORM) ;

        if ($code != CURLM_OK) { break; }


        while ($done = curl_multi_info_read($queue)) {


          //  $info    = curl_getinfo($done['handle']);
          //  $error   = curl_error($done['handle']);
            $results = curl_multi_getcontent($done['handle']);
            $responses[$map[(string) $done['handle']]] = compact('info', 'error', 'results');
            curl_multi_remove_handle($queue, $done['handle']);
            curl_close($done['handle']);
        }

        if ($active > 0) {
            curl_multi_select($queue, 0.5);
        }

    } while ($active);

    curl_multi_close($queue);
    return $responses;
}

print_r(rolling_curl(array("http://user.mapi.jiashuangkuaizi.com/UKitchen/detail",
    "http://user.mapi.jiashuangkuaizi.com/UKitchen/detail?"
),1));