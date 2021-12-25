<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{


		$data = [
			'title' => 'Home | Unsri Peduli',

		];
		echo view('/pages/home', $data);
	}
	public function aboutMe()
	{
		$data = [
			'title' => 'Tentang Kami'
		];

		return view('/pages/aboutMe', $data);
	}
	public function aboutDonor()
	{
		$data = [
			'title' => 'tentang Donor'
		];

		return view('/pages/aboutDonor', $data);
	}
	// public function formulir()
	// {
	// 	$data = [
	// 		'title' => 'formulir'
	// 	];
	// 	return view('/pages/formulir', $data);
	// }
	// public function admin()
	// {
	// 	$data = [
	// 		'title' => 'admin'
	// 	];
	// 	return view('/pages/admin', $data);
	
}
