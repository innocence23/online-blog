<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //这个是插入假数据 随机邮箱插入三条假数据
        //factory('App\Models\Admin',3)->create([
        //    'password' => bcrypt('123456')
        //]);

        \DB::table('admins')->insert([
            'name' => '莞尔',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin@123'),
        ]);
    }
}
