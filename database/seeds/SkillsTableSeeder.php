<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'skill' => 'Javaを用いた開発経験',
            'project_id' => 1,
        ]);

        DB::table('skills')->insert([
            'skill' => '詳細設計の経験',
            'project_id' => 1,
        ]);

        DB::table('skills')->insert([
            'skill' => '基本設計の経験',
            'project_id' => 1,
        ]);

        DB::table('skills')->insert([
            'skill' => 'テスト設計の経験',
            'project_id' => 1,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Ruby on Railsでの開発経験',
            'project_id' => 2,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Reactでの開発経験',
            'project_id' => 2,
        ]);

        DB::table('skills')->insert([
            'skill' => 'PHPおよびRubyを使用したWebアプリケーション開発経験',
            'project_id' => 3,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Linuxサーバー上での開発経験',
            'project_id' => 3,
        ]);

        DB::table('skills')->insert([
            'skill' => 'RDBの利用経験',
            'project_id' => 3,
        ]);

    }
}
