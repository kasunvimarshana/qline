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
            //'id' => '100%',
            'is_visible' => true,
            'is_active' => true,
            'code' => '100%',
            'name' => '100%',
            'display_name' => '100%'
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
