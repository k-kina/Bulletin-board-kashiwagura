<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ユーザー初期設定
        DB::table('users')->insert([
            'username' => '柏倉 希奈',
            'email' => 'kina0909@yahoo.co.jp',
            'password' => bcrypt('kina0909'),
            'admin_role' => '1',
        ]);
    }
}
