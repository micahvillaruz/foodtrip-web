<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{


	public function explore()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Home", "title" => "Home"]);
		$this->load->view('customer/home');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/scripts/home-scripts');
	}

	public function profile()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('customer/profile/pages/profile');
		$this->load->view('partials/footer');
		$this->load->view('customer/cart/components/modals/remove-address-modal');
		$this->load->view('customer/cart/components/modals/edit-address-modal');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/profile/pages/scripts/profile-scripts');
	}

	public function profile_settings()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('customer/profile/pages/profile-settings');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/profile/pages/scripts/profile-settings-scripts');
	}

	public function products()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Products"]);
		$this->load->view('customer/products/pages/products');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/products/pages/scripts/product-scripts');
	}

	public function product_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Product Details"]);
		$this->load->view('customer/products/pages/product-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/products/pages/scripts/product-details-scripts');
	}

	public function restaurants()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Restaurants", "title" => "Restaurants"]);
		$this->load->view('customer/restaurants/pages/restaurants');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/restaurants/pages/scripts/restaurant-scripts');
	}

	public function restaurant_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Restaurants", "title" => "Restaurant Details"]);
		$this->load->view('customer/restaurants/pages/restaurant-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/restaurants/pages/scripts/restaurant-details-scripts');
	}

	public function shopping_cart()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Cart", "title" => "Shopping Cart"]);
		$this->load->view('customer/cart/pages/shopping-cart');
		$this->load->view('partials/footer');
		$this->load->view('customer/cart/components/modals/remove-item-modal');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/cart/pages/scripts/shopping-cart-scripts');
	}

	public function checkout()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('customer/cart/pages/checkout-div-main', ["page_title" => "Cart", "title" => "Checkout"]);
		$this->load->view('customer/cart/pages/checkout');
		$this->load->view('partials/footer');
		$this->load->view('customer/cart/components/modals/remove-address-modal');
		$this->load->view('customer/cart/components/modals/edit-address-modal');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/cart/pages/scripts/checkout-scripts');
	}

	public function orders()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Orders"]);
		$this->load->view('customer/orders/pages/orders');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/orders/pages/scripts/order-scripts');
	}

	public function order_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Order Details"]);
		$this->load->view('customer/orders/pages/order-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/orders/pages/scripts/order-details-scripts');
	}

	public function invoices()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Invoices", "title" => "Invoice List"]);
		$this->load->view('customer/invoices/pages/invoices');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/invoices/pages/scripts/invoice-scripts');
	}

	public function invoice_details()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('partials/page-title', ["page_title" => "Invoices", "title" => "Invoice Details"]);
		$this->load->view('customer/invoices/pages/invoice-details');
		$this->load->view('partials/footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('customer/invoices/pages/scripts/invoice-details-scripts');
	}
}
