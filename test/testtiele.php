
<?php
$lines_array = file('http://sebapress.com/read-htm-tid-5785182.html');
$lines_string = implode('', $lines_array); 
$pos = strpos($lines_string,'utf-8');
if($pos===false){$lines_string = iconv("gbk","utf-8",$lines_string);}
eregi("<title>(.*)</title>", $lines_string, $title);
echo $title[1];

echo '<br>';

$lstr2 = "ÐÔ°É";
$lstr2 = iconv("gbk","utf-8",$lstr2);

echo strpos($title[1],$lstr2);

?>