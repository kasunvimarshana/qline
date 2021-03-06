<?php

namespace App\Permissions;

//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Builder;

use App\Permission;
use App\Role;

trait HasPermissionsTrait{

    //many to many
    public function roles(){
        //return $this->belongsToMany(Role::class, 'user_roles');
        //return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }

    //many to many
    public function permissions(){
        //return $this->belongsToMany(Permission::class, 'user_permissions');
        //return $this->belongsToMany(Permission::class, 'user_permissions', 'user_id', 'permission_id');
        return $this->belongsToMany('App\Permission', 'user_permissions', 'user_id', 'permission_id');
    }
    
    //function
    public function hasRole( ... $roles ){
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)){
                return true;
            }
        }
        return false;
    }
    
    /*
    //function
    protected function hasPermissionTo($permission){
        return $this->hasPermission($permission);
    }
    */
    
    //function
    public function hasPermissionTo($permission) {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    //function
    protected function hasPermission($permission){
        return (bool) $this->permissions->where('slug', "=", $permission)->count();
    }
    
    //function
    public function hasPermissionThroughRole($permission) {
        $permission = $this->getPermission($permission);
        if( (empty($permission)) ){
            return false;
        }
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
    
    //function
    public function givePermissionsTo(... $permissions) {
        $permissions = $this->getAllPermissions($permissions);
        if($permissions === null) {
            return $this;
        }
        //$this->permissions()->saveMany($permissions);
        //$this->permissions()->attach($permissions);
        //$this->permissions()->sync($permissions);
        //$this->permissions()->syncWithoutDetaching($permissions);
        /*
        foreach( $permissions as $key => $value ){
            $this->permissions()->attach( $value->id );
        }
        */
        $this->permissions()->saveMany($permissions);
        return $this;
    }
    
    public function deletePermissions( ... $permissions ) {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
    
    public function getPermission($slug){
        $permissionObject = new Permission();
        $permissionObject = $permissionObject->where("slug", "=", $slug)->first();
        return $permissionObject;
    }
    
    public function getAllPermissions($permissions){
        $permissionArray = array();
        $permissionObject = new Permission();
        foreach( $permissions as $key => $value ){
            $permissionArray[ $key ] = $permissionObject->where("slug", "=", $value)->first();
        }
        return $permissionArray;
    }
}