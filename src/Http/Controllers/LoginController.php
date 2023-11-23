<?php

namespace Naranjatec\Login\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

	public function index()
	{
		return view('login::login');
	}

	public function login(Request $request)
	{
		//TODO: Other login methods

		$request->validate([
			'email' => 'required|email',
			'password' => 'required'
		]);

		return (Auth()->attempt($request->only('email', 'password'))) ?
			redirect(route('dashboard'))->with('message-success', __("messages.welcome-back")) :
			redirect()->back()->withInput()->with('message-error', __("messages.invalid-login"));
	}

	public function logout()
	{
		Auth()->logout();
		return redirect(route('login'))->with('message-success', 'Saliste');
	}
}
