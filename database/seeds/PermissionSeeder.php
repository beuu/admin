<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Create Edit',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-show',
                'display_name' => 'Show Role',
                'description' => 'Show Role'
            ],
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'List All Roles'
            ],
            [
                'name' => 'role-update',
                'display_name' => 'Update Role',
                'description' => 'Update Role Information'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Create User',
                'description' => 'Create New User'
            ],
            [
                'name' => 'user-list',
                'display_name' => 'Display User Listing',
                'description' => 'List All Users'
            ],
            [
                'name' => 'user-update',
                'display_name' => 'Update User',
                'description' => 'Update User Information'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Delete User',
                'description' => 'Delete User'
            ],[
                'name' => 'user-edit',
                'display_name' => 'User Edit',
                'description' => 'Edit User'
            ],
            [
                'name' => 'user-show',
                'display_name' => 'Show User',
                'description' => 'Show User'
            ]
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
