<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [ "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => " Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Suscipit eaque excepturi dignissimos sint, velit sed tenetur minus doloremque totam,
            nemo quo necessitatibus inventore esse perferendis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus, illo doloremque necessitatibus natus labore, optio at maxime quaerat corporis
            vero laudantium enim debitis asperiores. Et deserunt quisquam atque corrupti nihil?"
        ],
        [ "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "body" => " Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Consequatur dolore dolores cupiditate excepturi ipsam! Ab quae est unde.
            Commodi, quae pariatur et delectus modi, magnam debitis unde quas fugit veniam sunt voluptatem.
            Doloremque maxime corporis nihil harum illo! Magnam nam tempora exercitationem. Quod saepe adipisci ea quis,
            eaque recusandae illum ullam debitis, dolor in quia autem reprehenderit nesciunt omnis nulla dolore aliquam
            fugiat? Dolorum dolor corporis provident repudiandae est beatae esse adipisci. Velit fugiat voluptas necessitatibus
            ullam ea, eius corrupti quibusdam excepturi vel quod esse numquam labore quos, veniam earum? Officiis, repudiandae
            ipsa. Commodi ratione quos dolor sequi veritatis non."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);       //memakai collect untuk mengkoleksi array
    }

    public static function find($slug)
    {
        $posts = static::all();    //=>sebelunya self::$blog_post
        //     $post = [];
        //     foreach($posts as $p){
        //         if($p["slug"] === $slug){
        //         $post = $p;
        //         }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
