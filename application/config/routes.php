<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/customer';
$route['404_override'] = 'auth/error_message';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| ROUTES
| -------------------------------------------------------------------------
*/

// Main Routes
$route['customer']                                  = 'home/customer';
$route['restaurant']                                = 'home/restaurant';

// Authentication Routes
$route['signin']                                    = 'auth/signin';
$route['register/restaurant']                       = 'auth/register_restaurant';
$route['signup/customer']                           = 'auth/signup_customer';
$route['forgot-password']                           = 'auth/forgot_password';
$route['password-change']                           = 'auth/password_change';
$route['logout']                                    = 'auth/logout';

// Admin Routes
$route['admin']                                     = 'admin/dashboard';
$route['admin/restaurants']                         = 'admin/restaurants';
$route['admin/restaurants/restaurant-details']      = 'admin/restaurant_details';
$route['admin/products']                            = 'admin/products';
$route['admin/customers']                           = 'admin/customers';
$route['admin/orders']                              = 'admin/orders';
$route['admin/invoices']                            = 'admin/invoices';
$route['admin/invoices/invoice-details']            = 'admin/invoice_details';
$route['admin/restaurant-admins']                   = 'admin/restaurant_admins';
$route['admin/couriers']                            = 'admin/couriers';
$route['admin/delivery-details']                    = 'admin/delivery_details';
$route['admin/admins']                              = 'admin/admins';
$route['admin/profile']                             = 'admin/profile';

// Customer Routes
$route['customer/explore']                          = 'customer/explore';
$route['customer/profile']                          = 'customer/profile';
$route['customer/profile/settings']                 = 'customer/profile_settings';
$route['customer/products']                         = 'customer/products';
$route['customer/products/product-details']         = 'customer/product_details';
$route['customer/restaurants']                      = 'customer/restaurants';
$route['customer/restaurants/restaurant-details']   = 'customer/restaurant_details';
$route['customer/cart']                             = 'customer/shopping_cart';
$route['customer/cart/checkout']                    = 'customer/checkout';
$route['customer/orders']                           = 'customer/orders';
$route['customer/orders/order-details']             = 'customer/order_details';
$route['customer/invoices']                         = 'customer/invoices';
$route['customer/invoices/invoice-details']         = 'customer/invoice_details';

// Resto Admin Routes
$route['restoadmin/dashboard']                      = 'restoadmin/dashboard';
$route['restoadmin/profile']                        = 'restoadmin/profile';
$route['restoadmin/profile/settings']               = 'restoadmin/profile_settings';
$route['restoadmin/restaurant']                     = 'restoadmin/restaurant';
$route['restoadmin/restaurant/edit-restaurant']     = 'restoadmin/edit_restaurant';
$route['restoadmin/products']                       = 'restoadmin/products';
$route['restoadmin/products/product-details']       = 'restoadmin/product_details';
$route['restoadmin/products/add-product']           = 'restoadmin/add_product';
$route['restoadmin/orders']                         = 'restoadmin/orders';
$route['restoadmin/orders/order-details']           = 'restoadmin/order_details';
$route['restoadmin/invoices']                       = 'restoadmin/invoices';
$route['restoadmin/invoices/invoice-details']       = 'restoadmin/invoice_details';
