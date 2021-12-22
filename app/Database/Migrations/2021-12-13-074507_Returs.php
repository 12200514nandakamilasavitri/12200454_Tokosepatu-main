<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Returs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'receipt',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('returs');  
    }

    public function down()
    {
        $this->forge->dropTable('returs');
    }
}
