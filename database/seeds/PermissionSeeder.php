<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-event',
            'name' => 'Create Event'
        ]);
        
        $newPermission = Permission::firstOrCreate([
            'slug' => 'edit-event',
            'name' => 'Edit Event'
        ]);
        
        $newPermission = Permission::firstOrCreate([
            'slug' => 'show-event',
            'name' => 'Show Event'
        ]);
        
        /*
        $newRole = $newPermission->roles()->firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        */
        
        $newRole = Role::firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        
        //$newPermission->roles()->attach($newRole);
        //$newPermission->roles()->sync($newRole);
        $newPermission->roles()->syncWithoutDetaching($newRole);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_cutting',
            'name' => 'Create Quality Record Cutting'
        ]);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_r_q_c',
            'name' => 'Create Quality Record RQC'
        ]);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_sewing_check',
            'name' => 'Create Quality Record Sewing Check'
        ]);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_sewing_audit',
            'name' => 'Create Quality Record Sewing Audit'
        ]);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_finishing',
            'name' => 'Create Quality Record Finishing'
        ]);
                                                      
        $newPermission = Permission::firstOrCreate([
            'slug' => 'create-quality_record_c_n_i',
            'name' => 'Create Quality Record CNI'
        ]);
    }
}
