<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'last_name' => '山田',
            'first_name' => '太郎',
            'last_name_ruby' => 'やまだ',
            'first_name_ruby' => 'たろう',
            'birth_year' => 1988,
            'birth_month' => 8,
            'birth_day' => 9,
            'email' => 'yamada@sample.com',
            'password' => bcrypt('yamada'),
            'work_location' => 13,
            'occupation' => 1,
            'language' => 2,
            'about_myself' => 'Webプログラマーとして5年間勤務し、Javaを中心に、C、JavaScriptなどのプログラミング言語を習得しております。また、業務ではGithubとQiitaを活用して参りました。',
        ]);

        DB::table('users')->insert([
            'last_name' => '吉田',
            'first_name' => '優子',
            'last_name_ruby' => 'よしだ',
            'first_name_ruby' => 'ゆうこ',
            'birth_year' => 1996,
            'birth_month' => 12,
            'birth_day' => 18,
            'email' => 'yoshida@sample.com',
            'password' => bcrypt('yoshida'),
            'work_location' => 14,
            'occupation' => 2,
            'language' => 2,
            'about_myself' => '私は、業務効率改善の社内システムの新規開発経験があり、社内営業部門の業務効率改善を目的としたプロジェクトに参画しておりました。他にも小規模な社内システムの開発経験は複数あります。',
        ]);

        DB::table('users')->insert([
            'last_name' => '加藤',
            'first_name' => '聡太',
            'last_name_ruby' => 'かとう',
            'first_name_ruby' => 'そうた',
            'birth_year' => 1984,
            'birth_month' => 2,
            'birth_day' => 2,
            'email' => 'katou@sample.com',
            'password' => bcrypt('katou'),
            'work_location' => 15,
            'occupation' => 2,
            'language' => 2,
            'about_myself' => '私は、業務効率改善の社内システムの新規開発経験があり、社内営業部門の業務効率改善を目的としたプロジェクトに参画しておりました。他にも小規模な社内システムの開発経験は複数あります。',
        ]);

        DB::table('users')->insert([
            'last_name' => '徳田',
            'first_name' => '裕一',
            'last_name_ruby' => 'とくだ',
            'first_name_ruby' => 'ゆういち',
            'birth_year' => 1995,
            'birth_month' => 4,
            'birth_day' => 15,
            'email' => 'tokuda@sample.com',
            'password' => bcrypt('tokuda'),
            'work_location' => 14,
            'occupation' => 10,
            'language' => 11,
            'about_myself' => '現在自社開発に参画中。言語使用歴4年。',
        ]);
    }
}
