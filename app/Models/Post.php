<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // $fillable = [] : yang boleh diisi
    // $guraded = [] : yang tidak boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    // ini clockwork.mengurangi query yang tidak perlu
    protected $with = ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

