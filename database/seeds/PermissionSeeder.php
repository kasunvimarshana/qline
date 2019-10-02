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
    }
}
