<?php

use Illuminate\Database\Seeder;

use App\StandardSewingAudit;

class StandardSewingAuditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //1.0
        $newStandardSewingAudit = StandardSewingAudit::firstOrCreate([
            'id' => ucwords('1.0'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('1.0'),
            'name' => ucwords('1.0'),
            'display_name' => ucwords('1.0')
        ]);
        
        $standardDataSewingAuditArray = array(
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 5,
                'batch_count_min' => 0,
                'batch_count_max' => 15,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 5,
                'batch_count_min' => 16,
                'batch_count_max' => 25,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 8,
                'batch_count_min' => 26,
                'batch_count_max' => 50,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 13,
                'batch_count_min' => 51,
                'batch_count_max' => 90,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 20,
                'batch_count_min' => 91,
                'batch_count_max' => 150,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 32,
                'batch_count_min' => 151,
                'batch_count_max' => 280,
                'count_accept' => 1,
                'count_reject' => 2,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 50,
                'batch_count_min' => 281,
                'batch_count_max' => 500,
                'count_accept' => 1,
                'count_reject' => 3,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 80,
                'batch_count_min' => 501,
                'batch_count_max' => 1200,
                'count_accept' => 2,
                'count_reject' => 3,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 125,
                'batch_count_min' => 1201,
                'batch_count_max' => 3200,
                'count_accept' => 3,
                'count_reject' => 5,
                'reject_level' => '>=',
                'accept_level' => '<='
            ])
        );
        
        $newStandardSewingAudit->standardDataSewingAudit()->saveMany($standardDataSewingAuditArray);
        
        //0.65
        $newStandardSewingAudit = StandardSewingAudit::firstOrCreate([
            'id' => ucwords('0.65'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('0.65'),
            'name' => ucwords('0.65'),
            'display_name' => ucwords('0.65')
        ]);
        
        $standardDataSewingAuditArray = array(
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 2,
                'batch_count_min' => 0,
                'batch_count_max' => 8,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 3,
                'batch_count_min' => 9,
                'batch_count_max' => 15,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 5,
                'batch_count_min' => 16,
                'batch_count_max' => 25,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 8,
                'batch_count_min' => 26,
                'batch_count_max' => 50,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 13,
                'batch_count_min' => 51,
                'batch_count_max' => 90,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 20,
                'batch_count_min' => 91,
                'batch_count_max' => 150,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 32,
                'batch_count_min' => 151,
                'batch_count_max' => 280,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 50,
                'batch_count_min' => 281,
                'batch_count_max' => 500,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
            $newStandardSewingAudit->standardDataSewingAudit()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'count_sample' => 80,
                'batch_count_min' => 501,
                'batch_count_max' => 1200,
                'count_accept' => 0,
                'count_reject' => 1,
                'reject_level' => '>=',
                'accept_level' => '<='
            ]),
        );
        
        $newStandardSewingAudit->standardDataSewingAudit()->saveMany($standardDataSewingAuditArray);
    }
}
