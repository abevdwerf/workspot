<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'location_id' => 1,
            'name' => '0.05',
            'floor' => 0,
            'type' => 'silent room',
            'seats_total' => 6,
            'seats_available' => 3,
            'reserved' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rooms')->insert([
            'location_id' => 1,
            'name' => '0.11',
            'floor' => 0,
            'type' => 'meeting room',
            'seats_total' => 4,
            'seats_available' => 4,
            'reserved' => 0,
            'highlighted_map' => 'img/0.11.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rooms')->insert([
            'location_id' => 1,
            'name' => 'OIL0.10',
            'floor' => 0,
            'type' => 'OIL',
            'seats_total' => 6,
            'seats_available' => 3,
            'reserved' => 0,
            'highlighted_map' => 'img/0.10.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rooms')->insert([
            'location_id' => 1,
            'name' => '0.19',
            'floor' => 0,
            'type' => 'silent room',
            'seats_total' => 4,
            'seats_available' => 0,
            'reserved' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
