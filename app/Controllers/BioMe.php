<?php 

namespace App\Controllers;

class BioMe extends BaseController
{
	public function index()
	{
		echo view("Home");
	}
	public function Aboutme()
	{
		echo view("Aboutme");
	}
    public function Contact()
	{
		$data['name'] = "CodeIgniter";
		echo view("Contact", $data);
	}
    public function FAQ()
	{
		echo view("FAQ");
	}
}