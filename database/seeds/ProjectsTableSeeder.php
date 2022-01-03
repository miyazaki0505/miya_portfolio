<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_name' => '生保向け販売支援システム開発',
            'work_location' => 13,
            'unit_price' => 700000,
            'occupation' => 2,
            'language' => 1,
            'work_content' => '生命保険会社向けのシステム開発に携わっていただきます。担当工程は要件定義、基本設計、詳細設計、開発、テスト、品質管理、リリースまでを想定しております。開発担当と設計担当に分かれて作業いただく想定です。',
            'company_id' => 1,
        ]);

        DB::table('projects')->insert([
            'project_name' => 'キャリア支援サービス開発',
            'work_location' => 28,
            'unit_price' => 850000,
            'occupation' => 6,
            'language' => 5,
            'work_content' => 'キャリア支援サービスにおける主力サービスの機能開発や共通基盤システムの機能開発推進をご担当いただきます。',
            'company_id' => 2,
        ]);

        DB::table('projects')->insert([
            'project_name' => '不動産情報サイト物件検索API改修',
            'work_location' => 40,
            'unit_price' => 650000,
            'occupation' => 1,
            'language' => 2,
            'work_content' => '不動産情報サービスリニューアルに伴う、物件検索APIの改修をご担当いただきます。社内ツール・バッチアプリケーション等の改修を行います。設計から開発やテストまで幅広く担当していただきます。',
            'company_id' => 3,
        ]);

        DB::table('projects')->insert([
            'project_name' => '製造業向け電子帳票システムサーバーサイド開発',
            'work_location' => 40,
            'unit_price' => 750000,
            'occupation' => 2,
            'language' => 4,
            'work_content' => '製造業向け電子帳票システムのサーバーサイド開発をお任せします。',
            'company_id' => 4,
        ]);

        DB::table('projects')->insert([
            'project_name' => 'オンラインレッスンプラットフォームのコンセプトデザイン',
            'work_location' => 14,
            'unit_price' => 600000,
            'occupation' => 10,
            'language' => 11,
            'work_content' => 'ニュース速報アプリの特設企画ページなどのディレクションとデザイン業務を想定した募集です。ワイヤーフレームの作成や開発を意識したデザインの作成をお任せいたします。',
            'company_id' => 5,
        ]);

        DB::table('projects')->insert([
            'project_name' => 'テスト実施',
            'work_location' => 23,
            'unit_price' => 450000,
            'occupation' => 4,
            'language' => 2,
            'work_content' => 'ECサイトのテスト実施に携わっていただきます｡テスト設計もスキルに併せてお任せ致します。',
            'company_id' => 6,
        ]);
        
        DB::table('projects')->insert([
            'project_name' => '公共物障害通報システム保守開発',
            'work_location' => 13,
            'unit_price' => 650000,
            'occupation' => 1,
            'language' => 7,
            'work_content' => 'JavaScriptを用いた公共物障害通報システム保守開発案件に携わっていただきます。詳細設計以降の開発、API開発及びバッチ開発をご担当いただきます。',
            'company_id' => 7,
        ]);

        DB::table('projects')->insert([
            'project_name' => '製造メーカー向け基幹システム開発',
            'work_location' => 17,
            'unit_price' => 700000,
            'occupation' => 2,
            'language' => 1,
            'work_content' => '製造メーカー向け基幹システム開発案件に携わっていただきます。既存システムのリプレイス～テスト,機能追加に伴う要件定義～テストをお任せいたします。',
            'company_id' => 8,
        ]);

        DB::table('projects')->insert([
            'project_name' => 'iPadアプリ開発',
            'work_location' => 13,
            'unit_price' => 800000,
            'occupation' => 12,
            'language' => 8,
            'work_content' => 'Swiftを用いたシステム開発案件に携わっていただきます。基本設計以降の実務開発業務、Swiftを用いたアプリ開発業務をご担当いただきます。',
            'company_id' => 9,
        ]);

        DB::table('projects')->insert([
            'project_name' => '医療系情報共有システム開発支援',
            'work_location' => 13,
            'unit_price' => 500000,
            'occupation' => 2,
            'language' => 2,
            'work_content' => '医療系情報共有システム開発支援に携わっていただきます。PHP、Laravelを用いた開発をご担当いただきます。',
            'company_id' => 10,
        ]);
    }
}
