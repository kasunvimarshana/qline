<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newRole = Role::firstOrCreate([
            'slug' => 'super-user',
            'name' => 'Super User'
        ]);
        
        /*
        $newPermission = $newRole->permissions()->firstOrCreate([
            'slug' => 'edit-event',
            'name' => 'Edit Event'
        ]);
        */
        
        $newPermission = Permission::firstOrCreate([
            'slug' => 'edit-event',
            'name' => 'Edit Event'
        ]);
        
        //$newRole->permissions()->attach($newPermission);
        //$newRole->permissions()->sync($newPermission);
        $newRole->permissions()->syncWithoutDetaching($newPermission);
    }
}
