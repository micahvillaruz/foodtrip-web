<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function signin()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/signin');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/scripts/signin-scripts');
	}

	public function register_restaurant()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/restaurant/pages/restaurant');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/restaurant/pages/scripts/restaurant-scripts');
	}

	public function signup_restoadmin()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/restoadmin/pages/signup');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/restoadmin/pages/scripts/signup-scripts');
	}

	public function signup_customer()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/customer/pages/signup');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/customer/pages/scripts/signup-scripts');
	}

	public function forgot_password()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/forgot-password');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/scripts/forgot-password-scripts');
	}

	public function password_change()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/password-change');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/scripts/password-change-scripts');
	}

	public function logout()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/logout');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/scripts/logout-scripts');
	}

	public function error_message()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('errors/error-404');
	}
}
