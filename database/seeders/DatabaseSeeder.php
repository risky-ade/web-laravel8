<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;

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
            'name' => 'Risky Ade Sucahyo',
            'username' => 'riskyadesucahyo',
            'email' => 'riskyadesucahyo@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //  User::create([
        //     'name' => 'Ade Sucahyo',
        //     'email' => 'adesucahyo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create ([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit',
        //     'body'=> '<p> ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit rerum aperiam delectus! Ab enim minima iure quia cumque reprehenderit quae ullam maiores,</p><p>repellat iste consequatur commodi quod doloremque ut labore exercitationem, autem impedit temporibus. Tempore architecto impedit eveniet. Ducimus numquam mollitia non, minus voluptate impedit officia accusantium labore facere, totam reprehenderit assumenda aliquid eius iste porro eaque magni enim alias saepe. Pariatur ad maxime laboriosam cupiditate adipisci in labore ratione. Atque neque iusto veritatis qui totam culpa quas cum earum numquam labore dicta, quidem aperiam pariatur ipsa natus, modi, odit nemo explicabo ex?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo error consequatur hic nisi sapiente? Error harum neque minus! Molestias illo repellat iusto similique consequatur dolorum voluptatem molestiae omnis ipsa dolore!</p>',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title'=> 'Judul Ke Dua',
        //     'slug'=> 'judul-ke-dua',
        //     'excerpt'=> 'ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit',
        //     'body'=> '<p> ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit rerum aperiam delectus! Ab enim minima iure quia cumque reprehenderit quae ullam maiores,</p><p>repellat iste consequatur commodi quod doloremque ut labore exercitationem, autem impedit temporibus. Tempore architecto impedit eveniet. Ducimus numquam mollitia non, minus voluptate impedit officia accusantium labore facere, totam reprehenderit assumenda aliquid eius iste porro eaque magni enim alias saepe. Pariatur ad maxime laboriosam cupiditate adipisci in labore ratione. Atque neque iusto veritatis qui totam culpa quas cum earum numquam labore dicta, quidem aperiam pariatur ipsa natus, modi, odit nemo explicabo ex?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo error consequatur hic nisi sapiente? Error harum neque minus! Molestias illo repellat iusto similique consequatur dolorum voluptatem molestiae omnis ipsa dolore!</p>',
        //     'category_id'=> 1,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title'=> 'Judul Ke Tiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt'=> 'ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit',
        //     'body'=> '<p> ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit rerum aperiam delectus! Ab enim minima iure quia cumque reprehenderit quae ullam maiores,</p><p>repellat iste consequatur commodi quod doloremque ut labore exercitationem, autem impedit temporibus. Tempore architecto impedit eveniet. Ducimus numquam mollitia non, minus voluptate impedit officia accusantium labore facere, totam reprehenderit assumenda aliquid eius iste porro eaque magni enim alias saepe. Pariatur ad maxime laboriosam cupiditate adipisci in labore ratione. Atque neque iusto veritatis qui totam culpa quas cum earum numquam labore dicta, quidem aperiam pariatur ipsa natus, modi, odit nemo explicabo ex?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo error consequatur hic nisi sapiente? Error harum neque minus! Molestias illo repellat iusto similique consequatur dolorum voluptatem molestiae omnis ipsa dolore!</p>',
        //     'category_id'=> 2,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title'=> 'Judul Ke Empat',
        //     'slug'=> 'judul-ke-empat',
        //     'excerpt'=> 'ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit',
        //     'body'=> '<p> ipsum dolor sit amet consectetur adipisicing elit. Illo, optio vero ratione quaerat dignissimos cum? Suscipit rerum aperiam delectus! Ab enim minima iure quia cumque reprehenderit quae ullam maiores,</p><p>repellat iste consequatur commodi quod doloremque ut labore exercitationem, autem impedit temporibus. Tempore architecto impedit eveniet. Ducimus numquam mollitia non, minus voluptate impedit officia accusantium labore facere, totam reprehenderit assumenda aliquid eius iste porro eaque magni enim alias saepe. Pariatur ad maxime laboriosam cupiditate adipisci in labore ratione. Atque neque iusto veritatis qui totam culpa quas cum earum numquam labore dicta, quidem aperiam pariatur ipsa natus, modi, odit nemo explicabo ex?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo error consequatur hic nisi sapiente? Error harum neque minus! Molestias illo repellat iusto similique consequatur dolorum voluptatem molestiae omnis ipsa dolore!</p>',
        //     'category_id'=> 2,
        //     'user_id' => 2
        // ]);
    }
}
