<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/2/11
 * Time: 下午6:11
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $table = 'category';
    protected $fillable = ['parent_id','title','img','link','sort','desc','content'];
}