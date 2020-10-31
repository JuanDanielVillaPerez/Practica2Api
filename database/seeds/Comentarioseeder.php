<?php

use Illuminate\Database\Seeder;

class Comentarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            [
                'comentario'=>'Comentario 1 post 1',
                'post_id'=>'1'
            ],
            [
                'comentario'=>'Comentario 2 post 1',
                'post_id'=>'1'
            ],
            [
                'comentario'=>'Comentario 1 post 2',
                'post_id'=>'2'
            ],
            [
                'comentario'=>'Comentario 2 post 2',
                'post_id'=>'2'
            ],
            [
                'comentario'=>'Comentario 3 post 2',
                'post_id'=>'2'
            ],
            [
                'comentario'=>'Comentario 1 post 3',
                'post_id'=>'3'
            ],
            [
                'comentario'=>'Comentario 2 post 3',
                'post_id'=>'3'
            ],
            [
                'comentario'=>'Comentario 1 post 4',
                'post_id'=>'4'
            ]
        ]);
    }
}
