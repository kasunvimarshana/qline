<?php

use Illuminate\Database\Seeder;

use App\InspectionStage;

class InspectionStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Cutting',
            'name' => 'Cutting',
            'display_name' => 'Cutting'
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'RQC',
            'name' => 'RQC',
            'display_name' => 'RQC'
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'SC 100%',
            'name' => 'SC 100%',
            'display_name' => 'SC 100%'
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Sewing Audit',
            'name' => 'Sewing Audit',
            'display_name' => 'Sewing Audit'
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Finishing',
            'name' => 'Finishing',
            'display_name' => 'Finishing'
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'CNI',
            'name' => 'CNI',
            'display_name' => 'CNI'
        ]);
    }
}
