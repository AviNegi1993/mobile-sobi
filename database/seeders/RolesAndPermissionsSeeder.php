<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        $user = Role::updateOrCreate(['name' => 'User']);
        $admin = Role::updateOrCreate(['name' => 'Admin']);
      

        $userDetail = User::updateOrCreate(
                        [
                            'name' => 'Staff',
                            'email' => 'staff@staff.com',
                        ],
                        [
                            'password' => bcrypt('admin123')
        ]);
        
     
        $useradmin = User::updateOrCreate(
                        [
                            'name' => 'admin',
                            'email' => 'admin@admin.com',
                        ],
                        [
                            'password' => bcrypt('admin123')
        ]);
   
       
        $userDetail->assignRole($user);
        $useradmin->assignRole($admin);
    }

}
