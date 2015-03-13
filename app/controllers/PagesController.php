<?php

class PagesController extends \BaseController {

	public function admin(){
		$user = Auth::user();
		$companies = Company::where('username',$user->username)->get();
		//return $companies;
		return View::make('admin_home')->with('companies', $companies);
	}
	public function createCompany(){
		$user = Auth::user();
		$data = Input::all();
		$validator = Validator::make($data,Company::$rules);
		if($validator->fails()){
			
			return Redirect::to('/adminpage?error=1')->withErrors($validator);
		}
		else
		{
			$company = new Company;
			$company->username = $user->username;
			$company->company_name = $data['company_name'];
			$company->details = $data['company_detail'];
			if($company->save()){
				return Redirect::to('/adminpage');
			}
		}
	}

}
