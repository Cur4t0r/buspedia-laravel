<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        History::create([
            'name' => 'Juned',
            'slug' => 'juned',
            'start' => 'Jakarta',
            'finish' => 'Bandung',
            'total_seat' => '2',
        ]);
        History::create([
            'name' => 'Maimunah',
            'slug' => 'maimunah',
            'start' => 'Palembang',
            'finish' => 'Lampung',
            'total_seat' => '1',
        ]);
        History::create([
            'name' => 'Radi Norman',
            'slug' => 'radi-norman',
            'start' => 'Cirebon',
            'finish' => 'Surabaya',
            'total_seat' => '1',
        ]);
    }
}
