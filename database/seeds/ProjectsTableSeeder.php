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
    }
}
