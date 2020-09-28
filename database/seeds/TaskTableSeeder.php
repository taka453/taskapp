<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->truncate();
        DB::table('tasks')->insert([
            'title' => '会議の資料を作る',
            'contents' => '来週の打ち合わせの資料を作成する',
        ]);
        DB::table('tasks')->insert([
            'title' => '見積書作成',
            'contents' => 'お客様へ提案する書類を準備する',
        ]);
    }
}
