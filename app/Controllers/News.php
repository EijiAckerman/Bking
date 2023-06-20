<?php namespace App\Controllers;

class News extends BaseController
{
	public function index()
	{
		echo view('news');
	}

    public function Home1()
	{
		echo view('Home1');
	}

    public function Contact1()
	{
		echo view('Contact1');
	}

    public function About1()
	{
		echo view('About1');
	}

    public function FAQ1()
	{
		echo view('FAQ1');
	}

}