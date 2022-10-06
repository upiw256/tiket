<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$penonton = $this->PenontonModel->findAll();
		$data=[
			'penonton'=>$penonton
		];
		
		return view('welcome_message',$data);
	}
	public function input()
	{
		return view('input');
	}
	public function simpan()
	{
		$this->PenontonModel->save([
			'nis'=>$this->request->getVar('nis'),
			'nama'=>$this->request->getVar('nama'),
			'jenis'=>$this->request->getVar('jenis'),
			'valid'=>'false',
		]);
		return redirect()->to('/');
	}
}
