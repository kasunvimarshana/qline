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
            'code' => 'E0001',
            'name' => 'E0001',
            'display_name' => 'E0001'
        ]);
        
        /*$newExport = Export::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'E0002',
            'name' => 'E0002',
            'display_name' => 'E0002'
        ]);
        
        $newExport = Export::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'E0003',
            'name' => 'E0003',
            'display_name' => 'E0003'
        ]);*/
    }
}
