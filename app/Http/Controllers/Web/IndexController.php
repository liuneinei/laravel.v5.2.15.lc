<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 16/12/24
 * Time: 下午3:38
 */

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Redis;
use App\Models\News;
use Intervention\Image\ImageManager as Image;

class IndexController extends Controller{
    /**
     * @return string
     */
    public function Index(){
        //View::share('share1','this share1');


        $news = News::where('id','<=',10)->get();

        $redis_name = Redis::get('name');
        return view('web.index', ['user' => $redis_name,'news'=>$news]);
    }


    public function Strtoimg(){
        //$imgText = HandleImg::getImgs();
//        $imagerGer = new Image();
//        $img = $imagerGer->canvas(800, 600, '#ccc');
//        var_dump($img);
        return view('web.strtoimg');
    }

    public function imgzn($str){
        $font_file = "/fonts/simsun.ttf";//字体设置部分linux的路径
        $font_filec = "/fonts/simsun.ttc";//字体设置部分linux的路径
        /*
         * 示例一
         */
        //$str = $_REQUEST['str'] ? $_REQUEST['str']:"暂无输入";
        //$str = "中华人民共和国";
//        $im = imagecreate(200,200);
//        $white = imagecolorallocate($im,0xFF,0xFF,0xFF);
//        imagecolortransparent($im,$white);  //imagecolortransparent() 设置具体某种颜色为透明色，若注释
//
//        $black = imagecolorallocate($im,0x00,0x00,0x00);
//        imagefilledrectangle($im,50,50,150,150,$black);
//        imagestring($im,5,50,160,"happy every day",$black);
//
//        imagettftext($im,15,0,50,40,$black,"/fonts/simsun.ttf",$str); //字体设置部分linux和windows的路径可能不同
//        header("Content-type:image/png");
//        imagepng($im);


        /*
         * 示例二
         */
//        $im = imagecreatetruecolor(400, 30);            //创建400 30像素大小的画布
//
//        $white = imagecolorallocate($im, 255, 255, 255);
//        $grey = imagecolorallocate($im, 128, 128, 128);
//        $black = imagecolorallocate($im, 0, 0, 0);
//
//        imagefilledrectangle($im, 0, 0, 399, 29, $white);       //输出一个使用白色填充的矩形作为背景
//
//        //如果有中文输出，需要将其转码，转换为UTF-8的字符串才可以直接传递
//        //$text = iconv("GB2312", "UTF-8", "回忆经典");
//        $text = "中文aflasjflasjflasjf";
//        //设定字体，将系统中与simsun.ttc对应的字体复制到当前目录下
//        $font = '/fonts/simsun.ttc';
//
//        imagettftext($im, 20, 0, 12, 21, $grey, $font, $text);      //输出一个灰色的字符串作为阴影
//        //imagettftext($im, 20, 0, 10, 20, $black, $font, $text);         //在阴影上输出一个黑色的字符串
//
//        header("Content-type: image/png");
//        imagepng($im);

        /*
         * 示例三
         */

//        $font_file = "/fonts/simsun.ttf";//字体设置部分linux的路径
//        $text  = $str; //要显示的字符串
//        $font_size = 14; //字体大小
//
//        //自动换行
//        $text1 = self::autowrap($font_size,0,$font_file,$text,500);
//
////        var_dump($text);
//
//        $arr = imagettfbbox($font_size,0,$font_file,$text1); //确定会变化的字符串的位置
//
//        $text_width = $arr[2]-$arr[0]+5; //字符串文本框长度
//        $text_height = $arr[3]-$arr[5]+5; ////字符串文本框高度
//
//        $im = imagecreate($text_width,$text_height);


//        $white = imagecolorallocate($im,0xFF,0xFF,0xFF);
//        imagecolortransparent($im,$white);  //imagecolortransparent() 设置具体某种颜色为透明色，若注释
//        $blue = imagecolorallocate($im,0,0,255);
//
//        $arr = imagettftext($im,$font_size,0,0,$text_height-5,$blue,$font_file,$text);
//        imageline($im,$arr[0],$arr[1],$arr[2],$arr[3],$blue);
////        imagettftext($im,12,0,0,20,$black,$font_file,$url);//字体设置windows的路径
//
//        header("Content-type:image/png");
//        imagepng($im);

        /*
         * 示例4
         */
//        header ("Content-type: image/png");
//        mb_internal_encoding("UTF-8"); // 设置编码
//
//        $text = "前段时间练习使用 PHP 的 GD 库时，为了文本的自动换行纠结了很久。虽然可以通过插入 ＼n 实现换行，但考虑到文本中既有中文又有英文，强制限定每多少个文字就换行的效果很差。后来终于找到了一个英文下的自动换行的方法，其大概原理是将空格作为分隔符，将字符串分割为一个个单词，然后再一个接一个地拼接在一起，判断其长度是否超过画布，若超过则换行再拼接，否则继续拼接。考虑到中文需要将每个文字都拆开，所以我进行了一点修改，完整代码如下。";

//        $bg = imagecreatetruecolor(300, 290); // 创建画布
//        $white = imagecolorallocate($bg, 255, 255, 255); // 创建白色
//
//        $text = self::autowrap(12, 0, $font_filec, $text, 280); // 自动换行处理
//// 若文件编码为 GB2312 请将下行的注释去掉
//// $text = iconv("GB2312", "UTF-8", $text);
//        imagettftext($bg, 12, 0, 10, 30, $white, $font_filec, $text);
//        imagepng($bg);

        /*
         * 示例五，总结
         *
         */
        $font_file = "fonts/simsun.ttf";//字体设置部分linux的路径
        $text  = $str; //要显示的字符串
        $font_size = 14; //字体大小

        //自动换行
        $text1 = self::autowrap($font_size,0,$font_file,$text,300);

        $arr = imagettfbbox($font_size,0,$font_file,$text1); //确定会变化的字符串的位置

        $text_width = $arr[2]-$arr[0]+5; //字符串文本框长度
        $text_height = $arr[3]-$arr[5]; //字符串文本框高度

        $bg = imagecreatetruecolor($text_width,$text_height);
        $white = imagecolorallocate($bg, 255, 255, 255); // 创建白色
        $grey = imagecolorallocate($bg, 128, 128, 128);

        imagefilledrectangle($bg, 0, 0, $text_width, $text_height, $white);       //输出一个使用白色填充的矩形作为背景


        $text = self::autowrap(12, 0, $font_filec, $text, $text_width-10); // 自动换行处理
        //// $text = iconv("GB2312", "UTF-8", $text);
//        imagettftext($bg, 12, 0, 10, 30, $white, $font_filec, $text);
        imagettftext($bg, 12, 0, 10, 15, $grey, $font_filec, $text);      //输出一个灰色的字符串作为阴影
        header("Content-type:image/png");
        imagepng($bg);
    }

    public static function autowrap($fontsize, $angle, $fontface, $string, $width) {
// 这几个变量分别是 字体大小, 角度, 字体名称, 字符串, 预设宽度
        $content = "";
        // 将字符串拆分成一个个单字 保存到数组 letter 中
        for ($i=0;$i<mb_strlen($string);$i++) {
            $letter[] = mb_substr($string, $i, 1);
        }

        foreach ($letter as $l) {
            $teststr = $content." ".$l;
            //var_dump($teststr);
            $testbox = imagettfbbox($fontsize, $angle, $fontface, $teststr);
            // 判断拼接后的字符串是否超过预设的宽度
            if (($testbox[2] > $width) && ($content !== "")) {
                $content .= "\n";
            }
            $content .= $l;
        }
//        var_dump($content);
        return $content;
    }
}