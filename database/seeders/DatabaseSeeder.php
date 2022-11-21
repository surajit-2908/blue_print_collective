<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Content;

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
        // Setting::create([
        //     'id' => '1',
        //     'contact_website' => 'www.myblueprintcollective.com',
        //     'contact_email' => 'info@myblueprintcollective.com',
        //     'contact_phone' => '7182887616',
        //     'contact_address' => '10 Bank Street Suite 560 White Plains, NY 10606'
        // ]);
        // Admin::create([
        //     'id' => '1',
        //     'email' => 'info@blueprint.com',
        //     'password' => bcrypt('blueprint@2022'),
        //     'name' => 'Admin'
        // ]);

        Content::create([
            'page' => 'home',
            'position' => 'top_banner',
            'content' => ''
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'about_section',
            'content' => ''
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'our_mission',
            'content' => ''
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'new_educator_development',
            'content' => ''
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'resources',
            'content' => ''
        ]);
        Content::create([
            'page' => 'home',
            'position' => 'bottom',
            'content' => ''
        ]);

        Content::create([
            'page' => 'service',
            'position' => 'top',
            'content' => ''
        ]);
        Content::create([
            'page' => 'service',
            'position' => 'our_services',
            'content' => ''
        ]);
        Content::create([
            'page' => 'service',
            'position' => 'new_educator_development',
            'content' => ''
        ]);
        Content::create([
            'page' => 'service',
            'position' => 'high_school_graduate',
            'content' => ''
        ]);
        Content::create([
            'page' => 'service',
            'position' => 'special_education',
            'content' => ''
        ]);

        Content::create([
            'page' => 'about',
            'position' => 'top',
            'content' => ''
        ]);
        Content::create([
            'page' => 'about',
            'position' => 'our_mission',
            'content' => ''
        ]);

        Content::create([
            'page' => 'contact',
            'position' => 'top',
            'content' => ''
        ]);
    }
}
