<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RestoAdmin extends CI_Controller
{


  public function dashboard()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dashboard", "title" => "Dashboard"]);
    $this->load->view('restoadmin/dashboard');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/scripts/dashboard-scripts');
  }

  public function profile()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('restoadmin/profile/pages/profile');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/profile/pages/scripts/profile-scripts');
  }

  public function profile_settings()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('restoadmin/profile/pages/profile-settings');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/profile/pages/scripts/profile-settings-scripts');
  }

  public function restaurant()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('restoadmin/restaurant-management/pages/restaurant');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/restaurant-management/pages/scripts/restaurant-scripts');
  }

  public function edit_restaurant()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('restoadmin/restaurant-management/pages/edit-restaurant');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/restaurant-management/pages/scripts/edit-restaurant-scripts');
  }

  public function products()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Products"]);
    $this->load->view('restoadmin/products-management/pages/products');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/products-management/pages/scripts/product-scripts');
  }

  public function product_details()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Product Details"]);
    $this->load->view('restoadmin/products-management/pages/product-details');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/products-management/pages/scripts/product-details-scripts');
  }

  public function add_product()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Products", "title" => "Add Dish"]);
    $this->load->view('restoadmin/products-management/pages/add-product');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/products-management/pages/scripts/add-product-scripts');
  }

  public function orders()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Orders"]);
    $this->load->view('restoadmin/orders-management/pages/orders');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/orders-management/pages/scripts/order-scripts');
  }

  public function order_details()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Orders", "title" => "Order Details"]);
    $this->load->view('restoadmin/orders-management/pages/order-details');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/orders-management/pages/scripts/order-details-scripts');
  }

  public function invoices()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Payments", "title" => "Payments"]);
    $this->load->view('restoadmin/invoices-management/pages/invoices');
    $this->load->view('partials/footer');
    $this->load->view('restoadmin/invoices-management/components/modals/remove-payment-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/invoices-management/pages/scripts/invoice-scripts');
  }

  public function invoice_details()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/topbar');
    $this->load->view('partials/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Payments", "title" => "Invoice"]);
    $this->load->view('restoadmin/invoices-management/pages/invoice-details');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('restoadmin/invoices-management/pages/scripts/invoice-details-scripts');
  }
}
