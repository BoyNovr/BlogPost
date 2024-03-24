<?php

namespace App\Models;


class Post 
{
    private static $blog_post=[
        [
            "title"=>"Judul post pertama",
            "slug"=>"judul_post_pertama",
            "Author"=>"Boy Novriyal",
            "Body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quis repellendus saepe nam minima? 
            Tenetur dolorum provident reiciendis ab illo quos recusandae mollitia architecto, cum perspiciatis, 
            ipsa quaerat. Dolorem quas quaerat, iure quis voluptates, laborum officiis error earum dolorum praesentium atque, 
            laudantium ab voluptatibus deleniti officia voluptatum eius aperiam temporibus consequatur. Expedita voluptatibus 
            blanditiis cumque minima ad quae dolorem, vitae aspernatur quo libero assumenda nulla veritatis corporis minus aliquam 
            ipsum."
        ],
        [
            "title"=>"Judul Post kedua",
            "slug"=>"judul_post_kedua",
            "Author"=>"Rudi guli",
            "Body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, tenetur nihil? Nobis possimus dicta illo commodi, 
            facere rem recusandae modi necessitatibus voluptate dignissimos nisi, provident magnam minus! Eum modi harum quaerat 
            doloremque et exercitationem. Labore nostrum molestias corporis quas natus. Distinctio voluptas delectus harum itaque 
            perspiciatis dicta ipsum autem blanditiis porro similique doloribus fugit sed nostrum quasi accusantium officia laborum, 
            quod sunt fuga iste. Expedita et dolor repellat quas voluptates minus adipisci blanditiis! Minima nostrum architecto est 
            labore quae nesciunt iste incidunt, consectetur, 
            fuga aliquid vero impedit? Quaerat hic quo, cumque ratione quas esse. Vel magni inventore impedit aliquid repellat."
        ]
    ];

    public static function all()
    {
//collect pada laravel adalah pembungkus data array sehingga memungkinkan kita menjalankan
//fungsi tambahan pada laravel, misalnya fungsi firstWhere dibawah ini yang membuat kita tidak perlu melakukan looping 
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts=static::all();
        // $post=[];
        // foreach($posts as $p){
        //     if($p["slug"]===$slug){
        //         $post=$p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
