<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/3/19
 * Time: 下午12:18
 */
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Mail;
use Illuminate\Support\Facades\Storage;
use App\Jobs\SendEmail;
use App\Models\Users;

class MailController extends Controller{
    //发送提醒邮件
    public function sendReminderEmail(Request $request,$id){
        $user = Users::findOrFail($id);
        $this->dispatch(new SendEmail($user));
    }
}