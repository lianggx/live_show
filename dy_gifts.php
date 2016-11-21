<?php 
class dy_gifts{
	private $id = 0;
	private $name = ""
	private $type = -1;
	private $pc = 0.0;
	private $gx = 0;
	private $desc = "";
	private $intro = "";
	private $mimg = "";
	private $himg = "";
   
   /**
    * @param $id 礼物 id
    * @param $name 礼物名称
    * @param $type 礼物类型,1（鱼丸礼物）/2（鱼翅礼物）
    * @param $pc 价格 鱼翅礼物（元）/ 鱼丸礼物（鱼丸）
    * @param $gx 贡献值
    * @param $desc 礼物描述
    * @param $intro 礼物介绍 
    * @param $mimg 礼物图标静态图片地址 
    * @param $himg 礼物图标动态图片地址 
    */
	public function __construct($id,$name,$type,$pc,$gx,$desc,$intro,$mimg,$himg){
			$this -> id = $id;
			$this -> name = $name;
			$this -> type = $type;
			$this -> pc = $pc;
			$this -> gx = $gx;
			$this -> desc = $desc;
			$this -> intro = $intro;
			$this -> mimg = $mimg;
			$this -> himg = $himg;
	}

	/**
	 * @return integer intro
	 */
	public function get_intro(){
		return $this -> intro;
	}

	/**
	 * @return integer mimg
	 */
	public function get_mimg(){
		return $this -> mimg;
	}

	/**
	 * @return integer himg
	 */
	public function get_himg(){
		return $this -> himg;
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
	public function get_name(){
		return $this -> name;
	}

	/**
	 * @return string 
	 */
	public function get_type(){
		return $this -> type;
	}

	/**
	 * @return string pc
	 */
	public function get_pc(){
		return $this -> pc;
	}

	/**
	 * @return string desc
	 */
	public function get_desc(){
		return $this -> desc;
	}
}
?>