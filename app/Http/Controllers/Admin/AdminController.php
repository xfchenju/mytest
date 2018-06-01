<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function menu() {
    	$menu[0] = Array(
    		'title' => '用户管理',
    		'href' => 'http://mytest.local:8080/admin/users',
    		'pid' => 0,
    		'id' => 1,
    		'children' => Array(
    			'0' => Array(
    				'title' => '用户列表',
    				'href' => 'http://mytest.local:8080/admin/users/list',
    				'pid' => 1,
    				'id' => 2
    			)
    		)
    	)
    }
}
