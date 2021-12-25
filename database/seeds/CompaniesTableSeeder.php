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
    }
}
