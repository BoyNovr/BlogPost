<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

     User::create([
        'name'=>'Boy Novriyal',
        'username'=>'boynovrial',
        'email'=>'Boynovrial@gmail.com',
        'password'=> bcrypt('12345')
     ]);

   //   User::create([
   //      'name'=>'Rudi',
   //      'email'=>'Rudi@gmail.com',
   //      'password'=> bcrypt('12345')
   //   ]);

   User::factory(3)->create();
     Category::create([
        'name'=>'Web Programming',
        'slug'=>'web-programming'
     ]);
     Category::create([
      'name'=>'Web Design',
      'slug'=>'web-design'
   ]);
     Category::create([
        'name'=>'Personal',
        'slug'=>'personal'
     ]);
   //   Post::create([
   //      'title'=>'Judul Pertama',
   //      'slug'=>'judul-pertama',
   //      'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
   //      Maxime, quibusdam! Enim corrupti suscipit cum aut v
   //      oluptatum facere ut voluptas nemo magnam fugit ',
   //      'body'=>' repellendus modi corporis incidunt vel recusandae 
   //      eveniet obcaecati, odio inventore nobis, impedit 
   //      perspiciatis excepturi rerum eum fuga. Dignissimos 
   //      asperiores consequuntur, doloremque eaque quaerat 
   //      laborum nesciunt. Voluptatum, cumque perferendis 
   //      reiciendis laboriosam amet deleniti esse aspernatur 
   //      ratione similique recusandae sint voluptas eligendi 
   //      aliquid nisi a veniam. Magni architecto fuga dolor d
   //      ucimus libero quas ex voluptatem ab eum, impedit eaque 
   //      aliquam, unde reiciendis quasi esse adipisci. Aperiam 
   //      error repellendus dignissimos nobis voluptas! Commodi
   //       dolorum tenetur distinctio dignissimos cumque nobis 
   //       provident hic.',
   //       'category_id'=>1,
   //       'user_id'=>1
   //   ]);

   //   Post::create([
   //      'title'=>'Judul Kedua',
   //      'slug'=>'judul-kedua',
   //      'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
   //      Maxime, quibusdam! Enim corrupti suscipit cum aut v
   //      oluptatum facere ut voluptas nemo magnam fugit ',
   //      'body'=>' repellendus modi corporis incidunt vel recusandae 
   //      eveniet obcaecati, odio inventore nobis, impedit 
   //      perspiciatis excepturi rerum eum fuga. Dignissimos 
   //      asperiores consequuntur, doloremque eaque quaerat 
   //      laborum nesciunt. Voluptatum, cumque perferendis 
   //      reiciendis laboriosam amet deleniti esse aspernatur 
   //      ratione similique recusandae sint voluptas eligendi 
   //      aliquid nisi a veniam. Magni architecto fuga dolor d
   //      ucimus libero quas ex voluptatem ab eum, impedit eaque 
   //      aliquam, unde reiciendis quasi esse adipisci. Aperiam 
   //      error repellendus dignissimos nobis voluptas! Commodi
   //       dolorum tenetur distinctio dignissimos cumque nobis 
   //       provident hic.',
   //       'category_id'=>1,
   //       'user_id'=>1
   //   ]);

   //   Post::create([
   //      'title'=>'Judul Ketiga',
   //      'slug'=>'judul-ketiga',
   //      'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
   //      Maxime, quibusdam! Enim corrupti suscipit cum aut v
   //      oluptatum facere ut voluptas nemo magnam fugit ',
   //      'body'=>' repellendus modi corporis incidunt vel recusandae 
   //      eveniet obcaecati, odio inventore nobis, impedit 
   //      perspiciatis excepturi rerum eum fuga. Dignissimos 
   //      asperiores consequuntur, doloremque eaque quaerat 
   //      laborum nesciunt. Voluptatum, cumque perferendis 
   //      reiciendis laboriosam amet deleniti esse aspernatur 
   //      ratione similique recusandae sint voluptas eligendi 
   //      aliquid nisi a veniam. Magni architecto fuga dolor d
   //      ucimus libero quas ex voluptatem ab eum, impedit eaque 
   //      aliquam, unde reiciendis quasi esse adipisci. Aperiam 
   //      error repellendus dignissimos nobis voluptas! Commodi
   //       dolorum tenetur distinctio dignissimos cumque nobis 
   //       provident hic.',
   //       'category_id'=>2,
   //       'user_id'=>1
   //   ]);

   //   Post::create([
   //      'title'=>'Judul Keempat',
   //      'slug'=>'judul-keempat',
   //      'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
   //      Maxime, quibusdam! Enim corrupti suscipit cum aut v
   //      oluptatum facere ut voluptas nemo magnam fugit ',
   //      'body'=>' repellendus modi corporis incidunt vel recusandae 
   //      eveniet obcaecati, odio inventore nobis, impedit 
   //      perspiciatis excepturi rerum eum fuga. Dignissimos 
   //      asperiores consequuntur, doloremque eaque quaerat 
   //      laborum nesciunt. Voluptatum, cumque perferendis 
   //      reiciendis laboriosam amet deleniti esse aspernatur 
   //      ratione similique recusandae sint voluptas eligendi 
   //      aliquid nisi a veniam. Magni architecto fuga dolor d
   //      ucimus libero quas ex voluptatem ab eum, impedit eaque 
   //      aliquam, unde reiciendis quasi esse adipisci. Aperiam 
   //      error repellendus dignissimos nobis voluptas! Commodi
   //       dolorum tenetur distinctio dignissimos cumque nobis 
   //       provident hic.',
   //       'category_id'=>2,
   //       'user_id'=>2
   //   ]);

   Post::factory(20)->create();
    }
}

