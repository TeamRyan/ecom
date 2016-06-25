<?php

class Cart extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 * belongsTo user on User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
	
	/*
	 * belongsToMany products on Product
	 */
	public function products()
	{
		return $this->belongsToMany('Product');
	}
	
	
}