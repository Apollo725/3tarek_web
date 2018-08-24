<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert(
            [
                'rank' => 'Cadet',
                's_range' => '0',
                'e_range' => '100',
            ]
        
        );
        DB::table('ranks')->insert(
            [
                'rank' => 'Private',
                's_range' => '100',
                'e_range' => '400',
            ]
        );
        DB::table('ranks')->insert(
            [
                'rank' => 'Lance Corporal',
                's_range' => '400',
                'e_range' => '900',
            ]
        );
        DB::table('ranks')->insert(
            [
                'rank' => 'Coloral',
                's_range' => '900',
                'e_range' => '1600',
            ]
        );
        DB::table('ranks')->insert(
            [
                'rank' => 'Senior Coporal',
                's_range' => '1600',
                'e_range' => '3000',
            ]
        );
        
    }
        
}
