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
		$this->session->sess_destroy();
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('access/signin');
		$this->load->view('access/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('access/scripts/signin-scripts');
	}

	public function oAuth()
	{
		if ($_GET['token'] != null) {
			// set session
			$this->session->set_userdata(
				array(
					'TOKEN' => $_GET['token'],
					'FIRST_NAME' => $_GET['first_name'],
					'MIDDLE_NAME' => $_GET['middle_name'],
					'LAST_NAME' => $_GET['last_name'],
					'FULL_NAME' => $_GET['full_name'],
					'EMAIL' => $_GET['email_address'],
					'USER_TYPE' => $_GET['user_type'],
				)
			);
			if ($this->session->userdata('USER_TYPE') == 'Admin') {
				// redirect admin dashboard 
				redirect(base_url('admin/dashboard'));
			} elseif ($this->session->userdata('USER_TYPE') == 'Resto_Admin') {
				// redirect restoadmin dashboard 
				redirect(base_url('restoadmin/dashboard'));
			} else {
				// redirect customer homepage
				redirect(base_url('customer/explore'));
			}
		}
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
