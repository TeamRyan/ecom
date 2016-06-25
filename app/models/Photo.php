<?php

class Photo extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 * belongsTo product on Product
	 */
	public function product()
	{
		return $this->belongsTo('Product');
	}
	
	

}