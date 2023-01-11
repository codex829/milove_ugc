<?php

use Illuminate\Database\Seeder;

class ShioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $shio=[
            [
                "mod"=>"0",
                "name"=>"Monyet",
            ],
            [
                "mod"=>"1",
                "name"=>"Ayam",
            ],
            [
                "mod"=>"2",
                "name"=>"Anjing",
            ],
            [
                "mod"=>"3",
                "name"=>"Babi",
            ],
            [
                "mod"=>"4",
                "name"=>"Tikus",
            ],
            [
                "mod"=>"5",
                "name"=>"Kerbau",
            ],
            [
                "mod"=>"6",
                "name"=>"Macan",
            ],
            [
                "mod"=>"7",
                "name"=>"Kelinci",
            ],
            [
                "mod"=>"8",
                "name"=>"Naga",
            ],
            [
                "mod"=>"9",
                "name"=>"Ular",
            ],
            [
                "mod"=>"10",
                "name"=>"Kuda",
            ],
            [
                "mod"=>"11",
                "name"=>"Kambing",
            ],
        ];

        foreach ($shio as $value) {
            DB::table('shios')->insert($value);
        }
    }
}
