<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penonton extends Seeder
{
	public function run()
	{
		$data = [
            'nama' => 'upiw',
            'nis'    => '32154',
			'jenis'=> 'siswa',
			'slug'=>md5('32154'),
			'valid'=>'false'
        ];
		$this->db->table('penonton')->insert($data);
	}
}
