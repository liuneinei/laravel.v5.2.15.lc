<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class ioredisController extends Controller
{
    public function ioredis(Request $request){
        return view('web.ioredis');
    }
}
