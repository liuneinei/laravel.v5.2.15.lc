<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 2017/3/19
 * Time: 下午12:25
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    protected $table = 'users';
    protected $fillable = ['name','email','password'];
}