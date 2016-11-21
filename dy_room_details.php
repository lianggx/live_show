<?php 
class dy_room_details{
	private $room_id = 0;
	private $room_thumb = "";
	private $cate_id = 0;
	private $cate_name = "";
	private $room_name = "";
	private $room_status = 2;
	private $start_time = "";
	private $owner_name = "";


	private $owner_avatar = "";
	private $online = 0;
	private $owner_weight = "";
	private $fans_num = 0;
	private $gifts = null;
   
   /**
    * @param $room_id 房间 ID  
    * @param $room_thumb 房间图片，大小 320*180
    * @param $cate_id 房间所属分类 ID
    * @param cate_name 房间所属分类名称
    * @param $room_name 房间名称
    * @param $room_status 房间开播状态：1=开,2=关
    * @param $start_time 最近开播时间
    * @param $owner_name 房间所属主播昵称
    * @param $owner_avatar 房间所属主播头像地址
    * @param $online 在线人数
    * @param $owner_weight 直播间主播体重
    * @param $fans_num 直播间关注数
    * @param $gifts 直播间礼物信息数组列表,数组，官方是 Json 数组，这里是 class dy_gifts，参数详情请查看下面的礼物参数描述
    */
	public function __construct($room_id,$room_thumb,$cate_id,$cate_name,$room_name,$room_status,$start_time,$owner_name,$owner_avatar,$online,$owner_weight,$fans_num,gifts){
			$this -> room_id = $room_id;
			$this -> room_thumb = $room_thumb;
			$this -> cate_id = $cate_id;
			$this -> cate_name = $cate_name;
			$this -> room_name = $room_name;
			$this -> room_status = $room_status;
			$this -> start_time = $start_time;
			$this -> owner_name = $owner_name;
			$this -> owner_avatar = $owner_avatar;
			$this -> online = $online;
			$this -> owner_weight = $owner_weight;
			$this -> fans_num = $fans_num;
			$this -> gifts = $gifts;
	}
	
	/**
	 * @return integer
	 */
	public function get_room_id(){
		return $this -> room_id;
	}
	
	/**
	 * @return sting 
	 */
	public function get_room_thumb(){
		return $this -> room_thumb;
	}

	/**
	 * @return integer 
	 */
	public function get_cate_id(){
		return $this -> cate_id;
	}

	/**
	 * @return string
	 */
	public function get_cate_name(){
		return $this -> cate_name;
	}

	/**
	 * @return string 
	 */
	public function get_room_name(){
		return $this -> room_name;
	}

	/**
	 * @return string 
	 */
	public function get_room_status(){
		return $this -> room_status;
	}

	/**
	 * @return date 
	 */
	public function get_start_time(){
		return $this -> start_time;
	}

	/**
	 * @return object 
	 */
	public function get_gifts(){
		return $this -> gifts;
	}

	/**
	 * @return integer 
	 */
	public function get_fans_num(){
		return $this -> fans_num;
	}

	/**
	 * @return string 
	 */	
	public function get_owner_weight(){
		return $this -> owner_weight;
	}

	/**
	 * @return integer 
	 */
	public function get_online(){
		return $this -> online;
	}

	/**
	 * @return string 
	 */
	public function get_owner_avatar(){
		return $this -> owner_avatar;
	
	/**
	 * @return string 
	 */
	public function get_owner_name(){
		return $this -> owner_name;
	}
}
?>