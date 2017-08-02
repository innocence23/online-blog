<?php

use Illuminate\Database\Seeder;

class FriendLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('friend_links')->insert([
            [
                'name' => 'lofter',
                'url' => 'http://www.lofter.com/',
                'pic' => '2017-07/sNgpnpqpuK7ZUQoEnXYidFIJ76R9IXtNExSFVESE.jpeg',
                'desc' => '网易lofter',
                'weight' => '1',
                'info' => '网易lofter',
                'status' => '1',
            ],
            [
                'name' => '推搪',
                'url' => 'https://www.duitang.com/',
                'pic' => '2017-07/T9K04A87zneQ1ONq5zktauHFiLMnij3rdSAy3GqD.png',
                'desc' => '推搪',
                'weight' => '1',
                'info' => '推搪',
                'status' => '1',
            ],
            [
                'name' => '象形字典',
                'url' => 'http://www.vividict.com/',
                'pic' => '2017-07/WVYl2aqB5rKLkac4fwwGnoo4gg2IkxSqCBL4iJ3j.jpeg',
                'desc' => '象形字典',
                'weight' => '1',
                'info' => '象形字典',
                'status' => '1',
            ],
            [
                'name' => '字得其乐',
                'url' => 'http://www.zzideqile.com/',
                'pic' => '2017-07/AzgNh5sMDWWAr3lew7Cvm3KmtgGUUIZC1dvasq2Y.jpeg',
                'desc' => '字得其乐',
                'weight' => '1',
                'info' => '字得其乐',
                'status' => '1',
            ],
        ]);
    }
}
