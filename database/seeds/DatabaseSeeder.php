<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Mike',
            'email' => 'mcraig@github.com',
            'password' => bcrypt('secret')
        ]);

        \App\Order::create([]); // empty OK

        \App\EventItem::create([
            'name' => 'Item 1',  'price' => '456.00'
        ]);
        \App\EventItem::create([
            'name' => 'Item 2', 'price' => '123.00'
        ]);

        \App\DonationType::create([
            'name' => 'Type 1',
        ]);
        \App\DonationType::create([
            'name' => 'Type 2',
        ]);
    }
}
