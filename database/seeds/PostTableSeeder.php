<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $posts = array( [
      'user_id' => '1',
      'title' => 'teste de seeder',
      'description' => 'Teste de insert de post via seeder'
    ] );
        foreach ($posts as $key => $value) {
        	Post::create($value);
        }
    }
}
