<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'name_user' => 'Administrator',
			'email_user' => 'vitojati2005@gmail.com',
			'nomor_user' => '09756776',
			'password_user' => password_hash('12345', PASSWORD_BCRYPT),
		];
		$this->db->table('users')->insert($data);
	}
}
