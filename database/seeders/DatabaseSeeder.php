<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Teacher;
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

         \App\Models\User::factory()->create([
            'name' => 'Test User',
             'email' => 'admin@mail.com',
             'password'=>'12345'
        ]);

        Listing::factory(10)->create();
        Teacher::factory(10)->create();

        // Listing::create([
            
        //         'title'=>'listing1',
        //         'tags'=>'lorem',
        //         'company'=>'lorem 2',
        //         'location'=>'kigali',
        //         'website'=>'web.com',
        //         'description'=>'lorem ipsum'  
        //     ]);
        //     Listing::create([
            
        //         'title'=>'listing2',
        //         'tags'=>'lorem',
        //         'company'=>'lorem 2',
        //         'location'=>'kigali',
        //         'website'=>'web.com',
        //         'description'=>'lorem ipsum'  
        //     ]);
    }
}
