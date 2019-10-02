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
            'is_visible' => false,
            'is_active' => true,
            'code' => '0admin',
            'code_epf' => '0admin',
            'name_first' => 'admin',
            'name_last' => 'admin',
            'password' => Hash::make('password')
        ]);
        */
        
        $newUser = User::updateOrCreate(
            [
                'is_visible' => false,
                'is_active' => true,
                'code' => '0admin',
                'code_epf' => '0admin',
                'name_first' => 'admin',
                'name_last' => 'admin'
            ],
            [
                'is_visible' => false,
                'is_active' => true,
                'code' => '0admin',
                'code_epf' => '0admin',
                'name_first' => 'admin',
                'name_last' => 'admin',
                'password' => Hash::make('password')
            ]
        );
        
        $newRole = Role::firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        
        //$newUser->roles()->attach($newRole);
        //$newUser->roles()->sync($newRole);
        $newUser->roles()->syncWithoutDetaching($newRole);
        
        $newPermission = Permission::firstOrCreate([
            'slug' => 'show-event',
            'name' => 'Show Event'
        ]);
        
        //$newUser->permissions()->attach($newPermission);
        //$newUser->permissions()->sync($newPermission);
        $newUser->permissions()->syncWithoutDetaching($newPermission);
        
        $newUserAPIToken = $newUser->userAPITokens()->firstOrCreate([
            'is_visible' => false,
            'is_active' => true,
            'is_deactivatable' => false,
            'is_notifiable' => false
        ]);
        
        $newUser->userAPITokens()->save($newUserAPIToken);
        
        
        $newCompany = Company::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'brandix',
            'name' => 'brandix',
            'display_name' => 'brandix'
        ]);
        
        $newUser->company()->associate($newCompany)->save();
        
        $newStrategicBusinessUnit = StrategicBusinessUnit::firstOrCreate([
            //'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli',
            'name' => 'bli',
            'display_name' => 'bli',
            //'company_id' => $newCompany->id
        ]);
        
        $newUser->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        
        $newDepartment = Department::firstOrCreate([
            //'id' => 'quality',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'quality',
            'name' => 'quality',
            'display_name' => 'quality',
            //'strategic_business_unit_id' => $newStrategicBusinessUnit->id
        ]);
        
        $newUser->department()->associate($newDepartment)->save();
    }
}
