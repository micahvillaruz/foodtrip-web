<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function dashboard()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Dashboard", "title" => "Dashboard"]);
		$this->load->view('admin/dashboard');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/scripts/dashboard-scripts');
	}

	public function restaurants()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Restaurants", "title" => "Restaurants"]);
		$this->load->view('admin/restaurants-management/pages/restaurants');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/restaurants-management/pages/scripts/restaurant-scripts');
	}

	public function restaurant_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Restaurants", "title" => "Restaurant Details"]);
		$this->load->view('admin/restaurants-management/pages/restaurant-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/restaurants-management/pages/scripts/restaurant-details-scripts');
	}

	public function products()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Products"]);
		$this->load->view('admin/products-management/pages/products');
		$this->load->view('partials/footer');
		$this->load->view('admin/products-management/components/modals/remove-item-modal');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/products-management/pages/scripts/product-scripts');
	}

	public function product_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Product Details"]);
		$this->load->view('admin/products-management/pages/product-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/products-management/pages/scripts/product-details-scripts');
	}

	public function add_product()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Create Product"]);
		$this->load->view('admin/products-management/pages/add-product');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/products-management/pages/scripts/add-product-scripts');
	}

	public function customers()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Customers", "title" => "Customers"]);
		$this->load->view('admin/customers-management/pages/customers');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/customers-management/pages/scripts/customer-scripts');
	}

	public function orders()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Orders"]);
		$this->load->view('admin/orders-management/pages/orders');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/orders-management/pages/scripts/order-scripts');
	}

	public function order_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Order Details"]);
		$this->load->view('admin/orders-management/pages/order-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/orders-management/pages/scripts/order-details-scripts');
	}

	public function invoices()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Invoices", "title" => "Invoice List"]);
		$this->load->view('admin/invoices-management/pages/invoices');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/invoices-management/pages/scripts/invoice-scripts');
	}

	public function invoice_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Invoices", "title" => "Invoice Details"]);
		$this->load->view('admin/invoices-management/pages/invoice-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/invoices-management/pages/scripts/invoice-details-scripts');
	}

	public function restaurant_admins()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Restaurant Admins", "title" => "Restaurant Admins"]);
		$this->load->view('admin/restaurant-admins-management/pages/restaurant-admins');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('admin/restaurant-admins-management/pages/scripts/resttaurant-admins-scripts');
	}
}
