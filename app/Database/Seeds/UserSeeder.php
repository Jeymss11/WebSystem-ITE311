<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'role'          => 'admin',
                'first_name'    => 'Jems',
                'last_name'     => 'Consuegra',
                'email'         => 'Jc@gmail.com',
                'password_hash' => password_hash('admin123', PASSWORD_DEFAULT),
            ],

            [
                'role'          => 'instructor',
                'first_name'    => 'Oscar',
                'last_name'     => 'Wiggy',
                'email'         => 'Oscarwig@gmail.com',
                'password_hash' => password_hash('instructor123', PASSWORD_DEFAULT),
            ],

            [
                'role'          => 'student',
                'first_name'    => 'Junel',
                'last_name'     => 'Nabuntoran',
                'email'         => 'junel@gmail.com',
                'password_hash' => password_hash('student123', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}