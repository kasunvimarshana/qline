<?php

use Illuminate\Database\Seeder;

use App\Export;

class ExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $newExport = Export::firstOrCreate([
            'id' => ucwords('E0001'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('E0001'),
            'name' => ucwords('E0001'),
            'display_name' => ucwords('E0001')
        ]);
        */
        /*
        $newExport = Export::firstOrCreate([
            'id' => ucwords('E0002'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('E0002'),
            'name' => ucwords('E0002'),
            'display_name' => ucwords('E0002')
        ]);
        
        $newExport = Export::firstOrCreate([
            'id' => ucwords('E0003'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('E0003'),
            'name' => ucwords('E0003'),
            'display_name' => ucwords('E0003')
        ]);
        */
        $newExport = Export::firstOrCreate([
            'id' => ucwords('0015105663'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('0015105663'),
            'name' => ucwords('0015105663'),
            'display_name' => ucwords('0015105663')
        ]);
        
        $newExport = Export::firstOrCreate([
            'id' => ucwords('0015105895'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('0015105895'),
            'name' => ucwords('0015105895'),
            'display_name' => ucwords('0015105895')
        ]);
    }
}
