<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'images';
    protected $fillable = ['name','name_image','weight', 'path', 'extension', 'user_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
