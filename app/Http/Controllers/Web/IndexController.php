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
use Illuminate\Support\Facades\Redis;
use App\Models\News;

class IndexController extends Controller{
    /**
     * @return string
     */
    public function Index(){
        //View::share('share1','this share1');

        $news = News::where('id','<=',100)->get();

        $redis_name = Redis::get('name');
        return view('web.index', ['user' => $redis_name,'news'=>$news]);
    }
}