<?php 
class MdCodeImg{
	public  $code;//变量
	protected $len;//验证码长度
	protected $img;//生成的验证码图像
	protected $fontSize;
	protected $font;
	protected $im;
	protected $width;//图像宽
	protected $height;//图像高
	protected $tWidth;//字体总宽度
	protected $tHeight;//字体总高度
	protected $oneWidth;//单个字符宽度
	public function __construct($width=60,$height=24,$len=4){
		header('content-type:text/html;charset=utf-8;');
		$this->width=$width;
		$this->height=$height;
		$this->len=$len;
		$this->fontSize=15;
		$this->font="./SIMHEI.TTF";
	}
	public function md_code(){
		$str=[2,3,4,5,6,7,8,9,'a','s','d','f','g','h','j','k','q','w','e','r','t','y','u','p','z','x','c','v','b','n','m','A','S','D','F','G','H','J','K','Q','W','E','R','T','Y','U','P','Z','X','C','V','B','N','M'];		
		$temp=array();
		while(count($temp)<$this->len)
		{   
			$char=$str[rand(0,count($str)-1)];
			if(!in_array($char,$temp)){array_push($temp,$char);}
		}
		$temp=implode('',$temp);
		$this->code=$temp;
		//print_r($this->code);
	}
	
	/*计算字符的宽度与高度*/
	protected function sumWidthHeightForText(){
		$box = imagettfbbox($this->fontSize, 0, $this->font, $this->code);
		$this->tWidth= $box[4] - $box[6];//字体总宽度
		$this->oneWidth=intval($this->tWidth/strlen($this->code));//单个字体宽度
		$this->tHeight= $box[3] - $box[5];//字体总高度=单个字体的高度
		/*echo "<pre>";
		print_r($box);
		
		echo 
		"<br/>
		字符总宽度＝右上角 X -  左上角 X  或   右下角 X  -  左下角 X <br/>
		字符总宽度＝".($box[4]-$box[6])." 或 ".($box[2] - $box[0])." <br/>
		字符总高度＝左下角 Y -  左上角 Y  或   右下角 Y  -  右上角 Y <br/>
		字符总高度＝".($box[1]-$box[7])." 或 ".($box[3] - $box[5])." <br/>
		0 左下角 X 位置: $box[0]<br/>
		1 左下角 Y 位置:$box[1] <br/>
		2 右下角 X 位置:$box[2]<br/>
		3 右下角 Y 位置:$box[3]<br/>
		4 右上角 X 位置:$box[4]<br/>
		5 右上角 Y 位置:$box[5]<br/>
		6 左上角 X 位置:$box[6]<br/>
		7 左上角 Y 位置:$box[7]";
		*/
	
	}
	/* 初始化创建画布*/
	protected function init(){
		$this->im=imagecreate($this->width,$this->height);
		$c=imagecolorallocate($this->im,255,254,255);
		imagefill($this->im,0,0,$c);
	
	}
	/* 添加边框*/
	protected function addrectangle(){
		$white=imagecolorallocate($this->im,195,187,189);//边框颜色
		imagerectangle($this->im,0,0,$this->width-2,$this->height-2,$white);//边框比图像小2个像素	
	}
	/* 添加像素点*/
	protected function addPixel(){
		//绘制点像素
		for($a=0;$a<150;$a++){
			$pixel_bg=imagecolorallocate($this->im,rand(129,255),rand(129,255),rand(129,255));
			imagesetpixel($this->im,rand(1,$this->width-2),rand(1,$this->height-2),$pixel_bg);
		}
	
	}
	/* 输出文字*/
	protected function pText(){
		for($i=0;$i<strlen($this->code);$i++){
			$bg=imagecolorallocate($this->im,rand(1,128),rand(1,128),rand(1,128));//文字颜色
			//总宽度=字体宽度+字体间隔;字体间隔=(总宽度-字体总宽度)/(字符个数+1)
			$temp=intval(($this->width-$this->tWidth)/(strlen($this->code)+1));
			$x=($this->oneWidth+$temp)*$i+$temp;
			$y=$this->tHeight+rand(2,$this->height-$this->tHeight-3);//最大高度=字体高度+(偏移位置=高度-字体高度)
			imagettftext($this->im,$this->fontSize,rand(-10,10),$x,$y,$bg,$this->font,$this->code[$i]);
		}	
	}
	/* 输出图像*/
	protected function pImg(){
		header("content-type:image/gif");
		imagegif($this->im);
		imagedestroy($this->im);	
	}
	public function make_img(){
		$this->init();
		$this->md_code();		
		$this->sumWidthHeightForText();
		$this->addrectangle();
		$this->addPixel();
		$this->pText();
		$this->pImg();
		return $this->code;		
	}
}//


/*$code= new MdCodeImg();
$code->make_img();*/




