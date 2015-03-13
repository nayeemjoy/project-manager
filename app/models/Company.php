<?php

	class Company extends Eloquent{

		public $timestamps = false;
		protected $table = 'company';
		public static $rules = [
			'company_name' => 'required',
			'company_detail' => 'required'
		];

	}
