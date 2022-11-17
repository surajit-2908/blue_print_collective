<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Setting;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Setting::create([
            'id' => '1',
            'contact_website' => 'www.myblueprintcollective.com',
            'contact_email' => 'info@myblueprintcollective.com',
            'contact_phone' => '7182887616',
            'contact_address' => '10 Bank Street Suite 560 White Plains, NY 10606'
        ]);
        // Admin::create([
        //     'id' => '1',
        //     'email' => 'info@blueprint.com',
        //     'password' => bcrypt('blueprint@2022'),
        //     'name' => 'Admin'
        // ]);
    }
}
