<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // use Illuminate\Support\Facades\DB;　を追記
use DateTime; // use DateTime;　を追記

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    // DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
