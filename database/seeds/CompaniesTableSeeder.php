<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => '株式会社UGS',
            'business_content' => 'パッケージソフトウェア事業、SaaSサービス事業、その他サービス事業等の運営・管理業務等',
            'employee_number' => 1485,
            'found_year' => 1996,
            'capital' => 2111900000,
            'representative_name' => '高橋孝治',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'ホームアプリケーションズ株式会社',
            'business_content' => 'コンサルティングサービス、システム開発、運用保守',
            'employee_number' => 865,
            'found_year' => 1999,
            'capital' => 4750000000,
            'representative_name' => '吉本ともみ',
        ]);

        DB::table('companies')->insert([
            'company_name' => '株式会社アストラ',
            'business_content' => 'デジタルマーケティング事業',
            'employee_number' => 1827,
            'found_year' => 1995,
            'capital' => 120870000000,
            'representative_name' => '今井悠太',
        ]);

        DB::table('companies')->insert([
            'company_name' => '株式会社トレードログ',
            'business_content' => 'ブロックチェーン関連事業',
            'employee_number' => 19,
            'found_year' => 2018,
            'capital' => 2500000,
            'representative_name' => '藤田誠広',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'CLasS10株式会社',
            'business_content' => 'オンラインレッスンプラットフォームの開発・運営',
            'employee_number' => 12,
            'found_year' => 2020,
            'capital' => 3000000,
            'representative_name' => '柳田翔',
        ]);

        DB::table('companies')->insert([
            'company_name' => '株式会社one',
            'business_content' => 'ECサイトの運営、開発',
            'employee_number' => 150,
            'found_year' => 2005,
            'capital' => 12000000,
            'representative_name' => '河本美希',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'トラスト株式会社',
            'business_content' => 'システム開発、運用保守',
            'employee_number' => 190,
            'found_year' => 2000,
            'capital' => 4540000,
            'representative_name' => '高田浩司',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'サーズテック株式会社',
            'business_content' => 'メーカー向けシステム開発事業',
            'employee_number' => 540,
            'found_year' => 2001,
            'capital' => 9000000,
            'representative_name' => '森本遥香',
        ]);

        DB::table('companies')->insert([
            'company_name' => '株式会社メディアドゥ',
            'business_content' => 'アプリ開発事業',
            'employee_number' => 90,
            'found_year' => 2017,
            'capital' => 4500000,
            'representative_name' => '木村基紀',
        ]);

        DB::table('companies')->insert([
            'company_name' => 'トレンドマイクロ株式会社',
            'business_content' => '医療系情報共有システム開発、支援事業',
            'employee_number' => 150,
            'found_year' => 2013,
            'capital' => 20000000,
            'representative_name' => '佐野琢磨',
        ]);
    }
}
