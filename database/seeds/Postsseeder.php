<?php

use Illuminate\Database\Seeder;

class Postsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        [
            'post'=>'Primer post hola que tal'
        ],
        [
            'post'=>'segundo post hola que tal'
        ],
        [
            'post'=>'tercer post hola que tal'
        ],
        [
            'post'=>'cuarto post hola que tal'
        ],
        [
            'post'=>'quinto post hola que tal'
        ],
        ]);
    }
}
