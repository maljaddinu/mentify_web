<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'comments_text' => 'Mengikuti kegiatan bootcamp di Giza Lab mantap banget, Kegiatannya sangat seru dan isi materinya daging wagyu semua.',
                'comments_person' => 'Rivaldi Pratama',
                'comments_title' => 'UI Design at Giza Lab',
            ],
            [
                'comments_text' => 'Awesome',
                'comments_person' => 'Gates Bill',
                'comments_title' => 'UI Design at Microsoft'
            ],
            [
                'comments_text' => 'It Marvelous',
                'comments_person' => 'Mac Gregor',
                'comments_title' => 'UI Design at MMA'
            ]
        ];

        $webinars = [
            [
                'webinars_name' => 'Basic Of UX Writing - Module 101',
                'webinars_category' =>  'UX Writing',
                'webinars_level' => 'Easy',
                'webinars_quota' => 20,
                'webinars_booked' => 18,
                'webinars_end_registration' => date('Y-m-d',strtotime('+2 day'))
            ],
            [
                'webinars_name' => 'Perkenalan UX Design',
                'webinars_category' =>  'UX Design',
                'webinars_level' => 'Intermediate',
                'webinars_quota' => 20,
                'webinars_booked' => 10,
                'webinars_end_registration' => date('Y-m-d',strtotime('+3 day'))
            ],
            [
                'webinars_name' => 'Basic Of UX Writing - Module 303',
                'webinars_category' =>  'UX Writing',
                'webinars_level' => 'Easy',
                'webinars_quota' => 20,
                'webinars_booked' => 20,
                'webinars_end_registration' => date('Y-m-d',strtotime('+2 day'))
            ],
            [
                'webinars_name' => 'Basic Of UX Writing - Module 404',
                'webinars_category' =>  'UX Writing',
                'webinars_level' => 'Expert',
                'webinars_quota' => 20,
                'webinars_booked' => 5,
                'webinars_end_registration' => date('Y-m-d',strtotime('+1 day'))
            ]
        ];

        DB::table('comments')->insert($comments);
        DB::table('webinars')->insert($webinars);
    }
}
