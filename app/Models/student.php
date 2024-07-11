<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory;
    public $timestamps=true;
    // 定义表名
    protected $table = 'students';

    // 定义可以批量赋值的字段
    protected $fillable = [
        'account',
        'password',
        'grade',
        'major',
        'class',
        'name',
        'email'
    ];

    // 隐藏密码字段
    protected $hidden = [
        'password',
    ];

    // 修改器：在设置密码时自动进行哈希加密

}
