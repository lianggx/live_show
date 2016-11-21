<?php 
class dy_rooms{
	private $room_id = 0;
	private $room_src = "";
	private $room_name = "";
	private $owner_uid = 0;
	private $online = 0;
	private $nickname = "";
	private $url = "";
   
   /**
    * @param $room_id 房间 ID 
    * @param $room_src 房间图片，大小 320*180
    * @param $room_name 房间名称
    * @param $owner_uid 房间所属用户的 UID
    * @param $online 在线人数
    * @param $nickname 房间所属用户的账号
    * @param $url 房间的网址
    */
	public function __construct($room_id,$room_src,$room_name,$owner_uid,$online,$nickname,$url){
			$this -> room_id = $room_id;
			$this -> room_src = $room_src;
			$this -> room_name = $room_name;
			$this -> owner_uid = $owner_uid;
			$this -> online = $online;
			$this -> nickname = $nickname;
			$this -> url = $url;
	}

	/**
	 * @return integer
	 */
	public function get_room_id(){
		return $this -> room_id;
	}
	
	/**
	 * @return sting 房间图片，大小 320*180
	 */
	public function get_room_src(){
		return $this -> room_src;
	}

	/**
	 * @return string 房间名称
	 */
	public function get_room_name(){
		return $this -> room_name;
	}

	/**
	 * @return integer 房间所属用户的 UID
	 */
	public function get_owner_uid(){
		return $this -> owner_uid;
	}

	/**
	 * @return integer 在线人数
	 */
	public function get_online(){
		return $this -> online;
	}

	/**
	 * @return string 房间所属用户的账号
	 */
	public function get_nickname(){
		return $this -> nickname;
	}

	/**
	 * @return string 房间的网址
	 */
	public function get_url(){
		return $this -> url;
	}

}
?>