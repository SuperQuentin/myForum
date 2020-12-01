<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                'name' => 'Agilité'
            ],
            [
                'name' => 'API'
            ],
            [
                'name' => 'Conventions de codage'
            ],
            [
                'name' => 'CSS'
            ],
            [
                'name' => 'Distribution Linux'
            ],
            [
                'name' => 'Éditeur de texte'
            ],
            [
                'name' => 'Environnement de travail'
            ],
            [
                'name' => 'Game design'
            ],
            [
                'name' => 'Javascript'
            ],
            [
                'name' => 'Linkedin'
            ],
            [
                'name' => 'Opensource'
            ],
            [
                'name' => 'Python'
            ],
            [
                'name' => 'SASS'
            ],
            [
                'name' => 'Système d\'exploitation'
            ],
            [
                'name' => 'TempleOS'
            ]
        ];
        foreach($themes as $theme) Theme::create($theme);
    }
}
