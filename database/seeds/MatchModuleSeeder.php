<?php

use Illuminate\Database\Seeder;

class MatchModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $match_modules=[
            [
                "module_name"=>"shios",
                "related_table"=>"shios",
                "bobot"=>"50",
            ],
            [
                "module_name"=>"zodiacs",
                "related_table"=>"zodiacs",
                "bobot"=>"50",
            ],
        ];

        foreach ($match_modules as $value) {
            DB::table('match_modules')->insert($value);
        }
    }
}
