<?php

use Illuminate\Database\Seeder;

use App\StandardSewingCheck;

class StandardSewingCheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newStandardSewingCheck = StandardSewingCheck::firstOrCreate([
            'id' => ucwords('100%'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('100%'),
            'name' => ucwords('100%'),
            'display_name' => ucwords('100%')
        ]);
        
        $newStandardDataSewingCheck = $newStandardSewingCheck->standardDataSewingCheck()->firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'count_sample' => 1,
            'count_reject' => 1,
            'reject_level' => '>='
        ]);
        
        $newStandardSewingCheck->standardDataSewingCheck()->save($newStandardDataSewingCheck);
    }
}
