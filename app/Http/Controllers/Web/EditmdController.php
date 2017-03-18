<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/2/18
 * Time: 下午4:08
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class EditmdController extends Controller{
    public function Editmd(){
        return view('web.editmd');
    }

    public function Editmdfull(){
        return view('web.editmdfull');
    }
}