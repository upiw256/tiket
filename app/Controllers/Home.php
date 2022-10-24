<?php

namespace App\Controllers;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
// use Endroid\QrCode\Label\Label;
// use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
// use Endroid\QrCode\Writer\ValidationException;
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
		helper('filesystem');
		$nama=md5($this->request->getVar('nama').rand());
		$writer = new PngWriter();

		// Create QR code
		$qrCode = QrCode::create('Life is too short to be generating QR codes')
			->setEncoding(new Encoding('UTF-8'))
			->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
			->setSize(300)
			->setMargin(10)
			->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
			->setForegroundColor(new Color(0, 0, 0))
			->setBackgroundColor(new Color(255, 255, 255));

		// Create generic logo
		// $logo = Logo::create(base_url('/assets/logo.jpeg'))
		// 	->setResizeToWidth(50);

		// Create generic label
		// $label = Label::create('Label')
		// 	->setTextColor(new Color(255, 0, 0));

		$result = $writer->write($qrCode);
		$uri = $result->getDataUri();
		
		// Save it to a file
		// dd($uri);
		// $url = 'https://api.qrserver.com/v1/create-qr-code/?data='.$nama.' &amp;size=100x100';
		// $img = base_url('/assets/qrcode/'.$nama.'.png');
		// file_put_contents($img, file_get_contents($url));
		// dd($img);
		$result->saveToFile('D:\Codeigniter\tiket\public\assets\qrcode');

		// Validate the result
		// $writer->validateResult($result, 'Life is too short to be generating QR codes');
		// $this->PenontonModel->save([
		// 	'nis'=>$this->request->getVar('nis'),
		// 	'nama'=>$this->request->getVar('nama'),
		// 	'jenis'=>$this->request->getVar('jenis'),
		// 	'slug'=>$nama,
		// 	'valid'=>'false',
		// ]);
		//return redirect()->to('/');
	}
	public function delete($id)
	{
		$this->PenontonModel->delete($id);
		return redirect()->to('/');
	}
	public function cetak($slug)
	{
		$cetak = $this->PenontonModel->where(['slug'=>$slug])->first();
		if ($cetak==null) {
			return redirect()->to('/');
		}
		$data=[
			'cetak'=> $cetak
		];
		return view('tiket',$data);
	}
	public function print()
	{
		$penonton = $this->PenontonModel->findAll();
		$data=[
			'tiket'=>$penonton
		];
		// header('Content-Type: application/pdf');
		// return view('print',$data);
		// $html= view('print',$data);
		// $this->pdf->loadHtml($html);
		// $this->pdf->setPaper('A4','portrait');
		// $this->pdf->render();
		// $this->pdf->stream();
		// $this->mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $this->mpdf->Output();
		
		
	}
}
