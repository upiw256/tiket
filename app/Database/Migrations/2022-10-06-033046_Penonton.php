<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penonton extends Migration
{
	public function up()
	{
		$this->forge->addField(array(
			'id_penonton' => array(
					'type' => 'INT',
					'constraint' => 5,
					'unsigned' => TRUE,
					'auto_increment' => TRUE
			),
			'nis' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
			),
			'nama' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'jenis' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			
		));
		$this->forge->addKey('id_penonton', TRUE);
		$this->forge->createTable('penonton');
	}

	public function down()
	{
		$this->forge->dropTable('penonton');
	}
}
