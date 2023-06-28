<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAhassTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_ahass' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_ahass' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ahass');
    }

    public function down()
    {
        $this->forge->dropTable('ahass');
    }
}
