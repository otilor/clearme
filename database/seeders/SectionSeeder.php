<?php


namespace Database\Seeders;


use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SectionSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            'Student Affairs',
            'ICT Unit',
            'Laboratories',
            'Hall of Residence',
            'Head of Department',
            'Sports division',
            'Security unit',
            'Medicals',
            'Bursary department'
        ];
        foreach ($sections as $section) {
            Section::create(['name' => $section]);
        }
    }
}
