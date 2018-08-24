<?php

use Illuminate\Database\Seeder;

class DriverInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_infos')->insert([
            'driver_id' => '1',
            'rank_id'=>'1',
            'point' => '5000',
            'star' => '9',
            'distance' => '100'
        ]);
    }
}
