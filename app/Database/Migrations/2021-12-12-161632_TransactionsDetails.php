<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Shoes extends Migration
{
    public function up()
    {
        $this->forge->addfield([
'transactions_details'  => [

            ],
            'merk',
            'jumlah',
            'harga',
            'total'
               

        ]);
        $this->forge->addkey(id, true);
        $this->forge->createTable('transactions_details');

    }

    public function down()
    {
        $this->forge->dropTable('transactions_details');
    }
}