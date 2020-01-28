<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\Permission;
use App\UserAPIToken;
use App\Company;
use App\StrategicBusinessUnit;
use App\Department;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $newUser = User::firstOrCreate([
            //'id' => ucwords('admin'),
            'is_visible' => false,
            'is_active' => true,
            'code' => ucwords('admin'),
            'code_epf' => ucwords('admin'),
            'name_first' => ucwords('admin'),
            'name_last' => ucwords('admin'),
            'password' => Hash::make('password')
        ]);
        */
        
        $newUser = User::updateOrCreate(
            [
                'is_visible' => false,
                'is_active' => true,
                'code' => 'admin',
                'code_epf' => 'admin',
                'name_first' => 'admin',
                'name_last' => 'admin',
                'email' => 'kasunvmail@gmail.com'
            ],
            [
                'is_visible' => false,
                'is_active' => true,
                'code' => 'admin',
                'code_epf' => 'admin',
                'name_first' => 'admin',
                'name_last' => 'admin',
                'password' => Hash::make('password'),
                'email' => 'kasunvmail@gmail.com'
            ]
        );
        
        $newRole = Role::firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        
        //$newUser->roles()->attach($newRole);
        //$newUser->roles()->sync($newRole);
        //$newUser->roles()->syncWithoutDetaching($newRole);
        
        $newPermission = Permission::firstOrCreate([
            'slug' => 'show-event',
            'name' => 'Show Event'
        ]);
        
        //$newUser->permissions()->attach($newPermission);
        //$newUser->permissions()->sync($newPermission);
        //$newUser->permissions()->syncWithoutDetaching($newPermission);
        
        $newUserAPIToken = $newUser->userAPITokens()->firstOrCreate([
            'is_visible' => false,
            'is_active' => true,
            'is_deactivatable' => false,
            'is_notifiable' => false
        ]);
        
        $newUser->userAPITokens()->save($newUserAPIToken);
        
        
        $newCompany = Company::firstOrCreate([
            //'id' => ucwords('Brandix'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Brandix'),
            'name' => ucwords('Brandix'),
            'display_name' => ucwords('Brandix')
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        
        $newStrategicBusinessUnit = StrategicBusinessUnit::firstOrCreate([
            //'id' => ucwords('BLI'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('BLI'),
            'name' => ucwords('BLI'),
            'display_name' => ucwords('BLI'),
            //'company_id' => $newCompany->id
        ]);
        
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        
        $newDepartment = Department::firstOrCreate([
            //'id' => ucwords('Quality'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Quality'),
            'name' => ucwords('Quality'),
            'display_name' => ucwords('Quality'),
            //'strategic_business_unit_id' => $newStrategicBusinessUnit->id
        ]);
        
        $newUser->department()->associate($newDepartment)->save();
        
        /* *** */
        if( ($newUser) ){
            $newUser->givePermissionsTo( "create-event" );
            $newUser->givePermissionsTo( "edit-event" );
            $newUser->givePermissionsTo( "show-event" );
            $newUser->givePermissionsTo( "create-quality_record_cutting" );
            $newUser->givePermissionsTo( "create-quality_record_r_q_c" );
            $newUser->givePermissionsTo( "create-quality_record_sewing_check" );
            $newUser->givePermissionsTo( "create-quality_record_sewing_audit" );
            $newUser->givePermissionsTo( "create-quality_record_finishing" );
            $newUser->givePermissionsTo( "create-quality_record_c_n_i" );
        }
        /* *** */
        
        /* ********test******** */
        /* end-line */
        $newUser = User::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '15812',
            'code_epf' => '15812',
            'name_first' => 'Nishansala',
            'name_last' => 'Nishansala',
            'password' => Hash::make('15812'),
            'email' => null
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        $newUser->department()->associate($newDepartment)->save();
        if( ($newUser) ){
            //$newUser->givePermissionsTo( "create-event" );
            //$newUser->givePermissionsTo( "edit-event" );
            //$newUser->givePermissionsTo( "show-event" );
            //$newUser->givePermissionsTo( "create-quality_record_cutting" );
            //$newUser->givePermissionsTo( "create-quality_record_r_q_c" );
            $newUser->givePermissionsTo( "create-quality_record_sewing_check" );
            //$newUser->givePermissionsTo( "create-quality_record_sewing_audit" );
            //$newUser->givePermissionsTo( "create-quality_record_finishing" );
            //$newUser->givePermissionsTo( "create-quality_record_c_n_i" );
        }
        
        $newUser = User::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '26717',
            'code_epf' => '26717',
            'name_first' => 'Thakshila',
            'name_last' => 'Thakshila',
            'password' => Hash::make('26717'),
            'email' => null
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        $newUser->department()->associate($newDepartment)->save();
        if( ($newUser) ){
            //$newUser->givePermissionsTo( "create-event" );
            //$newUser->givePermissionsTo( "edit-event" );
            //$newUser->givePermissionsTo( "show-event" );
            //$newUser->givePermissionsTo( "create-quality_record_cutting" );
            //$newUser->givePermissionsTo( "create-quality_record_r_q_c" );
            $newUser->givePermissionsTo( "create-quality_record_sewing_check" );
            //$newUser->givePermissionsTo( "create-quality_record_sewing_audit" );
            //$newUser->givePermissionsTo( "create-quality_record_finishing" );
            //$newUser->givePermissionsTo( "create-quality_record_c_n_i" );
        }
        
        /* rqc */
        $newUser = User::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '26581',
            'code_epf' => '26581',
            'name_first' => 'Vishwa',
            'name_last' => 'Vishwa',
            'password' => Hash::make('26581'),
            'email' => null
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        $newUser->department()->associate($newDepartment)->save();
        if( ($newUser) ){
            //$newUser->givePermissionsTo( "create-event" );
            //$newUser->givePermissionsTo( "edit-event" );
            //$newUser->givePermissionsTo( "show-event" );
            //$newUser->givePermissionsTo( "create-quality_record_cutting" );
            $newUser->givePermissionsTo( "create-quality_record_r_q_c" );
            //$newUser->givePermissionsTo( "create-quality_record_sewing_check" );
            //$newUser->givePermissionsTo( "create-quality_record_sewing_audit" );
            //$newUser->givePermissionsTo( "create-quality_record_finishing" );
            //$newUser->givePermissionsTo( "create-quality_record_c_n_i" );
        }

        /* aql */
        $newUser = User::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '10996',
            'code_epf' => '10996',
            'name_first' => 'Shamini',
            'name_last' => 'Shamini',
            'password' => Hash::make('10996'),
            'email' => null
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        $newUser->department()->associate($newDepartment)->save();
        if( ($newUser) ){
            //$newUser->givePermissionsTo( "create-event" );
            //$newUser->givePermissionsTo( "edit-event" );
            //$newUser->givePermissionsTo( "show-event" );
            //$newUser->givePermissionsTo( "create-quality_record_cutting" );
            //$newUser->givePermissionsTo( "create-quality_record_r_q_c" );
            //$newUser->givePermissionsTo( "create-quality_record_sewing_check" );
            $newUser->givePermissionsTo( "create-quality_record_sewing_audit" );
            //$newUser->givePermissionsTo( "create-quality_record_finishing" );
            //$newUser->givePermissionsTo( "create-quality_record_c_n_i" );
        }
        /* ********test******** */
    }
}
