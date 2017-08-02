<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->insert([
            [
                'id' => '1',
                'pid' => '0',
                'url' => '/home',
                'name' => '首页',
                'icon' => 'home',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '2',
                'pid' => '0',
                'url' => '/blogs',
                'name' => '博客',
                'icon' => 'view_quilt',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '3',
                'pid' => '0',
                'url' => '/tops',
                'name' => '排行',
                'icon' => 'whatshot',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '4',
                'pid' => '0',
                'url' => '/app',
                'name' => 'APP',
                'icon' => 'apps',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '5',
                'pid' => '0',
                'url' => '/single',
                'name' => '专题',
                'icon' => 'art_track',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '6',
                'pid' => '0',
                'url' => 'other',
                'name' => '其他',
                'icon' => 'view_carousel',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '7',
                'pid' => '6',
                'url' => '/about',
                'name' => '关于我们',
                'icon' => 'account_balance',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '8',
                'pid' => '6',
                'url' => '/contact',
                'name' => '联系我们',
                'icon' => 'location_on',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '9',
                'pid' => '6',
                'url' => '/item',
                'name' => '条款',
                'icon' => 'local_cafe',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '10',
                'pid' => '6',
                'url' => '/search',
                'name' => '搜索',
                'icon' => 'search',
                'weight' => '0',
                'status' => '1'
            ],
            [
                'id' => '11',
                'pid' => '6',
                'url' => '/products',
                'name' => '购物车',
                'icon' => 'shopping_cart',
                'weight' => '0',
                'status' => '1'
            ]
        ]);
    }
}
