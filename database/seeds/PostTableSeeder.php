<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post =new \App\Posts([
            'imagePath' => '/images/post1.jpg',
            'postName' => 'Sample Post 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan erat vitae orci feugiat, quis condimentum tellus viverra. Ut sed ipsum id purus molestie vehicula. Aliquam facilisis odio viverra metus ultrices fermentum. Vivamus tristique ullamcorper imperdiet. Quisque sagittis vel diam quis auctor. Vivamus consequat ex ultricies nulla porttitor, sit amet imperdiet sem porta. Sed accumsan, massa at tempor feugiat, ipsum urna pellentesque purus, blandit auctor nisi velit sit amet arcu. Vestibulum scelerisque mattis porta. Phasellus dictum ut massa ac tristique. Morbi et elit quis diam ultrices pulvinar. Praesent porta consequat volutpat. Nulla vitae scelerisque ligula. Fusce scelerisque elit a convallis convallis. Maecenas sed sodales turpis. Suspendisse enim risus, pulvinar a sodales ac, laoreet vel ante. Aliquam posuere arcu justo, vel condimentum urna venenatis a. Nulla pulvinar interdum felis, id bibendum lectus ornare non. Cras lacus purus, porttitor eu odio a, rhoncus venenatis lorem. Etiam feugiat et tortor id dictum. Curabitur eu massa non mauris placerat euismod dapibus a turpis. Aliquam bibendum ac ex et pharetra. Nunc sodales hendrerit eros, in pellentesque tellus luctus sit amet.'
        ]);
        $post -> save();
        $post =new \App\Posts([
            'imagePath' => '/images/post2.jpg',
            'postName' => 'Sample Post 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan erat vitae orci feugiat, quis condimentum tellus viverra. Ut sed ipsum id purus molestie vehicula. Aliquam facilisis odio viverra metus ultrices fermentum. Vivamus tristique ullamcorper imperdiet. Quisque sagittis vel diam quis auctor. Vivamus consequat ex ultricies nulla porttitor, sit amet imperdiet sem porta. Sed accumsan, massa at tempor feugiat, ipsum urna pellentesque purus, blandit auctor nisi velit sit amet arcu. Vestibulum scelerisque mattis porta. Phasellus dictum ut massa ac tristique. Morbi et elit quis diam ultrices pulvinar. Praesent porta consequat volutpat. Nulla vitae scelerisque ligula. Fusce scelerisque elit a convallis convallis. Maecenas sed sodales turpis. Suspendisse enim risus, pulvinar a sodales ac, laoreet vel ante. Aliquam posuere arcu justo, vel condimentum urna venenatis a. Nulla pulvinar interdum felis, id bibendum lectus ornare non. Cras lacus purus, porttitor eu odio a, rhoncus venenatis lorem. Etiam feugiat et tortor id dictum. Curabitur eu massa non mauris placerat euismod dapibus a turpis. Aliquam bibendum ac ex et pharetra. Nunc sodales hendrerit eros, in pellentesque tellus luctus sit amet.'
        ]);
        $post -> save();
    }
}
