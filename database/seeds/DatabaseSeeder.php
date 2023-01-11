<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ShioSeeder');
        $this->call('ZodiacSeeder');
        $this->call('MatchModuleSeeder');
        $this->call('GlobalWording');
    }
}
