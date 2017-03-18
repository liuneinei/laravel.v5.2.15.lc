<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/2/18
 * Time: 下午4:52
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploaderController extends Controller{

   public function postUploader(Request $request)
   {
       $file='';
//       $file = 'uploads/' . $_FILES['file']['name'];
//       dump($file);
       $location = $_GET['callback'].'?success=1&message=&url=http://www.wxnnn.wang'.$file.'&dialog_id='.$_GET['dialog_id'].'&temp='.date('ymdhis');
//
       //var_dump($location);
       header('location:' . $location);
       exit;
       //echo 'werdsfjlwkerjklweu';
       //return;
   }


   /*
    * Markdown 图片上传回调
    */
   public function Upcallback(){
       $success = isset($_GET['success'])?$_GET['success']:'0';
       $message = isset($_GET['message'])?$_GET['message']:'0';
       $urls = isset($_GET['url'])?$_GET['url']:'0';
       $dialog_id = isset($_GET['dialog_id'])?$_GET['dialog_id']:'0';
       return view('web.upcallback',['success'=>$success,'message'=>$message,'urls'=>$urls,'dialog_id'=>$dialog_id]);
   }
}