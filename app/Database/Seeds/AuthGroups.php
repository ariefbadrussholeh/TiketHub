<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroups extends Seeder
{
    public function run()
    {
        $this->db->query("INSERT INTO auth_groups (name, description) VALUES('admin', 'Site Administrator')");
        $this->db->query("INSERT INTO auth_groups (name, description) VALUES('user', 'Regular User')");
    }
}
