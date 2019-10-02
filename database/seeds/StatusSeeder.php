<?php

use Illuminate\Database\Seeder;

use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newStatus = Status::firstOrCreate([
            'is_visible' => false,
            'is_active' => false,
            'code' => 'default',
            'name' => 'default',
            'display_name' => 'default'
        ]);
    }
}