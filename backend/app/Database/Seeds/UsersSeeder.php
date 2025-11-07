<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{


    public function run()
    {

        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $userinfo = [
            [
                'first_name' => 'Justin Kirk',
                'middle_name' => 'Oliveros',
                'last_name' => 'Endozo',
                'email' => 'justinkirkendozo@gmail.com',
                'password_hash' => 'Kulasa17',
                'account_status' => '1',
                'type' => 'manager',
                'gender' => 'Male',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Kulasa',
                'middle_name' => 'Oliveros',
                'last_name' => 'Endozo',
                'email' => 'kulasaendozo@gmail.com',
                'password_hash' => 'KulasaXD',
                'account_status' => '1',
                'type' => 'client',
                'gender' => 'Female',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];
        $this->db->table('admintable')->insertBatch($userinfo);
    }
}
