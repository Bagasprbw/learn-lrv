<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::create([
        //     "name" => 'Bagas Prabowo',
        //     "email" => 'bagasprabowo@gmail.com',
        //     "password" => bcrypt('1234')
        // ]);
        // User::create([
        //     "name" => 'Prabowo Gibran',
        //     "email" => 'gibranprabowo@gmail.com',
        //     "password" => bcrypt('1234')
        // ]);

        User::factory(3)->create();
        Category::create([
            "name" => 'Web Programming',
            "slug" => 'web-programing'
        ]);
        Category::create([
            "name" => 'Personal',
            "slug" => 'personal'
        ]);
        Post::factory(10)->create();


        // Post::create([
        //     "title" => 'Judul Kapisan',
        //     "slug" => 'judul-kapisan',
        //     "excerpt" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet',
        //     "body" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet ducimus ipsa eveniet voluptas magni quas, assumenda dolorem suscipit, numquam accusantium officiis, nobis asperiores soluta aperiam esse in a dolorum delectus! Quaerat quo ex iure non doloribus tempore optio accusantium cupiditate eum sed neque, alias id beatae earum ab suscipit amet rerum hic cumque omnis, vero distinctio totam eius quae? Inventore, at? Voluptas nisi fuga tempore temporibus deserunt labore cum necessitatibus molestiae? Officiis cum molestias voluptatibus assumenda quas quia culpa sed ex velit harum distinctio corrupti aliquid eius repellendus nam, eaque explicabo provident est!',
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => 'Judul Kapindo',
        //     "slug" => 'judul-kapindo',
        //     "excerpt" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet',
        //     "body" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet ducimus ipsa eveniet voluptas magni quas, assumenda dolorem suscipit, numquam accusantium officiis, nobis asperiores soluta aperiam esse in a dolorum delectus! Quaerat quo ex iure non doloribus tempore optio accusantium cupiditate eum sed neque, alias id beatae earum ab suscipit amet rerum hic cumque omnis, vero distinctio totam eius quae? Inventore, at? Voluptas nisi fuga tempore temporibus deserunt labore cum necessitatibus molestiae? Officiis cum molestias voluptatibus assumenda quas quia culpa sed ex velit harum distinctio corrupti aliquid eius repellendus nam, eaque explicabo provident est!',
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => 'Judul Katiga',
        //     "slug" => 'judul-katiga',
        //     "excerpt" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet',
        //     "body" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis debitis quibusdam illum ex architecto iusto amet ducimus ipsa eveniet voluptas magni quas, assumenda dolorem suscipit, numquam accusantium officiis, nobis asperiores soluta aperiam esse in a dolorum delectus! Quaerat quo ex iure non doloribus tempore optio accusantium cupiditate eum sed neque, alias id beatae earum ab suscipit amet rerum hic cumque omnis, vero distinctio totam eius quae? Inventore, at? Voluptas nisi fuga tempore temporibus deserunt labore cum necessitatibus molestiae? Officiis cum molestias voluptatibus assumenda quas quia culpa sed ex velit harum distinctio corrupti aliquid eius repellendus nam, eaque explicabo provident est!',
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);
    }
}

