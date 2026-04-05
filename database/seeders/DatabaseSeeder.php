<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. DATA PROJECTS
        Project::truncate();
        Project::create([
            'title' => 'VollyHub',
            'description' => 'Website informasi extra voli sekolah. Integrasi antara hobi olahraga dan skill coding.',
            'tech_stack' => 'CSS, HTML,JS',
            'link' => 'https://vollyhub.netlify.app'
        ]);


        Project::create([
            'title' => 'Personal Branding V1',
            'description' => 'Iterasi pertama website portofolio pribadi dengan fokus pada performa.',
            'tech_stack' => 'Laravel, SQlite',
            'link' => 'https://github.com/rayhanpwtnagatama-beep/personal-branding-v1'
        ]);

        // 2. DATA EXPERIENCES (3 DATA UNTUK 3 GRID)
        Experience::truncate();
        Experience::create([
            'title' => 'Juara 2 DBC',
            'organization' => 'Widya Mandala Chatolic University',
            'period' => '2025',
            'description' => 'Juara 2 dari 18 tim dalam lomba Digital Business Competion. Presentasi dengan media Tableau.',
            'image_url' => 'images/DBC.jpg'
        ]);

        Experience::create([
            'title' => 'Tutorial OSN Matematika SMP',
            'organization' => 'Tingkat Kota',
            'period' => '2025',
            'description' => 'Mengajarkan materi OSN SMP kepada adik-adik SMP yang bekerja sama dengan Frateran',
            'image_url' => 'images/TUTOR.png'
        ]);

        Experience::create([
            'title' => 'Pemain Voli Sekolah',
            'organization' => 'Tim Voli Frateran',
            'period' => '2023 - Sekarang',
            'description' => 'Berlatih disiplin setiap hari untuk meningkatkan ketahanan fisik dan kerjasama tim dalam turnamen.',
            'image_url' => 'images/POLI.jpeg'
        ]);

    }
}