<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = false;
	public static $rules = [
			'username' => 'required|alpha_num|unique:users,username',
			'password' => 'required|max:15|min:6|confirmed',
			'password_confirmation' => 'required',
			'email' => 'required|email'

	];
	public static $rules_for_login = [
			'username' => 'required',
			'password' => 'required'
	];
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	 

}
