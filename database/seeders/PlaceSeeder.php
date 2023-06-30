<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\Season;
use App\Models\Air;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){

        //створення першого місця
        $place1 = Place::create([
            'name' => 'Яремче',
        ]);
        $air1 = $place1->air()->create([
           'title' => 'Натхнення водоспаду',
           'description' => 'Натхнення водоспаду-дивовижний вибір',
        ]);

        $air1->season()->attach([
            Season::firstOrCreate(['title' => 'Літнє'])->id,
        ]);

        $air2 = $place1->air()->create([
            'title' => 'Розквітає гай',
            'description' => 'Відчуйте аромат того як розквітає гай восени та влітку',
        ]);

        $air2->season()->attach([
            Season::firstOrCreate(['title' => 'Літнє'])->id,
            Season::firstOrCreate(['title' => 'Весняне'])->id,
        ]);

        $air3 = $place1->air()->create([
            'title' => 'Зимове сяйво',
            'description' => 'Відчуйте Яремче взимку',
        ]);

        $air3->season()->attach([
            Season::firstOrCreate(['title' => 'Зимове'])->id,
        ]);

        //створення другого місця
        $place2 = Place::create([
            'name' => 'Східниця',
        ]);

        $air4 = $place2->air()->create([
            'title' => 'Сніжний гай',
            'description' => 'Відчуйте Східницю взимку',
        ]);

        $air4->season()->attach([
            Season::firstOrCreate(['title' => 'Зимове'])->id,
        ]);


        //створення третього місця

        $place3 = Place::create([
            'name' => 'Криворівня',
        ]);

        $air5 = $place3->air()->create([
            'title' => 'Три сезони',
            'description' => 'Майже увесь рік у цьому ароматі',
        ]);

        $air5->season()->attach([
            Season::firstOrCreate(['title' => 'Весняне'])->id,
            Season::firstOrCreate(['title' => 'Літнє'])->id,
            Season::firstOrCreate(['title' => 'Осіннє'])->id,
        ]);

        $air6 = $place3->air()->create([
            'title' => 'Золото карпат',
            'description' => 'Відчуйте справжнью осінь',
        ]);

        $air6->season()->attach([
            Season::firstOrCreate(['title' => 'Осіннє'])->id,
        ]);

        $air7 = $place3->air()->create([
            'title' => 'Весняна зустріч',
            'description' => 'Дивовижний аромат весняних карпат',
        ]);

        $air7->season()->attach([
            Season::firstOrCreate(['title' => 'Весняне'])->id,
        ]);

    }
}
