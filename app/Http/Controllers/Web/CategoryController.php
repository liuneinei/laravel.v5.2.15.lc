<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/2/11
 * Time: 下午6:09
 */
namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Models\Category;

class CategoryController extends Controller{
    public function Category(){
        $category = json_decode(Redis::get('category:list:5'));

//        if(Session::has('category')){
//            print_r(Session::all());
//        }else {
//            Session::put('category','test.2017');
//            print_r(Session::get('category'));
//        }
//        print_r(Redis::);
        return View::make('web.category',['category'=>$category]);
    }

    /*
     * add category
     */
    public function postAddcategory(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'content' => 'required',
            'sort' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else {
            $category = Category::create([
                'title' => $request->input('title'),
                'img' => $request->input('img'),
                'sort' => $request->input('sort'),
                'content' => $request->input('content'),
            ]);
            Redis::set('category:list:'.$category->id,json_encode($category));
            return redirect('category');
        }
    }
}