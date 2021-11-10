<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Str;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$user = User::create([
			'name' 			=> 'Admin', 
			'email' 		=> 'admin@sipitung88.com',
			'password' 		=> bcrypt('Secret@123'),
			'username'    	=> Str::random(6),
			'isActive'    	=> 1,
		]);

		$role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
