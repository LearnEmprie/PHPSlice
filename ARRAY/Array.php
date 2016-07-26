<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/18
 * Time: 下午1:29
 */



//1.和key有关系 array_change_key_case array_flip array_key_exist array_keys
//3.查找关系    current  = pos  each end in_array  array_key_exists  key next prev reset
//4.添加删除    array_pop array_push
//5.变换分割    array_chunk true 保留健  array_column 二维数组最多了  array_combine  array_​diff_​assoc array_​diff_​key
//array_​diff_​uassoc  array_​diff_​ukey  array_​diff  array_​intersect_​assoc array_​intersect_​key array_​intersect_​uassoc array_​intersect_​ukey array_​intersect
//array_​merge_​recursive array_​merge array_​replace_​recursive array_​replace array_reverse shuffle
//6.计算数量    array_count_values count sizeof array_product
//7.构造数组    array_fill_keys array_fill array_pad  compact 从符号表里面找 extract 导出符号表 list range array_rand array_values
//8.回调处理    array_filter array_map array_reduce array_walk_recursive array_walk
//9.排序       asort arsort krsort ksort natcasesort natsort rsort sort uasort uksort usort




apc_cache_info();




$size = "large";
$var_array = array("color" => "blue",
    "size"  => "medium",
    "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";