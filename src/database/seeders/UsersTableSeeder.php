<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => '田中',
            'email' => 'a@a',
            'password' => 'hoge'
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => '佐藤',
            'email' => 'b@b',
            'password' => 'piyo'
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => '鈴木',
            'email' => 'c@c',
            'password' => 'hoge.and.piyo'
        ];
        DB::table('users')->insert($users);
    }
}
