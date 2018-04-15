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
		$this->load->view('pages/inbox');
	}
	public function error()
	{
		$this->load->view('pages/404');
	}
	public function blank()
	{
		$this->load->view('pages/blank');
	}
	public function calendar()
	{
		$this->load->view('pages/calendar');
	}
	public function faq()
	{
		$this->load->view('pages/faq');
	}
	public function forms()
	{
		$this->load->view('pages/forms');
	}
	public function gallery()
	{
		$this->load->view('pages/gallery');
	}
	public function graphs()
	{
		$this->load->view('pages/graphs');
	}
	public function layout()
	{
		$this->load->view('pages/layout');
	}
	public function maps()
	{
		$this->load->view('pages/maps');
	}
	public function profile()
	{
		$this->load->view('pages/profile');
	}
	public function signin()
	{
		$this->load->view('pages/signin');
	}
	public function signup()
	{
		$this->load->view('pages/signup');
	}
	public function typography()
	{
		$this->load->view('pages/typography');
	}
	public function validation()
	{
		$this->load->view('pages/validation');
	}
}
