<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(FriendLinksTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SettingPagesTableSeeder::class);
    }
}
