<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function inbox()
	{
		$this->load->view('inbox');
	}
	public function error()
	{
		$this->load->view('404');
	}
	public function blank()
	{
		$this->load->view('blank');
	}
	public function calendar()
	{
		$this->load->view('calendar');
	}
	public function faq()
	{
		$this->load->view('faq');
	}
	public function forms()
	{
		$this->load->view('forms');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function graphs()
	{
		$this->load->view('graphs');
	}
	public function layout()
	{
		$this->load->view('layout');
	}
	public function maps()
	{
		$this->load->view('maps');
	}
	public function profile()
	{
		$this->load->view('profile');
	}
	public function signin()
	{
		$this->load->view('signin');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function typography()
	{
		$this->load->view('typography');
	}
	public function validation()
	{
		$this->load->view('validation');
	}
}
