<?php
/**
 * Created by PhpStorm.
 * User: 3241214616
 * Date: 2017-2-10
 * Time: 19:43
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class News extends Model{
    protected $table = 'news';
    protected $fillable = ['title','img','desc','content','type_info'];
}