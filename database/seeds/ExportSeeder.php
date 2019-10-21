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
        $newExport = Export::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'export_1',
            'name' => 'export_1',
            'display_name' => 'export_1'
        ]);
        
        /*$newExport = Export::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'export_2',
            'name' => 'export_2',
            'display_name' => 'export_2'
        ]);
        
        $newExport = Export::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'export_3',
            'name' => 'export_3',
            'display_name' => 'export_3'
        ]);*/
    }
}
