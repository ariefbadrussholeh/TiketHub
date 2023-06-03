<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RunSeeders extends Seeder
{
    public function run()
    {
        $this->call('AuthGroups');
        $this->call('DummyData');
    }
}
