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
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'color',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Color',
            'name' => 'Color',
            'display_name' => 'Color',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color transfer',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Color Transfer',
                'name' => 'Color Transfer',
                'display_name' => 'Color Transfer',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'mixed panels',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Mixed Panels',
                'name' => 'Mixed Panels',
                'display_name' => 'Mixed Panels',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'off shade',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Off Shade',
                'name' => 'Off Shade',
                'display_name' => 'Off Shade',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Shading',
                'name' => 'Shading',
                'display_name' => 'Shading',
                'colour_id' => $this->generateColour()->id
            ])
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'embellishments',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Embellishments',
            'name' => 'Embellishments',
            'display_name' => 'Embellishments',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color transfer of print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Color Transfer Of Print',
                'name' => 'Color Transfer Of Print',
                'display_name' => 'Color Transfer Of Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'cracking heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Cracking Heat Seal',
                'name' => 'Cracking Heat Seal',
                'display_name' => 'Cracking Heat Seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'cracking on print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Cracking On Print',
                'name' => 'Cracking On Print',
                'display_name' => 'Cracking On Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incomplete embroidery',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incomplete Embroidery',
                'name' => 'Incomplete Embroidery',
                'display_name' => 'Incomplete Embroidery',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect embellishment placement',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Embellishment Placement',
                'name' => 'Incorrect Embellishment Placement',
                'display_name' => 'Incorrect Embellishment Placement',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect embroidery',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Embroidery',
                'name' => 'Incorrect Embroidery',
                'display_name' => 'Incorrect Embroidery',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Heat Seal',
                'name' => 'Incorrect Heat Seal',
                'display_name' => 'Incorrect Heat Seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect heat seal placement',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Heat Seal Placement',
                'name' => 'Incorrect Heat Seal Placement',
                'display_name' => 'Incorrect Heat Seal Placement',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Print',
                'name' => 'Incorrect Print',
                'display_name' => 'Incorrect Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Sequence',
                'name' => 'Incorrect Sequence',
                'display_name' => 'Incorrect Sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Insecure Heat Seal',
                'name' => 'Insecure Heat Seal',
                'display_name' => 'Insecure Heat Seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure rhinestone',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Insecure Rhinestone',
                'name' => 'Insecure Rhinestone',
                'display_name' => 'Insecure Rhinestone',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Insecure Sequence',
                'name' => 'Insecure Sequence',
                'display_name' => 'Insecure Sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'misaligned print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Misaligned Print',
                'name' => 'Misaligned Print',
                'display_name' => 'Misaligned Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing parts on print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Missing Parts On Print',
                'name' => 'Missing Parts On Print',
                'display_name' => 'Missing Parts On Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Missing Print',
                'name' => 'Mssing Print',
                'display_name' => 'missing Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing rhinestone',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Missing Rhinestone',
                'name' => 'Missing Rhinestone',
                'display_name' => 'Missing Rhinestone',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Missing Sequence',
                'name' => 'Missing Sequence',
                'display_name' => 'Missing Sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'protrude print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Protrude Print',
                'name' => 'Protrude Print',
                'display_name' => 'Protrude Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slanted heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Slanted Heat Seal',
                'name' => 'Slanted Heat Seal',
                'display_name' => 'Slanted Heat Seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'smudge print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Smudge Print',
                'name' => 'Smudge Print',
                'display_name' => 'Smudge Print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'unremoved backing',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Unremoved Backing',
                'name' => 'Unremoved Backing',
                'display_name' => 'Unremoved Backing',
                'colour_id' => $this->generateColour()->id
            ])
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'fabric',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Fabric',
            'name' => 'Fabric',
            'display_name' => 'Fabric',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'broken yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Broken Yarn',
                'name' => 'Broken Yarn',
                'display_name' => 'Broken Yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Color Shading',
                'name' => 'Color Shading',
                'display_name' => 'Color Shading',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'crease mark',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Crease Mark',
                'name' => 'Crease Mark',
                'display_name' => 'Crease Mark',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'delamination',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Delamination',
                'name' => 'Delamination',
                'display_name' => 'Delamination',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'fabric hole',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Fabric Hole',
                'name' => 'Fabric Hole',
                'display_name' => 'Fabric Hole',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'fabric run',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Fabric Run',
                'name' => 'Fabric Run',
                'display_name' => 'Fabric Run',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'foreign yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Foreign Yarn',
                'name' => 'Foreign Yarn',
                'display_name' => 'Foreign Yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect dry hand feel',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Dry Hand Feel',
                'name' => 'Incorrect Dry Hand Feel',
                'display_name' => 'Incorrect Dry Hand Feel',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect fabric weight',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Incorrect Fabric Weight',
                'name' => 'Incorrect Fabric Weight',
                'display_name' => 'Incorrect Fabric Weight',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'knots',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Knots',
                'name' => 'Knots',
                'display_name' => 'Knots',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing yan',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Missing Yan',
                'name' => 'Missing Yan',
                'display_name' => 'Missing Yan',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'orange peel effect',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Orange Peel Effect',
                'name' => 'Orange Peel Effect',
                'display_name' => 'Orange Peel Effect',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shade bar',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Shade Bar',
                'name' => 'Shade Bar',
                'display_name' => 'Shade Bar',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Shading',
                'name' => 'Shading',
                'display_name' => 'Shading',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slanted stripe/yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Slanted Stripe/Yarn',
                'name' => 'Slanted Stripe/Yarn',
                'display_name' => 'Slanted Stripe/Yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slubs',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Slubs',
                'name' => 'Slubs',
                'display_name' => 'Slubs',
                'colour_id' => $this->generateColour()->id
            ]),
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        /*$newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'finishing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Finishing',
            'name' => 'Finishing',
            'display_name' => 'Finishing',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'labeling',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Labeling',
            'name' => 'Labeling',
            'display_name' => 'Labeling',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'measurmrnt',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Measurmrnt',
            'name' => 'Measurmrnt',
            'display_name' => 'Measurmrnt',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'moulding',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Moulding',
            'name' => 'Moulding',
            'display_name' => 'Moulding',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'packaging',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Packaging',
            'name' => 'Packaging',
            'display_name' => 'Packaging',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'safety',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Safety',
            'name' => 'Safety',
            'display_name' => 'Safety',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'sewing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Sewing',
            'name' => 'Sewing',
            'display_name' => 'Sewing',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'sewing trims',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Sewing Trims',
            'name' => 'Sewing Trims',
            'display_name' => 'Sewing Trims',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'stain',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Stain',
            'name' => 'Stain',
            'display_name' => 'Stain',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'washing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Washing',
            'name' => 'Washing',
            'display_name' => 'Washing',
            'colour_id' => $this->generateColour()->id
        ]);*/
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
