<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $templates = [
            [
                'name' => "Classic Strip",
                'slug' => "classic-strip",
                'thumbnail' => null,
                'is_active' => true
            ],
            [
                'name' => "Vintage Grid",
                'slug' => "vintage-grid",
                'thumbnail' => null,
                'is_active' => true
            ],
            [
                'name' => "Neon Vibes",
                'slug' => "neon-vibes",
                'thumbnail' => null,
                'is_active' => true
            ],
            [
                'name' => "Minimalist",
                'slug' => "minimalist",
                'thumbnail' => null,
                'is_active' => true
            ]
        ];

        foreach ($templates as $template) {
            DB::table('templates')->insert(array_merge($template, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
