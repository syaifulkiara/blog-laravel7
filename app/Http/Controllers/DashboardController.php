<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\FormTabel;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

	public function index()
	{
		$data = User::paginate(10);
    	return view('dashboard', compact('data'));
	}
}
