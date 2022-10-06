<?php

namespace App\Models;

use CodeIgniter\Model;

class PenontonModel extends Model
{
	protected $table                = 'penonton';
	protected $primaryKey           = 'id_penonton';
	protected $allowedFields = ['nis','nama','jenis','valid'];
	
}
