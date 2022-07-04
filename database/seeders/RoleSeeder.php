<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$roles = [
			[
				'id'    			=> 1,
				'name'  			=> 'Super Admin',
				'created_at'	=> now(),
				'updated_at'	=> now()
			],
			[
				'id'    			=> 2,
				'name'  			=> 'Doctor',
				'created_at'	=> now(),
				'updated_at'	=> now()
			],
			[
				'id'    			=> 3,
				'name'  			=> 'Receptionist',
				'created_at'	=> now(),
				'updated_at'	=> now()
			],
			[
				'id'    			=> 4,
				'name'  			=> 'Cashier',
				'created_at'	=> now(),
				'updated_at'	=> now()
			],
		];

		foreach ($roles as $role) {
			Role::create([
				'id'    			=> $role['id'],
				'name'  			=> $role['name'],
				'created_at'	=> $role['created_at'],
				'updated_at'	=> $role['updated_at']
			]);
		}
	}
}
