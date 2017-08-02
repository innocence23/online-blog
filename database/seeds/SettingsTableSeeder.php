<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            'id' => '1',
            'name' => 'demo网站',
            'logo' => '1',
            'bgimage' => '1',
            'qq' => '0123456',
            'Email' => 'demo@demo.org',
            'weixin' => '微信搜索‘DEMOWEB‘',
            'weibo' => 'http://weibo.com/u/demo',
            'google' => 'http://plus.google.com/',
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://twitter.com/',
            'fax' => '我是传真',
            'contact' => '我是联系人',
            'position' => '周口太昊陵公园',
            'position_x' => '114.893517',
            'position_y' => '33.75399',
            'bstable_line_count' => '20',
            'desc' => '我是demo实例网站',
            'copyright' => '© 2010-2020 Demo Website',
            'info' => '我是备注'
        ]);
    }
}
