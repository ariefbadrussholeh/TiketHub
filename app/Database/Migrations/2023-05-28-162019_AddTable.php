<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTable extends Migration
{
    public function up()
    {
        // transportations
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'category'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'operator'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'type'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'capacity'         => ['type' => 'int', 'constraint' => 11, 'null' => true],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
            'deleted_at'       => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('transportations', true);

        // routes
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'origin'                => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'destination'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'origin_destination'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'distance'              => ['type' => 'int', 'constraint' => 11, 'null' => true],
            'created_at'            => ['type' => 'datetime', 'null' => true],
            'updated_at'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('routes', true);

        // schedule
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'transportation_id'     => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'route_id'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'date'                  => ['type' => 'date', 'null' => true],
            'time'                  => ['type' => 'time', 'null' => true],
            'price'                 => ['type' => 'int', 'constraint' => 11, 'null' => true],
            'duration_trip'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'passenger'             => ['type' => 'int', 'constraint' => 11, 'null' => true, 'default' => 0],
            'created_at'            => ['type' => 'datetime', 'null' => true],
            'updated_at'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('transportation_id', 'transportations', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('route_id', 'routes', 'id', '', 'CASCADE');
        $this->forge->createTable('schedules');

        // schedule
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'user_id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'schedule_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'payment_status'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true, 'default' => 'Pending'],
            'booking_date'      => ['type' => 'datetime', 'null' => true],
            'full_name'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'phone_number'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'card_identity'     => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'birth_date'        => ['type' => 'date', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('schedule_id', 'schedules', 'id', '', 'CASCADE');
        $this->forge->createTable('tickets');
    }


    public function down()
    {
        if ($this->db->DBDriver !== 'SQLite3') { // @phpstan-ignore-line
            $this->forge->dropForeignKey('tickets', 'tickets_user_id_foreign');
            $this->forge->dropForeignKey('tickets', 'tickets_schedule_id_foreign');
            $this->forge->dropForeignKey('schedules', 'schedules_transportation_id_foreign');
            $this->forge->dropForeignKey('schedules', 'schedules_route_id_foreign');
        }

        $this->forge->dropTable('transportations', true);
        $this->forge->dropTable('routes', true);
        $this->forge->dropTable('schedules', true);
        $this->forge->dropTable('tickets', true);
    }
}
