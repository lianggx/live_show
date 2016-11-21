<?php 
class dy_cates{
	private $cate_id = 0;
	private $game_name = ""
	private $short_name = "";
	private $game_url = "";
	private $game_src = "";
	private $game_icon = "";
   
   /**
    * @param $cate_id 游戏分类 ID 
    * @param $game_name 游戏分类的名称
    * @param $short_name 游戏分类的别名
    * @param $game_url 游戏分类的网址
    * @param $game_src 游戏分类的封面图片，大小 140*195 
    * @param $game_icon 游戏分类的小图标图片，大小 16*16 
    */
	public function __construct($cate_id,$game_name,$short_name,$game_url,$room_src,$game_icon){
			$this -> cate_id = $cate_id;
			$this -> game_name = $game_name;
			$this -> short_name = $short_name;
			$this -> game_url = $game_url;
			$this -> room_src = $room_src;
			$this -> game_icon = $game_icon;
	}

	/**
	 * @return integer
	 */
	public function get_cate_id(){
		return $this -> cate_id;
	}
	
	/**
	 * @return sting 
	 */
	public function get_game_name(){
		return $this -> game_name;
	}

	/**
	 * @return string 
	 */
	public function get_short_name(){
		return $this -> short_name;
	}

	/**
	 * @return string game_url
	 */
	public function get_game_url(){
		return $this -> game_url;
	}

	/**
	 * @return integer game_src
	 */
	public function get_game_src(){
		return $this -> game_src;
	}

	/**
	 * @return string game_icon
	 */
	public function get_game_icon(){
		return $this -> game_icon;
	}
}
?>