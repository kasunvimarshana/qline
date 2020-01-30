<?php

use Illuminate\Database\Seeder;

use App\DefectCategory;

class DefectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $min = 100;
    protected $max = 200;
    
    public function run()
    {
        //
        /*
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Default'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Default'),
            'name' => ucwords('Default'),
            'display_name' => ucwords('Default'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Default'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Default'),
                'name' => ucwords('Default'),
                'display_name' => ucwords('Default'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Washing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Washing'),
            'name' => ucwords('Washing'),
            'display_name' => ucwords('Washing'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Yellowish'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Yellowish'),
                'name' => ucwords('Yellowish'),
                'display_name' => ucwords('Yellowish'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Washing Nicks'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Washing Nicks'),
                'name' => ucwords('Washing Nicks'),
                'display_name' => ucwords('Washing Nicks'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Wash Crush Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Wash Crush Mark'),
                'name' => ucwords('Wash Crush Mark'),
                'display_name' => ucwords('Wash Crush Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Pilling'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Pilling'),
                'name' => ucwords('Pilling'),
                'display_name' => ucwords('Pilling'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Intensity on Whiskers'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Intensity on Whiskers'),
                'name' => ucwords('Over Intensity on Whiskers'),
                'display_name' => ucwords('Over Intensity on Whiskers'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Intensity on Lasering'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Intensity on Lasering'),
                'name' => ucwords('Over Intensity on Lasering'),
                'display_name' => ucwords('Over Intensity on Lasering'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Grinded'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Grinded'),
                'name' => ucwords('Over Grinded'),
                'display_name' => ucwords('Over Grinded'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Fraying'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Fraying'),
                'name' => ucwords('Over Fraying'),
                'display_name' => ucwords('Over Fraying'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Abrasion'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Abrasion'),
                'name' => ucwords('Over Abrasion'),
                'display_name' => ucwords('Over Abrasion'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Less Intensity on Whiskers'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Less Intensity on Whiskers'),
                'name' => ucwords('Less Intensity on Whiskers'),
                'display_name' => ucwords('Less Intensity on Whiskers'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Less Intensity on Lasering'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Less Intensity on Lasering'),
                'name' => ucwords('Less Intensity on Lasering'),
                'display_name' => ucwords('Less Intensity on Lasering'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Less Grinded'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Less Grinded'),
                'name' => ucwords('Less Grinded'),
                'display_name' => ucwords('Less Grinded'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Less Abrasion'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Less Abrasion'),
                'name' => ucwords('Less Abrasion'),
                'display_name' => ucwords('Less Abrasion'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Wet Hand Feel'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Wet Hand Feel'),
                'name' => ucwords('Incorrect Wet Hand Feel'),
                'display_name' => ucwords('Incorrect Wet Hand Feel'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Spray Design'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Spray Design'),
                'name' => ucwords('Incorrect Spray Design'),
                'display_name' => ucwords('Incorrect Spray Design'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Stain'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Stain'),
            'name' => ucwords('Stain'),
            'display_name' => ucwords('Stain'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Water Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Water Mark'),
                'name' => ucwords('Water Mark'),
                'display_name' => ucwords('Water Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unidentified Stain'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unidentified Stain'),
                'name' => ucwords('Unidentified Stain'),
                'display_name' => ucwords('Unidentified Stain'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Stain Removal Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Stain Removal Mark'),
                'name' => ucwords('Stain Removal Mark'),
                'display_name' => ucwords('Stain Removal Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Rust Marks'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Rust Marks'),
                'name' => ucwords('Rust Marks'),
                'display_name' => ucwords('Rust Marks'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Pen/Pencil  Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Pen/Pencil  Mark'),
                'name' => ucwords('Pen/Pencil  Mark'),
                'display_name' => ucwords('Pen/Pencil  Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Oil Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Oil Mark'),
                'name' => ucwords('Oil Mark'),
                'display_name' => ucwords('Oil Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Glue Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Glue Mark'),
                'name' => ucwords('Glue Mark'),
                'display_name' => ucwords('Glue Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Fusing Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Fusing Mark'),
                'name' => ucwords('Fusing Mark'),
                'display_name' => ucwords('Fusing Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Dye Patch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Dye Patch'),
                'name' => ucwords('Dye Patch'),
                'display_name' => ucwords('Dye Patch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Dust Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Dust Mark'),
                'name' => ucwords('Dust Mark'),
                'display_name' => ucwords('Dust Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Chalk Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Chalk Mark'),
                'name' => ucwords('Chalk Mark'),
                'display_name' => ucwords('Chalk Mark'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Sewing Trims'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Sewing Trims'),
            'name' => ucwords('Sewing Trims'),
            'display_name' => ucwords('Sewing Trims'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Trim'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Trim'),
                'name' => ucwords('Missing Trim'),
                'display_name' => ucwords('Missing Trim'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Information'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Information'),
                'name' => ucwords('Incorrect Information'),
                'display_name' => ucwords('Incorrect Information'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Dimension'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Dimension'),
                'name' => ucwords('Incorrect Dimension'),
                'display_name' => ucwords('Incorrect Dimension'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Color'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Color'),
                'name' => ucwords('Incorrect Color'),
                'display_name' => ucwords('Incorrect Color'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Article'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Article'),
                'name' => ucwords('Incorrect Article'),
                'display_name' => ucwords('Incorrect Article'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damaged'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damaged'),
                'name' => ucwords('Damaged'),
                'display_name' => ucwords('Damaged'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Bra Wire-Incorrect Size'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Bra Wire-Incorrect Size'),
                'name' => ucwords('Bra Wire-Incorrect Size'),
                'display_name' => ucwords('Bra Wire-Incorrect Size'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Bra Wire-Incorrect Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Bra Wire-Incorrect Placement'),
                'name' => ucwords('Bra Wire-Incorrect Placement'),
                'display_name' => ucwords('Bra Wire-Incorrect Placement'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Sewing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Sewing'),
            'name' => ucwords('Sewing'),
            'display_name' => ucwords('Sewing'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Wire Out Of Shape'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Wire Out Of Shape'),
                'name' => ucwords('Wire Out Of Shape'),
                'display_name' => ucwords('Wire Out Of Shape'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Waviness'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Waviness'),
                'name' => ucwords('Waviness'),
                'display_name' => ucwords('Waviness'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Visible Under Layer'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Visible Under Layer'),
                'name' => ucwords('Visible Under Layer'),
                'display_name' => ucwords('Visible Under Layer'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Untrimmed Thread'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Untrimmed Thread'),
                'name' => ucwords('Untrimmed Thread'),
                'display_name' => ucwords('Untrimmed Thread'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Uneven Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Uneven Stitch'),
                'name' => ucwords('Uneven Stitch'),
                'display_name' => ucwords('Uneven Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Uneven Seam'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Uneven Seam'),
                'name' => ucwords('Uneven Seam'),
                'display_name' => ucwords('Uneven Seam'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Uneven Gathering'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Uneven Gathering'),
                'name' => ucwords('Uneven Gathering'),
                'display_name' => ucwords('Uneven Gathering'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unbalanced'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unbalanced'),
                'name' => ucwords('Unbalanced'),
                'display_name' => ucwords('Unbalanced'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Twisting'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Twisting'),
                'name' => ucwords('Twisting'),
                'display_name' => ucwords('Twisting'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Twisted Seam'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Twisted Seam'),
                'name' => ucwords('Twisted Seam'),
                'display_name' => ucwords('Twisted Seam'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Tunneling'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Tunneling'),
                'name' => ucwords('Tunneling'),
                'display_name' => ucwords('Tunneling'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Tightness on Cup'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Tightness on Cup'),
                'name' => ucwords('Tightness on Cup'),
                'display_name' => ucwords('Tightness on Cup'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Tight Tension'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Tight Tension'),
                'name' => ucwords('Tight Tension'),
                'display_name' => ucwords('Tight Tension'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Snagging'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Snagging'),
                'name' => ucwords('Snagging'),
                'display_name' => ucwords('Snagging'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Slanted'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Slanted'),
                'name' => ucwords('Slanted'),
                'display_name' => ucwords('Slanted'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Skip Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Skip Stitch'),
                'name' => ucwords('Skip Stitch'),
                'display_name' => ucwords('Skip Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Run Off'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Run Off'),
                'name' => ucwords('Run Off'),
                'display_name' => ucwords('Run Off'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Roughness on Seam/Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Roughness on Seam/Stitch'),
                'name' => ucwords('Roughness on Seam/Stitch'),
                'display_name' => ucwords('Roughness on Seam/Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Roping'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Roping'),
                'name' => ucwords('Roping'),
                'display_name' => ucwords('Roping'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Raw Edge'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Raw Edge'),
                'name' => ucwords('Raw Edge'),
                'display_name' => ucwords('Raw Edge'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Puckering'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Puckering'),
                'name' => ucwords('Puckering'),
                'display_name' => ucwords('Puckering'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Poor Tacking'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Poor Tacking'),
                'name' => ucwords('Poor Tacking'),
                'display_name' => ucwords('Poor Tacking'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Pleated'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Pleated'),
                'name' => ucwords('Pleated'),
                'display_name' => ucwords('Pleated'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Tacking'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Tacking'),
                'name' => ucwords('Over Tacking'),
                'display_name' => ucwords('Over Tacking'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Out of Shape'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Out of Shape'),
                'name' => ucwords('Out of Shape'),
                'display_name' => ucwords('Out of Shape'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Open Seam'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Open Seam'),
                'name' => ucwords('Open Seam'),
                'display_name' => ucwords('Open Seam'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Needle Holes'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Needle Holes'),
                'name' => ucwords('Needle Holes'),
                'display_name' => ucwords('Needle Holes'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Needle Cut'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Needle Cut'),
                'name' => ucwords('Needle Cut'),
                'display_name' => ucwords('Needle Cut'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Stitch'),
                'name' => ucwords('Missing Stitch'),
                'display_name' => ucwords('Missing Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Snap Button'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Snap Button'),
                'name' => ucwords('Missing Snap Button'),
                'display_name' => ucwords('Missing Snap Button'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Rivet'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Rivet'),
                'name' => ucwords('Missing Rivet'),
                'display_name' => ucwords('Missing Rivet'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Component'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Component'),
                'name' => ucwords('Missing Component'),
                'display_name' => ucwords('Missing Component'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Button'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Button'),
                'name' => ucwords('Missing Button'),
                'display_name' => ucwords('Missing Button'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Bar tack'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Bar tack'),
                'name' => ucwords('Missing Bar tack'),
                'display_name' => ucwords('Missing Bar tack'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Lose Tension'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Lose Tension'),
                'name' => ucwords('Lose Tension'),
                'display_name' => ucwords('Lose Tension'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Looseness on Cup'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Looseness on Cup'),
                'name' => ucwords('Looseness on Cup'),
                'display_name' => ucwords('Looseness on Cup'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Looseness'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Looseness'),
                'name' => ucwords('Looseness'),
                'display_name' => ucwords('Looseness'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Joint Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Joint Stitch'),
                'name' => ucwords('Joint Stitch'),
                'display_name' => ucwords('Joint Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Interlining'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Interlining'),
                'name' => ucwords('Insecure Interlining'),
                'display_name' => ucwords('Insecure Interlining'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Bar tack'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Bar tack'),
                'name' => ucwords('Insecure Bar tack'),
                'display_name' => ucwords('Insecure Bar tack'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Attaching'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Attaching'),
                'name' => ucwords('Insecure Attaching'),
                'display_name' => ucwords('Insecure Attaching'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Thread'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Thread'),
                'name' => ucwords('Incorrect Thread'),
                'display_name' => ucwords('Incorrect Thread'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect SPI'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect SPI'),
                'name' => ucwords('Incorrect SPI'),
                'display_name' => ucwords('Incorrect SPI'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Placement'),
                'name' => ucwords('Incorrect Placement'),
                'display_name' => ucwords('Incorrect Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Fabric Direction'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Fabric Direction'),
                'name' => ucwords('Incorrect Fabric Direction'),
                'display_name' => ucwords('Incorrect Fabric Direction'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Button Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Button Placement'),
                'name' => ucwords('Incorrect Button Placement'),
                'display_name' => ucwords('Incorrect Button Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect button Hole Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect button Hole Placement'),
                'name' => ucwords('Incorrect button Hole Placement'),
                'display_name' => ucwords('Incorrect button Hole Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incomplete Stitching'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incomplete Stitching'),
                'name' => ucwords('Incomplete Stitching'),
                'display_name' => ucwords('Incomplete Stitching'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Improper Matching on Plaid'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Improper Matching on Plaid'),
                'name' => ucwords('Improper Matching on Plaid'),
                'display_name' => ucwords('Improper Matching on Plaid'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('High - Low'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('High - Low'),
                'name' => ucwords('High - Low'),
                'display_name' => ucwords('High - Low'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Fraying'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Fraying'),
                'name' => ucwords('Fraying'),
                'display_name' => ucwords('Fraying'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Foot Pressure Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Foot Pressure Mark'),
                'name' => ucwords('Foot Pressure Mark'),
                'display_name' => ucwords('Foot Pressure Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Flipping /Rolling Out'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Flipping /Rolling Out'),
                'name' => ucwords('Flipping /Rolling Out'),
                'display_name' => ucwords('Flipping /Rolling Out'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Cut Damage'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Cut Damage'),
                'name' => ucwords('Cut Damage'),
                'display_name' => ucwords('Cut Damage'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Crooked Seam'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Crooked Seam'),
                'name' => ucwords('Crooked Seam'),
                'display_name' => ucwords('Crooked Seam'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Core Run Back'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Core Run Back'),
                'name' => ucwords('Core Run Back'),
                'display_name' => ucwords('Core Run Back'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Conflicting Panel Numbers'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Conflicting Panel Numbers'),
                'name' => ucwords('Conflicting Panel Numbers'),
                'display_name' => ucwords('Conflicting Panel Numbers'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Bubbling'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Bubbling'),
                'name' => ucwords('Bubbling'),
                'display_name' => ucwords('Bubbling'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Broken Stitch'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Broken Stitch'),
                'name' => ucwords('Broken Stitch'),
                'display_name' => ucwords('Broken Stitch'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Bowing & Skewing'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Bowing & Skewing'),
                'name' => ucwords('Bowing & Skewing'),
                'display_name' => ucwords('Bowing & Skewing'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Safety'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Safety'),
            'name' => ucwords('Safety'),
            'display_name' => ucwords('Safety'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Untrimmed Thread Loops'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Untrimmed Thread Loops'),
                'name' => ucwords('Untrimmed Thread Loops'),
                'display_name' => ucwords('Untrimmed Thread Loops'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Uneven Foundation'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Uneven Foundation'),
                'name' => ucwords('Uneven Foundation'),
                'display_name' => ucwords('Uneven Foundation'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Sharp Edges'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Sharp Edges'),
                'name' => ucwords('Sharp Edges'),
                'display_name' => ucwords('Sharp Edges'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('One way Button Attaching'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('One way Button Attaching'),
                'name' => ucwords('One way Button Attaching'),
                'display_name' => ucwords('One way Button Attaching'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Mold'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Mold'),
                'name' => ucwords('Mold'),
                'display_name' => ucwords('Mold'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Wiping'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Wiping'),
                'name' => ucwords('Missing Wiping'),
                'display_name' => ucwords('Missing Wiping'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Metal Parts in Garment'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Metal Parts in Garment'),
                'name' => ucwords('Metal Parts in Garment'),
                'display_name' => ucwords('Metal Parts in Garment'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Button'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Button'),
                'name' => ucwords('Insecure Button'),
                'display_name' => ucwords('Insecure Button'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insects On Garments'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insects On Garments'),
                'name' => ucwords('Insects On Garments'),
                'display_name' => ucwords('Insects On Garments'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Harsh Odor'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Harsh Odor'),
                'name' => ucwords('Harsh Odor'),
                'display_name' => ucwords('Harsh Odor'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Garment with wash Stone/Dust'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Garment with wash Stone/Dust'),
                'name' => ucwords('Garment with wash Stone/Dust'),
                'display_name' => ucwords('Garment with wash Stone/Dust'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Excess Tag Pin'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Excess Tag Pin'),
                'name' => ucwords('Excess Tag Pin'),
                'display_name' => ucwords('Excess Tag Pin'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Draw Card too Long'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Draw Card too Long'),
                'name' => ucwords('Draw Card too Long'),
                'display_name' => ucwords('Draw Card too Long'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Packaging'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Packaging'),
            'name' => ucwords('Packaging'),
            'display_name' => ucwords('Packaging'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unreadable EDI'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unreadable EDI'),
                'name' => ucwords('Unreadable EDI'),
                'display_name' => ucwords('Unreadable EDI'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unit of Incorrect Co'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unit of Incorrect Co'),
                'name' => ucwords('Unit of Incorrect Co'),
                'display_name' => ucwords('Unit of Incorrect Co'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Weight'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Weight'),
                'name' => ucwords('Over Weight'),
                'display_name' => ucwords('Over Weight'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('No/Additional Separators in CTN'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('No/Additional Separators in CTN'),
                'name' => ucwords('No/Additional Separators in CTN'),
                'display_name' => ucwords('No/Additional Separators in CTN'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Mix Shades in Carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Mix Shades in Carton'),
                'name' => ucwords('Mix Shades in Carton'),
                'display_name' => ucwords('Mix Shades in Carton'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Units'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Units'),
                'name' => ucwords('Missing Units'),
                'display_name' => ucwords('Missing Units'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Silicon Pack'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Silicon Pack'),
                'name' => ucwords('Missing Silicon Pack'),
                'display_name' => ucwords('Missing Silicon Pack'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Information on Carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Information on Carton'),
                'name' => ucwords('Missing Information on Carton'),
                'display_name' => ucwords('Missing Information on Carton'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Style Packed'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Style Packed'),
                'name' => ucwords('Incorrect Style Packed'),
                'display_name' => ucwords('Incorrect Style Packed'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Stenciling'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Stenciling'),
                'name' => ucwords('Incorrect Stenciling'),
                'display_name' => ucwords('Incorrect Stenciling'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Size Ratio'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Size Ratio'),
                'name' => ucwords('Incorrect Size Ratio'),
                'display_name' => ucwords('Incorrect Size Ratio'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Size Packed'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Size Packed'),
                'name' => ucwords('Incorrect Size Packed'),
                'display_name' => ucwords('Incorrect Size Packed'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Shipping Address'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Shipping Address'),
                'name' => ucwords('Incorrect Shipping Address'),
                'display_name' => ucwords('Incorrect Shipping Address'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Poly Bag in CTN'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Poly Bag in CTN'),
                'name' => ucwords('Incorrect Poly Bag in CTN'),
                'display_name' => ucwords('Incorrect Poly Bag in CTN'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect PO Packed'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect PO Packed'),
                'name' => ucwords('Incorrect PO Packed'),
                'display_name' => ucwords('Incorrect PO Packed'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect EDI Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect EDI Placement'),
                'name' => ucwords('Incorrect EDI Placement'),
                'display_name' => ucwords('Incorrect EDI Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect EDI'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect EDI'),
                'name' => ucwords('Incorrect EDI'),
                'display_name' => ucwords('Incorrect EDI'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Color Packed'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Color Packed'),
                'name' => ucwords('Incorrect Color Packed'),
                'display_name' => ucwords('Incorrect Color Packed'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Color Assortment'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Color Assortment'),
                'name' => ucwords('Incorrect Color Assortment'),
                'display_name' => ucwords('Incorrect Color Assortment'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Carton Sticker'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Carton Sticker'),
                'name' => ucwords('Incorrect Carton Sticker'),
                'display_name' => ucwords('Incorrect Carton Sticker'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Carton'),
                'name' => ucwords('Incorrect Carton'),
                'display_name' => ucwords('Incorrect Carton'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Improper Taping'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Improper Taping'),
                'name' => ucwords('Improper Taping'),
                'display_name' => ucwords('Improper Taping'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Excess Units'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Excess Units'),
                'name' => ucwords('Excess Units'),
                'display_name' => ucwords('Excess Units'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Excess Space'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Excess Space'),
                'name' => ucwords('Excess Space'),
                'display_name' => ucwords('Excess Space'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Duplicate Carton Numbers'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Duplicate Carton Numbers'),
                'name' => ucwords('Duplicate Carton Numbers'),
                'display_name' => ucwords('Duplicate Carton Numbers'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damp/Wet carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damp/Wet carton'),
                'name' => ucwords('Damp/Wet carton'),
                'display_name' => ucwords('Damp/Wet carton'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damaged Carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damaged Carton'),
                'name' => ucwords('Damaged Carton'),
                'display_name' => ucwords('Damaged Carton'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Bulky/Out of Shape Carton'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Bulky/Out of Shape Carton'),
                'name' => ucwords('Bulky/Out of Shape Carton'),
                'display_name' => ucwords('Bulky/Out of Shape Carton'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Moulding'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Moulding'),
            'name' => ucwords('Moulding'),
            'display_name' => ucwords('Moulding'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Tightness - Low Depth'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Tightness - Low Depth'),
                'name' => ucwords('Tightness - Low Depth'),
                'display_name' => ucwords('Tightness - Low Depth'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Ring Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Ring Mark'),
                'name' => ucwords('Ring Mark'),
                'display_name' => ucwords('Ring Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Puckering Due to Moulding'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Puckering Due to Moulding'),
                'name' => ucwords('Puckering Due to Moulding'),
                'display_name' => ucwords('Puckering Due to Moulding'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Moire Effect'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Moire Effect'),
                'name' => ucwords('Moire Effect'),
                'display_name' => ucwords('Moire Effect'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Looseness - High Depth'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Looseness - High Depth'),
                'name' => ucwords('Looseness - High Depth'),
                'display_name' => ucwords('Looseness - High Depth'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Burn Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Burn Mark'),
                'name' => ucwords('Burn Mark'),
                'display_name' => ucwords('Burn Mark'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Measurement'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Measurement'),
            'name' => ucwords('Measurement'),
            'display_name' => ucwords('Measurement'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Plus OOT'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Plus OOT'),
                'name' => ucwords('Plus OOT'),
                'display_name' => ucwords('Plus OOT'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Minus OOT'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Minus OOT'),
                'name' => ucwords('Minus OOT'),
                'display_name' => ucwords('Minus OOT'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Labeling'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Labeling'),
            'name' => ucwords('Labeling'),
            'display_name' => ucwords('Labeling'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Label'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Label'),
                'name' => ucwords('Missing Label'),
                'display_name' => ucwords('Missing Label'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect wording on Label'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect wording on Label'),
                'name' => ucwords('Incorrect wording on Label'),
                'display_name' => ucwords('Incorrect wording on Label'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Size Label'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Size Label'),
                'name' => ucwords('Incorrect Size Label'),
                'display_name' => ucwords('Incorrect Size Label'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Label Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Label Placement'),
                'name' => ucwords('Incorrect Label Placement'),
                'display_name' => ucwords('Incorrect Label Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Care Label'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Care Label'),
                'name' => ucwords('Incorrect Care Label'),
                'display_name' => ucwords('Incorrect Care Label'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Improper Attached Label'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Improper Attached Label'),
                'name' => ucwords('Improper Attached Label'),
                'display_name' => ucwords('Improper Attached Label'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Finishing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Finishing'),
            'name' => ucwords('Finishing'),
            'display_name' => ucwords('Finishing'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Wetness'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Wetness'),
                'name' => ucwords('Wetness'),
                'display_name' => ucwords('Wetness'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Untrimmed Excess'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Untrimmed Excess'),
                'name' => ucwords('Untrimmed Excess'),
                'display_name' => ucwords('Untrimmed Excess'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Uncleansed Pocket Bag'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Uncleansed Pocket Bag'),
                'name' => ucwords('Uncleansed Pocket Bag'),
                'display_name' => ucwords('Uncleansed Pocket Bag'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unbalanced Draw-Cord'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unbalanced Draw-Cord'),
                'name' => ucwords('Unbalanced Draw-Cord'),
                'display_name' => ucwords('Unbalanced Draw-Cord'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Stain on Packet'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Stain on Packet'),
                'name' => ucwords('Stain on Packet'),
                'display_name' => ucwords('Stain on Packet'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Pressing Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Pressing Mark'),
                'name' => ucwords('Pressing Mark'),
                'display_name' => ucwords('Pressing Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Poor Pressing'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Poor Pressing'),
                'name' => ucwords('Poor Pressing'),
                'display_name' => ucwords('Poor Pressing'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Poor Hanger Appearance'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Poor Hanger Appearance'),
                'name' => ucwords('Poor Hanger Appearance'),
                'display_name' => ucwords('Poor Hanger Appearance'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('PO Mix-Up'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('PO Mix-Up'),
                'name' => ucwords('PO Mix-Up'),
                'display_name' => ucwords('PO Mix-Up'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Packed With Sticker'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Packed With Sticker'),
                'name' => ucwords('Packed With Sticker'),
                'display_name' => ucwords('Packed With Sticker'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Over Pressing'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Over Pressing'),
                'name' => ucwords('Over Pressing'),
                'display_name' => ucwords('Over Pressing'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Ticket'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Ticket'),
                'name' => ucwords('Missing Ticket'),
                'display_name' => ucwords('Missing Ticket'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing SKU'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing SKU'),
                'name' => ucwords('Missing SKU'),
                'display_name' => ucwords('Missing SKU'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Marketing Tag'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Marketing Tag'),
                'name' => ucwords('Missing Marketing Tag'),
                'display_name' => ucwords('Missing Marketing Tag'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Leg/Body Sticker'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Leg/Body Sticker'),
                'name' => ucwords('Missing Leg/Body Sticker'),
                'display_name' => ucwords('Missing Leg/Body Sticker'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Extra Button'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Extra Button'),
                'name' => ucwords('Missing Extra Button'),
                'display_name' => ucwords('Missing Extra Button'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Details on Hanger'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Details on Hanger'),
                'name' => ucwords('Missing Details on Hanger'),
                'display_name' => ucwords('Missing Details on Hanger'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Loose Threads'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Loose Threads'),
                'name' => ucwords('Loose Threads'),
                'display_name' => ucwords('Loose Threads'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Marketing Tag'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Marketing Tag'),
                'name' => ucwords('Insecure Marketing Tag'),
                'display_name' => ucwords('Insecure Marketing Tag'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Ticket'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Ticket'),
                'name' => ucwords('Incorrect Ticket'),
                'display_name' => ucwords('Incorrect Ticket'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Tag Pin'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Tag Pin'),
                'name' => ucwords('Incorrect Tag Pin'),
                'display_name' => ucwords('Incorrect Tag Pin'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect SKU Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect SKU Placement'),
                'name' => ucwords('Incorrect SKU Placement'),
                'display_name' => ucwords('Incorrect SKU Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect SKU'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect SKU'),
                'name' => ucwords('Incorrect SKU'),
                'display_name' => ucwords('Incorrect SKU'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Poly Bag'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Poly Bag'),
                'name' => ucwords('Incorrect Poly Bag'),
                'display_name' => ucwords('Incorrect Poly Bag'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Marketing Tags'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Marketing Tags'),
                'name' => ucwords('Incorrect Marketing Tags'),
                'display_name' => ucwords('Incorrect Marketing Tags'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Leg/Body Sticker'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Leg/Body Sticker'),
                'name' => ucwords('Incorrect Leg/Body Sticker'),
                'display_name' => ucwords('Incorrect Leg/Body Sticker'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Inlay Card'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Inlay Card'),
                'name' => ucwords('Incorrect Inlay Card'),
                'display_name' => ucwords('Incorrect Inlay Card'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Hanger Type'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Hanger Type'),
                'name' => ucwords('Incorrect Hanger Type'),
                'display_name' => ucwords('Incorrect Hanger Type'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Draw-Cord'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Draw-Cord'),
                'name' => ucwords('Incorrect Draw-Cord'),
                'display_name' => ucwords('Incorrect Draw-Cord'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Color Code'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Color Code'),
                'name' => ucwords('Incorrect Color Code'),
                'display_name' => ucwords('Incorrect Color Code'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Collar Card'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Collar Card'),
                'name' => ucwords('Incorrect Collar Card'),
                'display_name' => ucwords('Incorrect Collar Card'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect \"J\" board'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect \"J\" board'),
                'name' => ucwords('Incorrect \"J\" board'),
                'display_name' => ucwords('Incorrect \"J\" board'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Improper Folding'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Improper Folding'),
                'name' => ucwords('Improper Folding'),
                'display_name' => ucwords('Improper Folding'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Improper Bag Sealing'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Improper Bag Sealing'),
                'name' => ucwords('Improper Bag Sealing'),
                'display_name' => ucwords('Improper Bag Sealing'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Hard Tag Inaccuracy'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Hard Tag Inaccuracy'),
                'name' => ucwords('Hard Tag Inaccuracy'),
                'display_name' => ucwords('Hard Tag Inaccuracy'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damaged UPC sticker'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damaged UPC sticker'),
                'name' => ucwords('Damaged UPC sticker'),
                'display_name' => ucwords('Damaged UPC sticker'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damaged Packet'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damaged Packet'),
                'name' => ucwords('Damaged Packet'),
                'display_name' => ucwords('Damaged Packet'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Damage \"J\" board'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Damage \"J\" board'),
                'name' => ucwords('Damage \"J\" board'),
                'display_name' => ucwords('Damage \"J\" board'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Crush Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Crush Mark'),
                'name' => ucwords('Crush Mark'),
                'display_name' => ucwords('Crush Mark'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Fabric'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Fabric'),
            'name' => ucwords('Fabric'),
            'display_name' => ucwords('Fabric'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Slubs'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Slubs'),
                'name' => ucwords('Slubs'),
                'display_name' => ucwords('Slubs'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Slanted Stripe/Yarn'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Slanted Stripe/Yarn'),
                'name' => ucwords('Slanted Stripe/Yarn'),
                'display_name' => ucwords('Slanted Stripe/Yarn'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Shading'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Shading'),
                'name' => ucwords('Shading'),
                'display_name' => ucwords('Shading'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Shade Bar'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Shade Bar'),
                'name' => ucwords('Shade Bar'),
                'display_name' => ucwords('Shade Bar'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Orange Peel Effect'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Orange Peel Effect'),
                'name' => ucwords('Orange Peel Effect'),
                'display_name' => ucwords('Orange Peel Effect'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Yan'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Yan'),
                'name' => ucwords('Missing Yan'),
                'display_name' => ucwords('Missing Yan'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Knots'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Knots'),
                'name' => ucwords('Knots'),
                'display_name' => ucwords('Knots'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Fabric Weight'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Fabric Weight'),
                'name' => ucwords('Incorrect Fabric Weight'),
                'display_name' => ucwords('Incorrect Fabric Weight'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Dry Hand Feel'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Dry Hand Feel'),
                'name' => ucwords('Incorrect Dry Hand Feel'),
                'display_name' => ucwords('Incorrect Dry Hand Feel'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Foreign Yarn'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Foreign Yarn'),
                'name' => ucwords('Foreign Yarn'),
                'display_name' => ucwords('Foreign Yarn'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Fabric Run'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Fabric Run'),
                'name' => ucwords('Fabric Run'),
                'display_name' => ucwords('Fabric Run'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Fabric Hole'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Fabric Hole'),
                'name' => ucwords('Fabric Hole'),
                'display_name' => ucwords('Fabric Hole'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Delamination'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Delamination'),
                'name' => ucwords('Delamination'),
                'display_name' => ucwords('Delamination'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Crease Mark'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Crease Mark'),
                'name' => ucwords('Crease Mark'),
                'display_name' => ucwords('Crease Mark'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Color Shading'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Color Shading'),
                'name' => ucwords('Color Shading'),
                'display_name' => ucwords('Color Shading'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Broken Yarn'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Broken Yarn'),
                'name' => ucwords('Broken Yarn'),
                'display_name' => ucwords('Broken Yarn'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Embellishments'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Embellishments'),
            'name' => ucwords('Embellishments'),
            'display_name' => ucwords('Embellishments'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Unremoved Backing'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Unremoved Backing'),
                'name' => ucwords('Unremoved Backing'),
                'display_name' => ucwords('Unremoved Backing'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Smudge Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Smudge Print'),
                'name' => ucwords('Smudge Print'),
                'display_name' => ucwords('Smudge Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Slanted Heat Seal'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Slanted Heat Seal'),
                'name' => ucwords('Slanted Heat Seal'),
                'display_name' => ucwords('Slanted Heat Seal'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Protrude Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Protrude Print'),
                'name' => ucwords('Protrude Print'),
                'display_name' => ucwords('Protrude Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing sequence'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing sequence'),
                'name' => ucwords('Missing sequence'),
                'display_name' => ucwords('Missing sequence'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Rhinestone'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Rhinestone'),
                'name' => ucwords('Missing Rhinestone'),
                'display_name' => ucwords('Missing Rhinestone'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Print'),
                'name' => ucwords('Missing Print'),
                'display_name' => ucwords('Missing Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Missing Parts on Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Missing Parts on Print'),
                'name' => ucwords('Missing Parts on Print'),
                'display_name' => ucwords('Missing Parts on Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Misaligned Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Misaligned Print'),
                'name' => ucwords('Misaligned Print'),
                'display_name' => ucwords('Misaligned Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Sequence'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Sequence'),
                'name' => ucwords('Insecure Sequence'),
                'display_name' => ucwords('Insecure Sequence'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Rhinestone'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Rhinestone'),
                'name' => ucwords('Insecure Rhinestone'),
                'display_name' => ucwords('Insecure Rhinestone'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Insecure Heat Seal'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Insecure Heat Seal'),
                'name' => ucwords('Insecure Heat Seal'),
                'display_name' => ucwords('Insecure Heat Seal'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Sequence'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Sequence'),
                'name' => ucwords('Incorrect Sequence'),
                'display_name' => ucwords('Incorrect Sequence'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Print'),
                'name' => ucwords('Incorrect Print'),
                'display_name' => ucwords('Incorrect Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Heat Seal Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Heat Seal Placement'),
                'name' => ucwords('Incorrect Heat Seal Placement'),
                'display_name' => ucwords('Incorrect Heat Seal Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Heat Seal'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Heat Seal'),
                'name' => ucwords('Incorrect Heat Seal'),
                'display_name' => ucwords('Incorrect Heat Seal'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Embroidery'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Embroidery'),
                'name' => ucwords('Incorrect Embroidery'),
                'display_name' => ucwords('Incorrect Embroidery'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incorrect Embellishment Placement'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incorrect Embellishment Placement'),
                'name' => ucwords('Incorrect Embellishment Placement'),
                'display_name' => ucwords('Incorrect Embellishment Placement'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Incomplete Embroidery'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Incomplete Embroidery'),
                'name' => ucwords('Incomplete Embroidery'),
                'display_name' => ucwords('Incomplete Embroidery'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Cracking on Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Cracking on Print'),
                'name' => ucwords('Cracking on Print'),
                'display_name' => ucwords('Cracking on Print'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Cracking Heat Seal'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Cracking Heat Seal'),
                'name' => ucwords('Cracking Heat Seal'),
                'display_name' => ucwords('Cracking Heat Seal'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Color Transfer of Print'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Color Transfer of Print'),
                'name' => ucwords('Color Transfer of Print'),
                'display_name' => ucwords('Color Transfer of Print'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Color'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Color'),
            'name' => ucwords('Color'),
            'display_name' => ucwords('Color'),
            'colour_id' => $this->generateColour()->id
        ]);
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Off Shade'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Off Shade'),
                'name' => ucwords('Off Shade'),
                'display_name' => ucwords('Off Shade'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Mixed Panels'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Mixed Panels'),
                'name' => ucwords('Mixed Panels'),
                'display_name' => ucwords('Mixed Panels'),
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Color Transfer'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Color Transfer'),
                'name' => ucwords('Color Transfer'),
                'display_name' => ucwords('Color Transfer'),
                'colour_id' => $this->generateColour()->id
            ])
        );
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
        /* *** */
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => ucwords('Pass'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Pass'),
            'name' => ucwords('Pass'),
            'display_name' => ucwords('Pass'),
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => ucwords('Pass'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Pass'),
                'name' => ucwords('Pass'),
                'display_name' => ucwords('Pass'),
                'colour_id' => $this->generateColour()->id
            ]),
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        /* *** */
    }
    
    protected function generateColour(){
        //$colourObject = new App\Colour();
        $min = $this->min;
        $max = $this->max;
        $colour = "rgb(" . mt_rand($min, $max) . "," . mt_rand($min, $max) . "," . mt_rand($min, $max) . ")";
        $colourObject = App\Colour::firstOrCreate([
            'is_visible' => false,
            'is_active' => true,
            'code' => $colour,
            'name' => $colour,
            'display_name' => $colour
        ]);
        return $colourObject;
    }
}
