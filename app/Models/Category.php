<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}




// Post::create([
//     'title' => 'Judul Ketiga',
//     'category_id' => 1,
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem programmer ipsum dolor sit amet consectetur, adipisicing elit.',
//     'body' => '<p>Lorem programmer ipsum dolor sit amet consectetur, adipisicing elit. Officiis eius perferendis similique quam saepe exercitationem quibusdam sit asperiores quasi. Exercitationem eveniet sequi odit corrupti quasi illum officia recusandae? Illum consequuntur, minus suscipit cum at magni fugit corporis illo voluptate.</p><p>Rem molestias sapiente dolores quia provident iusto soluta fugiat corrupti, eaque distinctio atque illum adipisci unde recusandae aspernatur esse dolorum delectus aliquid voluptatibus error. Unde sed dolorum fugit quo saepe veritatis similique nesciunt adipisci distinctio vel, harum deserunt voluptatum obcaecati, modi sapiente, possimus quas corrupti deleniti ullam? Recusandae cumque nulla quae similique sed a expedita officiis eius praesentium, qui sapiente quod.</p>'
// ])