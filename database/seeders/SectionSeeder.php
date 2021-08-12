<?php


namespace Database\Seeders;


use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

class SectionSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            'Academic Affairs',
            'Bursary department',
            'University Library',
            'Student Affairs',
            'Sports division',
            'Biology laboratory',
            'Microbiology laboratory',
            'Chemistry laboratory',
            'Biochemistry laboratory',
            'Physics laboratory',
            'Language laboratory',
            'Mass communication Studio',
            'ICT Unit',
            'Head of Department',
            'Faculty',
            'Hall of Residence',
            'Security unit',
        ];
        if (! Section::where('name', Arr::random($sections))->first()) {
            foreach ($sections as $section) {
                Section::create(['name' => $section, 'slug' => \Str::slug($section)]);
            }
        }

    }
}
