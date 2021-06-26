<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Profiles;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Profiles::truncate();

        Profiles::create([
            "uid" => 1,
            "address" => "Jakarta",
            "phone" => "085791313",
            "img_url" => 'https://miro.medium.com/max/459/1*TRvOBEAT6-JgPSPr7dpSgg.png',
            "description" => 'test profile'
        ]);
    }
}
