<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/3/19
 * Time: 下午12:24
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Mail;

class UsersController extends Controller{
    public function getUsers(){
        return view('web.users');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postUsers(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else {
             Users::where('email','=',$request->input('email'))->delete();

             $users = Users::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => md5($request->input('password'))
            ]);

            Mail::send('emails.test',['name'=>$users],function ($message) use ($users){
//                $message->from('liuneinei@163.com','Your application');
                $message->to($users->email,$users->name)->subject('邮箱测试');
            });

            return redirect('users');
        }
    }
}