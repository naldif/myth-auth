<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUserTable extends Migration
{
	public function up()
	{

		$fields = [
			'name' => [
				'type'   		=> 'VARCHAR',
				'constraint'	=> '255',
				'after' 		=> 'id'
			],
			'provider_id' => [
				'type'   		=> 'VARCHAR',
				'constraint'	=> '100',
				'after' 		=> 'email'
			],
			'avatar' => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100',
				'after' 		=> 'email'
			]
		];
		$this->forge->addColumn('users', $fields);
	}

	public function down()
	{
		//
	}
}