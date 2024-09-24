<?php

namespace App\Models;

class Post
{
  public static function all()
  {
    return
    [
        [
            'id'=>1,
            'slug'=>'judul-artikel-1',
            'title'=>'Artikel 1',
            'autor'=>'Deni Maulana',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nihil corporis corrupti, officiis nulla reprehenderit nemo
            repellendus odit natus ipsa exercitationem fuga! Voluptas,
            voluptatem dolorum? Dolorum deserunt odit exercitationem cum molestiae.'
        ],
        [
            'id'=>2,
            'slug'=>'judul-artikel-2',
            'title'=>'Artikel 2',
            'autor'=>'Deni Maulana',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nihil corporis corrupti, officiis nulla reprehenderit nemo
            repellendus odit natus ipsa exercitationem fuga! Voluptas,
            voluptatem dolorum? Dolorum deserunt odit exercitationem cum molestiae.'
        ]

        ];
  }
}
?>
