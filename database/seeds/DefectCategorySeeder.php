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
            'code' => 'color',
            'name' => 'color',
            'display_name' => 'color',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color transfer',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'color transfer',
                'name' => 'color transfer',
                'display_name' => 'color transfer',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'mixed panels',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'mixed panels',
                'name' => 'mixed panels',
                'display_name' => 'mixed panels',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'off shade',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'off shade',
                'name' => 'off shade',
                'display_name' => 'off shade',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'shading',
                'name' => 'shading',
                'display_name' => 'shading',
                'colour_id' => $this->generateColour()->id
            ])
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'embellishments',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'embellishments',
            'name' => 'embellishments',
            'display_name' => 'embellishments',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color transfer of print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'color transfer of print',
                'name' => 'color transfer of print',
                'display_name' => 'color transfer of print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'cracking heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'cracking heat seal',
                'name' => 'cracking heat seal',
                'display_name' => 'cracking heat seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'cracking on print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'cracking on print',
                'name' => 'cracking on print',
                'display_name' => 'cracking on print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incomplete embroidery',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incomplete embroidery',
                'name' => 'incomplete embroidery',
                'display_name' => 'incomplete embroidery',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect embellishment placement',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect embellishment placement',
                'name' => 'incorrect embellishment placement',
                'display_name' => 'incorrect embellishment placement',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect embroidery',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect embroidery',
                'name' => 'incorrect embroidery',
                'display_name' => 'incorrect embroidery',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect heat seal',
                'name' => 'incorrect heat seal',
                'display_name' => 'incorrect heat seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect heat seal placement',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect heat seal placement',
                'name' => 'incorrect heat seal placement',
                'display_name' => 'incorrect heat seal placement',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect print',
                'name' => 'incorrect print',
                'display_name' => 'incorrect print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect sequence',
                'name' => 'incorrect sequence',
                'display_name' => 'incorrect sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'insecure heat seal',
                'name' => 'insecure heat seal',
                'display_name' => 'insecure heat seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure rhinestone',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'insecure rhinestone',
                'name' => 'insecure rhinestone',
                'display_name' => 'insecure rhinestone',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'insecure sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'insecure sequence',
                'name' => 'insecure sequence',
                'display_name' => 'insecure sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'misaligned print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'misaligned print',
                'name' => 'misaligned print',
                'display_name' => 'misaligned print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing parts on print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'missing parts on print',
                'name' => 'missing parts on print',
                'display_name' => 'missing parts on print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'missing print',
                'name' => 'Mmssing print',
                'display_name' => 'missing print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing rhinestone',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'missing rhinestone',
                'name' => 'missing rhinestone',
                'display_name' => 'missing rhinestone',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing sequence',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'missing sequence',
                'name' => 'missing sequence',
                'display_name' => 'missing sequence',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'protrude print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'protrude print',
                'name' => 'protrude print',
                'display_name' => 'protrude print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slanted heat seal',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'slanted heat seal',
                'name' => 'slanted heat seal',
                'display_name' => 'slanted heat seal',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'smudge print',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'smudge print',
                'name' => 'smudge print',
                'display_name' => 'smudge print',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'unremoved backing',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'unremoved backing',
                'name' => 'unremoved backing',
                'display_name' => 'unremoved backing',
                'colour_id' => $this->generateColour()->id
            ])
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'fabric',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'fabric',
            'name' => 'fabric',
            'display_name' => 'fabric',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $defectArray = array(
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'broken yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'broken yarn',
                'name' => 'broken yarn',
                'display_name' => 'broken yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'color shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'color shading',
                'name' => 'color shading',
                'display_name' => 'color shading',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'crease mark',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'crease mark',
                'name' => 'crease mark',
                'display_name' => 'crease mark',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'delamination',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'delamination',
                'name' => 'delamination',
                'display_name' => 'delamination',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'fabric hole',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'fabric hole',
                'name' => 'fabric hole',
                'display_name' => 'fabric hole',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'fabric run',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'fabric run',
                'name' => 'fabric run',
                'display_name' => 'fabric run',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'foreign yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'foreign yarn',
                'name' => 'foreign yarn',
                'display_name' => 'foreign yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect dry hand feel',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect dry hand feel',
                'name' => 'incorrect dry hand feel',
                'display_name' => 'incorrect dry hand feel',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'incorrect fabric weight',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'incorrect fabric weight',
                'name' => 'incorrect fabric weight',
                'display_name' => 'incorrect fabric weight',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'knots',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'knots',
                'name' => 'knots',
                'display_name' => 'knots',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'missing yan',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'missing yan',
                'name' => 'missing yan',
                'display_name' => 'missing yan',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'orange peel effect',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'orange peel effect',
                'name' => 'orange peel effect',
                'display_name' => 'orange peel effect',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shade bar',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'shade bar',
                'name' => 'shade bar',
                'display_name' => 'shade bar',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'shading',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'shading',
                'name' => 'shading',
                'display_name' => 'shading',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slanted stripe/yarn',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'slanted stripe/yarn',
                'name' => 'slanted stripe/yarn',
                'display_name' => 'slanted stripe/yarn',
                'colour_id' => $this->generateColour()->id
            ]),
            $newDefectCategory->defects()->firstOrCreate([
                //'id' => 'slubs',
                'is_visible' => true,
                'is_active' => true,
                'code' => 'slubs',
                'name' => 'slubs',
                'display_name' => 'slubs',
                'colour_id' => $this->generateColour()->id
            ]),
        );
        
        $newDefectCategory->defects()->saveMany($defectArray);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'finishing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'finishing',
            'name' => 'finishing',
            'display_name' => 'finishing',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'labeling',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'labeling',
            'name' => 'labeling',
            'display_name' => 'labeling',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'measurmrnt',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'measurmrnt',
            'name' => 'measurmrnt',
            'display_name' => 'measurmrnt',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'moulding',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'moulding',
            'name' => 'moulding',
            'display_name' => 'moulding',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'packaging',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'packaging',
            'name' => 'packaging',
            'display_name' => 'packaging',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'safety',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'safety',
            'name' => 'safety',
            'display_name' => 'safety',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'sewing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'sewing',
            'name' => 'sewing',
            'display_name' => 'sewing',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'sewing trims',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'sewing trims',
            'name' => 'sewing trims',
            'display_name' => 'sewing trims',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'stain',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'stain',
            'name' => 'stain',
            'display_name' => 'stain',
            'colour_id' => $this->generateColour()->id
        ]);
        
        $newDefectCategory = DefectCategory::firstOrCreate([
            //'id' => 'washing',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'washing',
            'name' => 'washing',
            'display_name' => 'washing',
            'colour_id' => $this->generateColour()->id
        ]);
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
