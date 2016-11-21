<?php
declare (encoding = "UTF-8"); 
require "dy_rooms.php";
require "dy_code.php";
$url = "http://api.douyutv.com/api/v1/live/lol";
$content = "";
if (!($content=file_get_contents($url))){
	die("Failure to open " . $url);
}
// echo $content;
$roomsJson = json_decode($content);
if ($roomsJson -> {"error"} == dy_code :: OK){
	$roomArray = $roomsJson -> {"data"};
	$len = count ($roomArray);
	for ($i=0; $i < $len; $i++) { 
		# code...
		echo $roomArray[$i] -> {"room_id"} . "\n";
		//var_dump($roomArray[$i]);
		if ($i > 0) break;
	}
}

$rooms = new dy_rooms(18,"http://rpic.douyucdn.cn/z1602/17/15/252854_160217150302.jpg","测试房间
	",1034,6030,test111,"http://www.douyu.com/30");



$roomid = $rooms -> get_room_id();
echo "roomid:" . $roomid;

?>
