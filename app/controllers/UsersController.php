<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()){
			return Redirect::to('/adminpage');
		}
		return View::make('home');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = Input::all();
		$validator = Validator::make($data,User::$rules);
		if($validator->fails()){
			
			return Redirect::to('/?error=1')->withErrors($validator);
		}
		else
		{
			$user = new User;
			$user->username = $data['username'];
			$user->password = Hash::make($data['password']);
			$user->email = $data['email'];
			if($user->save()){
				return View::make('confirm_sign_up');
			}
			else{
				return null;
			}
		}
	}

	public function login()
	{
		$data = Input::all();
		$validator = Validator::make($data,User::$rules_for_login);
		if($validator->fails()){
			return Redirect::to('/?error=2')->withErrors($validator);
		}
		else
		{
			if(Auth::attempt($data)){
				Redirect::to('/adminpage');
			}
			return Redirect::to('/');

		}
		
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}
