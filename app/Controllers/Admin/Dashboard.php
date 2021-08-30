<?php

namespace App\Controllers\Admin; 
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		return 'This is admin page - <a href=\''.site_url('logout').'\'>Logout</a>';
	}
}