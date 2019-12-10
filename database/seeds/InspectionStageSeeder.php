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
            'id' => ucwords('Cutting'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cutting'),
            'name' => ucwords('Cutting'),
            'display_name' => ucwords('Cutting')
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'id' => ucwords('RQC'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('RQC'),
            'name' => ucwords('RQC'),
            'display_name' => ucwords('RQC')
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'id' => ucwords('SC 100%'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('SC 100%'),
            'name' => ucwords('SC 100%'),
            'display_name' => ucwords('SC 100%')
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'id' => ucwords('Sewing Audit'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Sewing Audit'),
            'name' => ucwords('Sewing Audit'),
            'display_name' => ucwords('Sewing Audit')
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'id' => ucwords('Finishing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Finishing'),
            'name' => ucwords('Finishing'),
            'display_name' => ucwords('Finishing')
        ]);
        
        $newInspectionStage = InspectionStage::firstOrCreate([
            'id' => ucwords('CNI'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('CNI'),
            'name' => ucwords('CNI'),
            'display_name' => ucwords('CNI')
        ]);
    }
}
