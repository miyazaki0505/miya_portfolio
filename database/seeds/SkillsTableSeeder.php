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

        DB::table('skills')->insert([
            'skill' => 'C#を使用したWEBアプリケーションやAPIの開発経験がある方',
            'project_id' => 4,
        ]);

        DB::table('skills')->insert([
            'skill' => 'RDBの設計経験がある方',
            'project_id' => 4,
        ]);

        DB::table('skills')->insert([
            'skill' => 'AWS、Azure、GCP等のクラウドを使用した開発、運用経験がある方',
            'project_id' => 4,
        ]);

        DB::table('skills')->insert([
            'skill' => 'GitHubを用いたチーム開発経験がある方',
            'project_id' => 4,
        ]);

        DB::table('skills')->insert([
            'skill' => 'WEBデザインの実務経験',
            'project_id' => 5,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Photoshop / Illustratorを用いた実務経験',
            'project_id' => 5,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Figma / XD / Sketch等プロトタイピングツールを用いた実務経験',
            'project_id' => 5,
        ]);

        DB::table('skills')->insert([
            'skill' => 'テスト項目書に従ったテスト実行経験',
            'project_id' => 6,
        ]);

        DB::table('skills')->insert([
            'skill' => 'レポート作成経験',
            'project_id' => 6,
        ]);

        DB::table('skills')->insert([
            'skill' => 'テスト設計経験',
            'project_id' => 6,
        ]);

        DB::table('skills')->insert([
            'skill' => 'JavaScriptを用いたバックエンド開発経験 1年以上',
            'project_id' => 7,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Webシステムのテスト経験 1年以上',
            'project_id' => 7,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Node.js又はExpressを用いた開発経験',
            'project_id' => 7,
        ]);

        DB::table('skills')->insert([
            'skill' => 'jQueryを用いた開発経験',
            'project_id' => 7,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Javaを用いた業務アプリにおける要件定義・設計・開発の経験',
            'project_id' => 8,
        ]);

        DB::table('skills')->insert([
            'skill' => 'JavaScriptを用いた開発経験',
            'project_id' => 8,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Swiftを用いた実務開発経験',
            'project_id' => 9,
        ]);

        DB::table('skills')->insert([
            'skill' => 'PHPを用いた開発経験3年以上',
            'project_id' => 10,
        ]);

        DB::table('skills')->insert([
            'skill' => 'Laravelを用いた開発経験3年以上',
            'project_id' => 10,
        ]);
    }
}
