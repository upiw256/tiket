<?php

namespace App\Controllers;
use App\Libraries\phpqrcode\qrlib;
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
		$nama=md5($this->request->getVar('nama').rand());
		
		$this->PenontonModel->save([
			'nis'=>$this->request->getVar('nis'),
			'nama'=>$this->request->getVar('nama'),
			'jenis'=>$this->request->getVar('jenis'),
			'slug'=>$nama,
			'valid'=>'false',
		]);
		return redirect()->to('/');
	}
	public function delete($id)
	{
		$this->PenontonModel->delete($id);
		return redirect()->to('/');
	}
	public function cetak($slug)
	{
		
		$data=[
			'cetak'=>$this->PenontonModel->where(['slug'=>$slug])->first()
		];
		return view('tiket',$data);
	}
}
