<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Redis;

//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class KitController extends Controller{
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

//    public function postCaptcha(){
//        $username=Request::input("username");
//        $password=Request::input("password");
//        //读取验证码
//        $captcha = Session::get('milkcaptcha');
//        if(Request::input("captcha")==$captcha){
//            $results = DB::select('select * from v9_admin where username = ? and password = ? ',array($username,$password));
//
//            if(empty($results)){
//                echo '用户名或密码错误';
//            }else{
//                $userid=$results[0]->userid;
//                Session::put('username',$username);
//                Session::put('userid',$userid);
//
//                echo '登陆成功';
//            }
//        }else{
//            echo '验码错误';
//        }
//    }



}