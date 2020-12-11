<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
                'title'=> Str::random(20),
                'posts_id'=>Str::random(20),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'title'=> Str::random(20),
                'posts_id'=>Str::random(20),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
