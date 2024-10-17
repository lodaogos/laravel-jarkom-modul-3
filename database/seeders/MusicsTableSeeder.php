<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musics')->insert([
            [
                'title' => 'Waiting for Rain',
                'duration' => 313,
                'singer' => 'Minami',
                'language' => 'Japanese',
                'genre' => 'J-Pop',
                'link' => 'https://youtu.be/766qmHTc2ro?si=dK1mfzm5Y8YpaGou',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Die For You',
                'duration' => 260,
                'singer' => 'The Weeknd',
                'language' => 'English',
                'genre' => 'R&B/Soul',
                'link' => 'https://youtu.be/QLCpqdqeoII?si=PthUroXmyjgFvEn6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Menghapus Jejakmu',
                'duration' => 183,
                'singer' => 'Peterpan',
                'language' => 'Bahasa Indonesia',
                'genre' => 'Indonesian Pop',
                'link' => 'https://youtu.be/Qk8C5dDz3LU?si=G8kXuxJKzFVfRhMw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Check This One!',
                'duration' => 999,
                'singer' => '??????',
                'language' => '??????',
                'genre' => '??????',
                'link' => 'https://youtu.be/dQw4w9WgXcQ?si=MPpGaUe9KaJ7l_Dj',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
