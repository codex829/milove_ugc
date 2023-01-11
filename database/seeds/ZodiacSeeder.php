<?php

use Illuminate\Database\Seeder;

class ZodiacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $zodiac=[
            [
                "name"=>"Capricorn",
                "date_min"=>"21-12",
                "date_max"=>"19-01",
            ],
            [
                "name"=>"Aquarius",
                "date_min"=>"20-01",
                "date_max"=>"18-02",
            ],
            [
                "name"=>"Pisces",
                "date_min"=>"19-02",
                "date_max"=>"20-03",
            ],
            [
                "name"=>"Aries",
                "date_min"=>"21-03",
                "date_max"=>"20-04",
            ],
            [
                "name"=>"Taurus",
                "date_min"=>"21-04",
                "date_max"=>"20-05",
            ],
            [
                "name"=>"Gemini",
                "date_min"=>"21-05",
                "date_max"=>"20-06",
            ],
            [
                "name"=>"Cancer",
                "date_min"=>"21-06",
                "date_max"=>"20-07",
            ],
            [
                "name"=>"Leo",
                "date_min"=>"21-07",
                "date_max"=>"21-08",
            ],
            [
                "name"=>"Virgo",
                "date_min"=>"22-08",
                "date_max"=>"22-09",
            ],
            [
                "name"=>"Libra",
                "date_min"=>"23-09",
                "date_max"=>"22-10",
            ],
            [
                "name"=>"Scorpio",
                "date_min"=>"23-10",
                "date_max"=>"22-11",
            ],
            [
                "name"=>"Sagitarius",
                "date_min"=>"23-11",
                "date_max"=>"20-12",
            ],
        ];

        foreach ($zodiac as $value) {
            DB::table('zodiacs')->insert($value);
        }
    }
}
