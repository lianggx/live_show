<?php 
/**
* @param 斗鱼api返回码
*/
class dy_code
{	
	const OK = 0; // 调用成功
	const NOT_EXISTS_CATE = 501; // 不存在此分类
	const INTERFACE_UNVALIBLE = 999;	//接口维护中
	const ROOM_NOT_FOUND = 101; // 房间未找到（不存在此房间）
	const ROOM_NOT_ACTIVITY = 102; // 房间未激活
	const ROOM_ACCESS_ERROR = 103; // 房间获取错误
}
?>