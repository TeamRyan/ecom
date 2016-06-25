<?php

class Product extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 * belongsToMany sales on Sale
	 */
	public function sales()
	{
		return $this->belongsToMany('Sale');
	}
	
	/*
	 * belongsToMany carts on Cart
	 */
	public function carts()
	{
		return $this->belongsToMany('Cart');
	}
	
	/*
	 * hasMany photos on Photo
	 */
	public function photos()
	{
		return $this->hasMany('Photo');
	}
	
	

}