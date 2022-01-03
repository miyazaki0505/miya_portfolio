<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherRequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('other_requirements')->insert([
            'other_requirement' => '商談回数：1回',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'オンライン商談：可',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '募集人数：10人',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '作業開始日：2023/01/01',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '最低稼働日数：週5日',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'リモートワーク：一部リモート',
            'project_id' => 1,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '商談回数：1回',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'オンライン商談：可',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '募集人数：1人',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '作業開始日：2022/01/04',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '最低稼働日数：週3日',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'リモートワーク：フルリモート',
            'project_id' => 2,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '商談回数：1回',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'オンライン商談：可',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '募集人数：1人',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '作業開始日：2022/02/01',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '最低稼働日数：週5日',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'リモートワーク：一部リモート',
            'project_id' => 3,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '商談回数：1回',
            'project_id' => 4,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '募集人数：4人',
            'project_id' => 4,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '作業開始日：2022/08/01',
            'project_id' => 4,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '最低稼働日数：週5日',
            'project_id' => 4,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'リモートワーク：フルリモート',
            'project_id' => 4,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '商談回数：1回',
            'project_id' => 5,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '募集人数：2人',
            'project_id' => 5,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '作業開始日：2022/04/01',
            'project_id' => 5,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => '最低稼働日数：週4日',
            'project_id' => 5,
        ]);

        DB::table('other_requirements')->insert([
            'other_requirement' => 'リモートワーク：フルリモート',
            'project_id' => 5,
        ]);

    }
}
