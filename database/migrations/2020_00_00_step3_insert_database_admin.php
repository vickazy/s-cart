<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDatabaseAdmin extends Migration
{
    public $adminUser = 'admin';
    //admin
    public $adminPassword = '$2y$10$JcmAHe5eUZ2rS0jU1GWr/.xhwCnh2RU13qwjTPcqfmtZXjZxcryPO';
    public $adminEmail = 'your-email@your-domain.com';
    public $timezone_default = 'Asia/Ho_Chi_Minh';
    public $language_default = 'vi';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table(SC_DB_PREFIX.'admin_menu')->insert([
            ['id' => 1, 'parent_id' => 6, 'sort' => 11, 'title' => 'lang::admin.menu_titles.order_manager', 'icon' => 'fa-cart-arrow-down', 'uri' => '', 'type' => 0],
            ['id' => 2, 'parent_id' => 6, 'sort' => 12, 'title' => 'lang::admin.menu_titles.catalog_mamager', 'icon' => 'fa-folder-open', 'uri' => '', 'type' => 0],
            ['id' => 3, 'parent_id' => 6, 'sort' => 13, 'title' => 'lang::admin.menu_titles.customer_manager', 'icon' => 'fa-group', 'uri' => '', 'type' => 0],
            ['id' => 4, 'parent_id' => 8, 'sort' => 201, 'title' => 'lang::admin.menu_titles.template_layout', 'icon' => 'fa-object-ungroup', 'uri' => '', 'type' => 0],
            ['id' => 5, 'parent_id' => 9, 'sort' => 301, 'title' => 'lang::admin.menu_titles.config_manager', 'icon' => 'fa-cogs', 'uri' => '', 'type' => 0],
            ['id' => 6, 'parent_id' => 0, 'sort' => 10, 'title' => 'lang::ADMIN SHOP', 'icon' => 'fa-minus', 'uri' => '', 'type' => 0],
            ['id' => 7, 'parent_id' => 0, 'sort' => 100, 'title' => 'lang::ADMIN CONTENT', 'icon' => 'fa-minus', 'uri' => '', 'type' => 0],
            ['id' => 8, 'parent_id' => 0, 'sort' => 200, 'title' => 'lang::ADMIN EXTENSION', 'icon' => 'fa-minus', 'uri' => '', 'type' => 0],
            ['id' => 9, 'parent_id' => 0, 'sort' => 300, 'title' => 'lang::ADMIN SYSTEM', 'icon' => 'fa-minus', 'uri' => '', 'type' => 0],
            ['id' => 10, 'parent_id' => 7, 'sort' => 102, 'title' => 'lang::page.admin.title', 'icon' => 'fa-clone', 'uri' => 'admin::page', 'type' => 0],
            ['id' => 11, 'parent_id' => 1, 'sort' => 6, 'title' => 'lang::shipping_status.admin.title', 'icon' => 'fa-truck', 'uri' => 'admin::shipping_status', 'type' => 0],
            ['id' => 12, 'parent_id' => 1, 'sort' => 3, 'title' => 'lang::order.admin.title', 'icon' => 'fa-shopping-cart', 'uri' => 'admin::order', 'type' => 0],
            ['id' => 13, 'parent_id' => 1, 'sort' => 4, 'title' => 'lang::order_status.admin.title', 'icon' => 'fa-asterisk', 'uri' => 'admin::order_status', 'type' => 0],
            ['id' => 14, 'parent_id' => 1, 'sort' => 5, 'title' => 'lang::payment_status.admin.title', 'icon' => 'fa-recycle', 'uri' => 'admin::payment_status', 'type' => 0],
            ['id' => 15, 'parent_id' => 2, 'sort' => 0, 'title' => 'lang::category.admin.title', 'icon' => 'fa-folder-open-o', 'uri' => 'admin::category', 'type' => 0],
            ['id' => 16, 'parent_id' => 2, 'sort' => 0, 'title' => 'lang::product.admin.title', 'icon' => 'fa-file-photo-o', 'uri' => 'admin::product', 'type' => 0],
            ['id' => 17, 'parent_id' => 2, 'sort' => 0, 'title' => 'lang::supplier.admin.title', 'icon' => 'fa-user-secret', 'uri' => 'admin::supplier', 'type' => 0],
            ['id' => 18, 'parent_id' => 2, 'sort' => 0, 'title' => 'lang::brand.admin.title', 'icon' => 'fa-bank', 'uri' => 'admin::brand', 'type' => 0],
            ['id' => 19, 'parent_id' => 2, 'sort' => 0, 'title' => 'lang::attribute_group.admin.title', 'icon' => 'fa-bars', 'uri' => 'admin::attribute_group', 'type' => 0],
            ['id' => 20, 'parent_id' => 3, 'sort' => 0, 'title' => 'lang::customer.admin.title', 'icon' => 'fa-user', 'uri' => 'admin::customer', 'type' => 0],
            ['id' => 21, 'parent_id' => 3, 'sort' => 0, 'title' => 'lang::subscribe.admin.title', 'icon' => 'fa-user-circle-o', 'uri' => 'admin::subscribe', 'type' => 0],
            ['id' => 22, 'parent_id' => 4, 'sort' => 0, 'title' => 'lang::block_content.admin.title', 'icon' => 'fa-newspaper-o', 'uri' => 'admin::block_content', 'type' => 0],
            ['id' => 23, 'parent_id' => 4, 'sort' => 0, 'title' => 'lang::admin.menu_titles.block_link', 'icon' => 'fa-chrome', 'uri' => 'admin::link', 'type' => 0],
            ['id' => 24, 'parent_id' => 4, 'sort' => 0, 'title' => 'lang::admin.menu_titles.template_manager', 'icon' => 'fa-columns', 'uri' => 'admin::template', 'type' => 0],
            ['id' => 25, 'parent_id' => 5, 'sort' => 2, 'title' => 'lang::store_value.admin.title', 'icon' => 'fa-code', 'uri' => 'admin::store_value', 'type' => 0],
            ['id' => 26, 'parent_id' => 5, 'sort' => 1, 'title' => 'lang::store_info.admin.title', 'icon' => 'fa-h-square', 'uri' => 'admin::store_info', 'type' => 0],
            ['id' => 27, 'parent_id' => 5, 'sort' => 4, 'title' => 'lang::admin.menu_titles.email_setting', 'icon' => 'fa-envelope', 'uri' => '', 'type' => 0],
            ['id' => 28, 'parent_id' => 27, 'sort' => 0, 'title' => 'lang::email.admin.title', 'icon' => 'fa-cog', 'uri' => 'admin::email', 'type' => 0],
            ['id' => 29, 'parent_id' => 27, 'sort' => 0, 'title' => 'lang::email_template.admin.title', 'icon' => 'fa-bars', 'uri' => 'admin::email_template', 'type' => 0],
            ['id' => 30, 'parent_id' => 5, 'sort' => 5, 'title' => 'lang::admin.menu_titles.localisation', 'icon' => 'fa-shirtsinbulk', 'uri' => '', 'type' => 0],
            ['id' => 31, 'parent_id' => 30, 'sort' => 0, 'title' => 'lang::language.admin.title', 'icon' => 'fa-pagelines', 'uri' => 'admin::language', 'type' => 0],
            ['id' => 32, 'parent_id' => 30, 'sort' => 0, 'title' => 'lang::currency.admin.title', 'icon' => 'fa-dollar', 'uri' => 'admin::currency', 'type' => 0],
            ['id' => 33, 'parent_id' => 7, 'sort' => 101, 'title' => 'lang::banner.admin.title', 'icon' => 'fa-image', 'uri' => 'admin::banner', 'type' => 0],
            ['id' => 34, 'parent_id' => 5, 'sort' => 5, 'title' => 'lang::backup.admin.title', 'icon' => 'fa-save', 'uri' => 'admin::backup', 'type' => 0],
            ['id' => 35, 'parent_id' => 8, 'sort' => 202, 'title' => 'lang::admin.menu_titles.extensions', 'icon' => 'fa-puzzle-piece', 'uri' => '', 'type' => 0],
            ['id' => 36, 'parent_id' => 8, 'sort' => 202, 'title' => 'lang::admin.menu_titles.modules', 'icon' => 'fa-codepen', 'uri' => '', 'type' => 0],
            ['id' => 37, 'parent_id' => 9, 'sort' => 302, 'title' => 'lang::admin.menu_titles.report_manager', 'icon' => 'fa-pie-chart', 'uri' => '', 'type' => 0],
            ['id' => 38, 'parent_id' => 9, 'sort' => 0, 'title' => 'lang::admin.menu_titles.admin', 'icon' => 'fa-sitemap', 'uri' => '', 'type' => 0],
            ['id' => 39, 'parent_id' => 35, 'sort' => 0, 'title' => 'admin.extension_manager.Payment', 'icon' => 'fa-money', 'uri' => 'admin::extension/payment', 'type' => 0],
            ['id' => 40, 'parent_id' => 35, 'sort' => 0, 'title' => 'admin.extension_manager.Shipping', 'icon' => 'fa-ambulance', 'uri' => 'admin::extension/shipping', 'type' => 0],
            ['id' => 41, 'parent_id' => 35, 'sort' => 0, 'title' => 'admin.extension_manager.Total', 'icon' => 'fa-cog', 'uri' => 'admin::extension/total', 'type' => 0],
            ['id' => 42, 'parent_id' => 35, 'sort' => 0, 'title' => 'admin.extension_manager.Other', 'icon' => 'fa-circle-thin', 'uri' => 'admin::extension/other', 'type' => 0],
            ['id' => 43, 'parent_id' => 36, 'sort' => 0, 'title' => 'admin.module_manager.Cms', 'icon' => 'fa-modx', 'uri' => 'admin::module/cms', 'type' => 0],
            ['id' => 44, 'parent_id' => 36, 'sort' => 0, 'title' => 'admin.module_manager.Block', 'icon' => 'fa-cube', 'uri' => 'admin::module/block', 'type' => 0],
            ['id' => 45, 'parent_id' => 36, 'sort' => 0, 'title' => 'admin.module_manager.Other', 'icon' => 'fa-circle-thin', 'uri' => 'admin::module/other', 'type' => 0],
            ['id' => 46, 'parent_id' => 38, 'sort' => 0, 'title' => 'lang::admin.menu_titles.users', 'icon' => 'fa-users', 'uri' => 'admin::user', 'type' => 0],
            ['id' => 47, 'parent_id' => 38, 'sort' => 0, 'title' => 'lang::admin.menu_titles.roles', 'icon' => 'fa-user', 'uri' => 'admin::role', 'type' => 0],
            ['id' => 48, 'parent_id' => 38, 'sort' => 0, 'title' => 'lang::admin.menu_titles.permission', 'icon' => 'fa-ban', 'uri' => 'admin::permission', 'type' => 0],
            ['id' => 49, 'parent_id' => 38, 'sort' => 0, 'title' => 'lang::admin.menu_titles.menu', 'icon' => 'fa-bars', 'uri' => 'admin::menu', 'type' => 0],
            ['id' => 50, 'parent_id' => 38, 'sort' => 0, 'title' => 'lang::admin.menu_titles.operation_log', 'icon' => 'fa-history', 'uri' => 'admin::log', 'type' => 0],
            ['id' => 52, 'parent_id' => 7, 'sort' => 103, 'title' => 'lang::news.admin.title', 'icon' => 'fa-file-powerpoint-o', 'uri' => 'admin::news', 'type' => 0],
            ['id' => 53, 'parent_id' => 5, 'sort' => 3, 'title' => 'lang::env.title', 'icon' => 'fa-cog', 'uri' => 'admin::env', 'type' => 0],
            ['id' => 54, 'parent_id' => 37, 'sort' => 0, 'title' => 'lang::admin.menu_titles.report_product', 'icon' => 'fa-bars', 'uri' => 'admin::report/product', 'type' => 0],
            ['id' => 55, 'parent_id' => 2, 'sort' => 100, 'title' => 'lang::product.config_manager.title', 'icon' => 'fa fa-cog', 'uri' => 'admin::product_config', 'type' => 0],
            ['id' => 56, 'parent_id' => 3, 'sort' => 100, 'title' => 'lang::customer.config_manager.title', 'icon' => 'fa fa-cog', 'uri' => 'admin::customer_config', 'type' => 0],
            ['id' => 57, 'parent_id' => 5, 'sort' => 2, 'title' => 'lang::url.config_manager.title', 'icon' => 'fa-gg', 'uri' => 'admin::url_config', 'type' => 0],
            ['id' => 58, 'parent_id' => 5, 'sort' => 5, 'title' => 'lang::admin.menu_titles.cache_manager', 'icon' => 'fa-tripadvisor', 'uri' => 'admin::cache_config', 'type' => 0],

        ]
        );

        DB::table(SC_DB_PREFIX.'admin_permission')->insert([
            ['id' => '1', 'name' => 'Admin manager', 'slug' => 'admin.manager', 'http_uri' => 'GET::sc_admin/user,GET::sc_admin/role,GET::sc_admin/permission,ANY::sc_admin/log/*,ANY::sc_admin/menu/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '2', 'name' => 'Dashboard', 'slug' => 'dashboard', 'http_uri' => 'GET::sc_admin', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '3', 'name' => 'Auth manager', 'slug' => 'auth.full', 'http_uri' => 'ANY::sc_admin/auth/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '4', 'name' => 'Setting manager', 'slug' => 'setting.full', 'http_uri' => 'ANY::sc_admin/store_info/*,ANY::sc_admin/store_value/*,ANY::sc_admin/url_config/*,ANY::sc_admin/product_config/*, ANY::sc_admin/customer_config/*, ANY::sc_admin/env/*,ANY::sc_admin/email/*,ANY::sc_admin/email_template/*,ANY::sc_admin/language/*,ANY::sc_admin/currency/*,ANY::sc_admin/backup/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '5', 'name' => 'Upload management', 'slug' => 'upload.full', 'http_uri' => 'ANY::sc_admin/uploads/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '6', 'name' => 'Module manager', 'slug' => 'module.full', 'http_uri' => 'ANY::sc_admin/module/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '7', 'name' => 'Extension manager', 'slug' => 'extension.full', 'http_uri' => 'ANY::sc_admin/extension/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '8', 'name' => 'CMS manager', 'slug' => 'cms.full', 'http_uri' => 'ANY::sc_admin/page/*,ANY::sc_admin/banner/*,ANY::sc_admin/cms_category/*,ANY::sc_admin/cms_content/*,ANY::sc_admin/news/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '11', 'name' => 'Discount manager', 'slug' => 'discount.full', 'http_uri' => 'ANY::sc_admin/shop_discount/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '14', 'name' => 'Shipping status', 'slug' => 'shipping_status.full', 'http_uri' => 'ANY::sc_admin/shipping_status/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '15', 'name' => 'Payment  status', 'slug' => 'payment_status.full', 'http_uri' => 'ANY::sc_admin/payment_status/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '17', 'name' => 'Customer manager', 'slug' => 'customer.full', 'http_uri' => 'ANY::sc_admin/customer/*,ANY::sc_admin/subscribe/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '18', 'name' => 'Order status', 'slug' => 'order_status.full', 'http_uri' => 'ANY::sc_admin/order_status/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '19', 'name' => 'Product manager', 'slug' => 'product.full', 'http_uri' => 'ANY::sc_admin/category/*,ANY::sc_admin/supplier/*,ANY::sc_admin/brand/*,ANY::sc_admin/attribute_group/*,ANY::sc_admin/product/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '20', 'name' => 'Order Manager', 'slug' => 'order.full', 'http_uri' => 'ANY::sc_admin/order/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '21', 'name' => 'Report manager', 'slug' => 'report.full', 'http_uri' => 'ANY::sc_admin/report/*', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '22', 'name' => 'Template manager', 'slug' => 'template.full', 'http_uri' => 'ANY::sc_admin/block_content/*,ANY::sc_admin/link/*,ANY::sc_admin/template/*', 'created_at' => date('Y-m-d H:i:s')],
        ]
        );

        DB::table(SC_DB_PREFIX.'admin_role')->insert([
            ['id' => '1', 'name' => 'Administrator', 'slug' => 'administrator', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '2', 'name' => 'Group only View', 'slug' => 'view.all', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '3', 'name' => 'Manager', 'slug' => 'manager', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '4', 'name' => 'Cms manager', 'slug' => 'cms', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '5', 'name' => 'Accountant', 'slug' => 'accountant', 'created_at' => date('Y-m-d H:i:s')],
            ['id' => '6', 'name' => 'Marketing', 'slug' => 'maketing', 'created_at' => date('Y-m-d H:i:s')]]
        );

        DB::table(SC_DB_PREFIX.'admin_role_menu')->insert([
            ['menu_id' => '38', 'role_id' => '1', 'created_at' => date('Y-m-d H:i:s')],
            ['menu_id' => '38', 'role_id' => '2', 'created_at' => date('Y-m-d H:i:s')],
            ['menu_id' => '38', 'role_id' => '3', 'created_at' => date('Y-m-d H:i:s')],
        ]
        );

        DB::table(SC_DB_PREFIX.'admin_role_permission')->insert([
            ['role_id' => 3, 'permission_id' => 5, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 1, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 3, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 8, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 17, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 11, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 20, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 18, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 15, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 19, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 21, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 4, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 22, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 3, 'permission_id' => 14, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 4, 'permission_id' => 3, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 4, 'permission_id' => 8, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 5, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 5, 'permission_id' => 20, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 5, 'permission_id' => 3, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 5, 'permission_id' => 21, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 5, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 3, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 8, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 17, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 11, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 20, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 15, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 19, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 21, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 14, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 6, 'permission_id' => 18, 'created_at' => date('Y-m-d H:i:s')],
            ['role_id' => 4, 'permission_id' => 5, 'created_at' => date('Y-m-d H:i:s')],
        ]
        );
        
        DB::table(SC_DB_PREFIX.'admin_role_user')->insert(
            ['role_id' => '1', 'user_id' => '1']
        );

        if(!empty(session('infoInstall')['admin_user'])) {
            $this->adminUser = session('infoInstall')['admin_user'];
        }
        if(!empty(session('infoInstall')['admin_password'])) {
            $this->adminPassword = session('infoInstall')['admin_password'];
        }
        if(!empty(session('infoInstall')['admin_email'])) {
            $this->adminEmail = session('infoInstall')['admin_email'];
        }
        DB::table(SC_DB_PREFIX.'admin_user')->insert(
            ['id' => '1', 'username' => $this->adminUser, 'password' => $this->adminPassword, 'email' => $this->adminEmail, 'name' => 'Administrator', 'avatar' => '/admin/avatar/user.jpg', 'created_at' => date('Y-m-d H:i:s')]
        );


        if(!empty(session('infoInstall')['timezone_default'])) {
            $this->timezone_default = session('infoInstall')['timezone_default'];
        }
        if(!empty(session('infoInstall')['language_default'])) {
            $this->language_default = session('infoInstall')['language_default'];
        }
        DB::table(SC_DB_PREFIX.'admin_config')->insert([
            ['group' => '', 'code' => 'config', 'key' => 'shop_allow_guest', 'value' => '1', 'sort' => '11', 'detail' => 'lang::admin.shop_allow_guest', 'store_id' => '1'],
            ['group' => '', 'code' => 'config', 'key' => 'product_preorder', 'value' => '1', 'sort' => '18', 'detail' => 'lang::admin.product_preorder', 'store_id' => '1'],
            ['group' => '', 'code' => 'config', 'key' => 'product_display_out_of_stock', 'value' => '1', 'sort' => '19', 'detail' => 'lang::admin.product_display_out_of_stock', 'store_id' => '1'],
            ['group' => '', 'code' => 'config', 'key' => 'product_buy_out_of_stock', 'value' => '1', 'sort' => '20', 'detail' => 'lang::admin.product_buy_out_of_stock', 'store_id' => '1'],
            ['group' => '', 'code' => 'config', 'key' => 'show_date_available', 'value' => '1', 'sort' => '21', 'detail' => 'lang::admin.show_date_available', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'product_hot', 'value' => '6', 'sort' => '0', 'detail' => 'lang::admin.hot_product', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'product_new', 'value' => '6', 'sort' => '0', 'detail' => 'lang::admin.new_product', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'product_list', 'value' => '18', 'sort' => '0', 'detail' => 'lang::admin.list_product', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'product_relation', 'value' => '4', 'sort' => '0', 'detail' => 'lang::admin.relation_product', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'product_viewed', 'value' => '4', 'sort' => '0', 'detail' => 'lang::admin.viewed_product', 'store_id' => '1'],
            ['group' => '', 'code' => 'display', 'key' => 'item_list', 'value' => '12', 'sort' => '0', 'detail' => 'lang::admin.item_list', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'email_action_mode', 'value' => '1', 'sort' => '0', 'detail' => 'lang::email.email_action.email_action_mode', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'order_success_to_admin', 'value' => '0', 'sort' => '1', 'detail' => 'lang::email.email_action.order_success_to_admin', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'order_success_to_customer', 'value' => '0', 'sort' => '2', 'detail' => 'lang::email.email_action.order_success_to_cutomer', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'welcome_customer', 'value' => '0', 'sort' => '4', 'detail' => 'lang::email.email_action.welcome_customer', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'contact_to_admin', 'value' => '1', 'sort' => '6', 'detail' => 'lang::email.email_action.contact_to_admin', 'store_id' => '1'],
            ['group' => '', 'code' => 'email_action', 'key' => 'email_action_smtp_mode', 'value' => '0', 'sort' => '6', 'detail' => 'lang::email.email_action.email_action_smtp_mode', 'store_id' => '1'],
            ['group' => 'Modules', 'code' => 'Block', 'key' => 'LastViewProduct', 'value' => '1', 'sort' => '0', 'detail' => 'Modules/Block/LastViewProduct::LastViewProduct.title', 'store_id' => '1'],
            ['group' => 'Extensions', 'code' => 'Payment', 'key' => 'Cash', 'value' => '1', 'sort' => '0', 'detail' => 'Extensions/Payment/Cash::Cash.title', 'store_id' => '1'],
            ['group' => 'Extensions', 'code' => 'Shipping', 'key' => 'ShippingStandard', 'value' => '1', 'sort' => '0', 'detail' => 'lang::Shipping Standard', 'store_id' => '1'],
            ['group' => '', 'code' => 'smtp', 'key' => 'smtp_host', 'value' => '', 'sort' => '8', 'detail' => 'lang::email.smtp_host', 'store_id' => '1'],
            ['group' => '', 'code' => 'smtp', 'key' => 'smtp_user', 'value' => '', 'sort' => '7', 'detail' => 'lang::email.smtp_user', 'store_id' => '1'],
            ['group' => '', 'code' => 'smtp', 'key' => 'smtp_password', 'value' => '', 'sort' => '6', 'detail' => 'lang::email.smtp_password', 'store_id' => '1'],
            ['group' => '', 'code' => 'smtp', 'key' => 'smtp_security', 'value' => '', 'sort' => '5', 'detail' => 'lang::email.smtp_security', 'store_id' => '1'],
            ['group' => '', 'code' => 'smtp', 'key' => 'smtp_port', 'value' => '', 'sort' => '4', 'detail' => 'lang::email.smtp_port', 'store_id' => '1'],
            ['group' => 'Extensions', 'code' => 'Total', 'key' => 'Discount', 'value' => '1', 'sort' => '0', 'detail' => 'Extensions/Total/Discount::Discount.title', 'store_id' => '1'],
            ['group' => '', 'code' => 'cache', 'key' => 'cache_status', 'value' => '0', 'sort' => '0', 'detail' => '', 'store_id' => '1'],
            ['group' => '', 'code' => 'cache', 'key' => 'cache_time', 'value' => '600', 'sort' => '0', 'detail' => '', 'store_id' => '1'],

            ['group' => '', 'code' => 'upload', 'key' => 'upload_image_size', 'value' => '2048', 'sort' => '0', 'detail' => '', 'store_id' => '1'],

            ['group' => '', 'code' => 'upload', 'key' => 'upload_image_thumb_width', 'value' => '250', 'sort' => '0', 'detail' => '', 'store_id' => '1'],
            ['group' => '', 'code' => 'upload', 'key' => 'upload_image_thumb_status', 'value' => '1', 'sort' => '0', 'detail' => '', 'store_id' => '1'],
            ['group' => '', 'code' => 'upload', 'key' => 'upload_watermark_status', 'value' => '1', 'sort' => '0', 'detail' => '', 'store_id' => '1'],
            ['group' => '', 'code' => 'upload', 'key' => 'upload_watermark_path', 'value' => 'images/watermark.png', 'sort' => '0', 'detail' => '', 'store_id' => '1'],

            ['group' => '', 'code' => 'env', 'key' => 'SITE_STATUS', 'value' => 'on', 'sort' => '0', 'detail' => 'lang::env.SITE_STATUS', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'SITE_TIMEZONE', 'value' => $this->timezone_default, 'sort' => '0', 'detail' => 'lang::env.SITE_TIMEZONE', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'SITE_LANGUAGE', 'value' => $this->language_default, 'sort' => '0', 'detail' => 'lang::env.SITE_LANGUAGE', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'SITE_CURRENCY', 'value' => 'USD', 'sort' => '0', 'detail' => 'lang::env.SITE_CURRENCY', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'APP_DEBUG', 'value' => 'off', 'sort' => '0', 'detail' => 'lang::env.APP_DEBUG', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_LOG', 'value' => 'on', 'sort' => '0', 'detail' => 'lang::env.ADMIN_LOG', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_LOG_EXP', 'value' => '', 'sort' => '0', 'detail' => 'lang::env.ADMIN_LOG_EXP', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_NAME', 'value' => 'S-Cart System', 'sort' => '0', 'detail' => 'lang::env.ADMIN_NAME', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_TITLE', 'value' => 'S-Cart System', 'sort' => '0', 'detail' => 'lang::env.ADMIN_TITLE', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_LOGO', 'value' => 'S-Cart Admin', 'sort' => '0', 'detail' => 'lang::env.ADMIN_LOGO', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'ADMIN_LOGO_MINI', 'value' => '<i class="fa fa-map-o" aria-hidden="true"></i>', 'sort' => '0', 'detail' => 'lang::env.ADMIN_LOGO_MINI', 'store_id' => '1'],
            ['group' => '', 'code' => 'env', 'key' => 'LOG_SLACK_WEBHOOK_URL', 'value' => '', 'sort' => '0', 'detail' => 'lang::env.LOG_SLACK_WEBHOOK_URL', 'store_id' => '1'],

            ['group' => '', 'code' => 'url', 'key' => 'SUFFIX_URL', 'value' => '.html', 'sort' => '0', 'detail' => 'lang::url.SUFFIX_URL', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_BRAND', 'value' => 'brand', 'sort' => '0', 'detail' => 'lang::url.PREFIX_BRAND', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_SUPPLIER', 'value' => 'supplier', 'sort' => '0', 'detail' => 'lang::url.PREFIX_SUPPLIER', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CATEGORY', 'value' => 'category', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CATEGORY', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_PRODUCT', 'value' => 'product', 'sort' => '0', 'detail' => 'lang::url.PREFIX_PRODUCT', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_SEARCH', 'value' => 'search', 'sort' => '0', 'detail' => 'lang::url.PREFIX_SEARCH', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CONTACT', 'value' => 'contact', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CONTACT', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_NEWS', 'value' => 'news', 'sort' => '0', 'detail' => 'lang::url.PREFIX_NEWS', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_MEMBER', 'value' => 'member', 'sort' => '0', 'detail' => 'lang::url.PREFIX_MEMBER', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_MEMBER_ORDER_LIST', 'value' => 'order-list', 'sort' => '0', 'detail' => 'lang::url.PREFIX_MEMBER_ORDER_LIST', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_MEMBER_CHANGE_PWD', 'value' => 'change-password', 'sort' => '0', 'detail' => 'lang::url.PREFIX_MEMBER_CHANGE_PWD', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_MEMBER_CHANGE_INFO', 'value' => 'change-info', 'sort' => '0', 'detail' => 'lang::url.PREFIX_MEMBER_CHANGE_INFO', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CMS_CATEGORY', 'value' => 'cms-category', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CMS_CATEGORY', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CMS_ENTRY', 'value' => 'entry', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CMS_ENTRY', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CART_WISHLIST', 'value' => 'wishlst', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CART_WISHLIST', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CART_COMPARE', 'value' => 'compare', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CART_COMPARE', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CART_DEFAULT', 'value' => 'cart', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CART_DEFAULT', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_CART_CHECKOUT', 'value' => 'checkout', 'sort' => '0', 'detail' => 'lang::url.PREFIX_CART_CHECKOUT', 'store_id' => '1'],
            ['group' => '', 'code' => 'url', 'key' => 'PREFIX_ORDER_SUCCESS', 'value' => 'order-success', 'sort' => '0', 'detail' => 'lang::url.PREFIX_ORDER_SUCCESS', 'store_id' => '1'],


            ['group' => '', 'code' => 'product', 'key' => 'product_brand', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.brand', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_supplier', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.supplier', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_price', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.price', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_cost', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.cost', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_promotion', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.promotion', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_stock', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.stock', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_type', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.type', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_kind', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.kind', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_virtual', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.virtual', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_attribute', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.attribute', 'store_id' => '1'],
            ['group' => '', 'code' => 'product', 'key' => 'product_available', 'value' => '1', 'sort' => '0', 'detail' => 'lang::product.config_manager.available', 'store_id' => '1'],

            ['group' => '', 'code' => 'customer', 'key' => 'customer_lastname', 'value' => '1', 'sort' => '0', 'detail' => 'lang::customer.config_manager.lastname', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_address1', 'value' => '1', 'sort' => '0', 'detail' => 'lang::customer.config_manager.address1', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_address2', 'value' => '1', 'sort' => '0', 'detail' => 'lang::customer.config_manager.address2', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_company', 'value' => '0', 'sort' => '0', 'detail' => 'lang::customer.config_manager.company', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_postcode', 'value' => '0', 'sort' => '0', 'detail' => 'lang::customer.config_manager.postcode', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_country', 'value' => '1', 'sort' => '0', 'detail' => 'lang::customer.config_manager.country', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_group', 'value' => '0', 'sort' => '0', 'detail' => 'lang::customer.config_manager.group', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_birthday', 'value' => '0', 'sort' => '0', 'detail' => 'lang::customer.config_manager.birthday', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_sex', 'value' => '0', 'sort' => '0', 'detail' => 'lang::customer.config_manager.sex', 'store_id' => '1'],
            ['group' => '', 'code' => 'customer', 'key' => 'customer_phone', 'value' => '1', 'sort' => '1', 'detail' => 'lang::customer.config_manager.phone', 'store_id' => '1'],


        ]);
        DB::table(SC_DB_PREFIX.'admin_store')->insert(
            ['logo' => '/data/logo/scart-mid.png', 'site_status' => 1, 'template' => 'default', 'phone' => '0123456789', 'long_phone' => 'Support: 0987654321', 'email' => 'admin-demo@s-cart.org', 'time_active' => '', 'address' => '123st - abc - xyz']
        );

        DB::table(SC_DB_PREFIX.'admin_store_description')->insert([
            ['config_id' => '1', 'lang' => 'en', 'title' => 'Demo S-cart : Free Laravel eCommerce for Business', 'description' => 'Free website shopping cart for business', 'keyword' => '', 'maintain_content' => '<center><img src="/images/maintenance.png" />
<h3><span style="color:#e74c3c;"><strong>Sorry! We are currently doing site maintenance!</strong></span></h3>
</center>'],
            ['config_id' => '1', 'lang' => 'vi', 'title' => 'Demo S-cart: Mã nguồn website thương mại điện tử miễn phí cho doanh nghiệp', 'description' => 'Laravel shopping cart for business', 'keyword' => '', 'maintain_content' => '<center><img src="/images/maintenance.png" />
<h3><span style="color:#e74c3c;"><strong>Sorry! We are currently doing site maintenance!</strong></span></h3>
</center>'],
        ]);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//
    }
}
