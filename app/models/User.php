<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	// use SoftDeletingTrait;

    // protected $dates = ['deleted_at'];
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	// protected $table = 'users';
	// protected $primaryKey = 'user_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/*
	 *	Validations Rules
	 */
	public static $rules = array(
		'name'  => 'required|min:3|max:30'
		// 'email'			=>  'required|min:3|max:250|unique:users',
		// 'user_name'		=>	'required|min:3|max:150|unique:users',
		// 'password'		=>	'required|min:5|max:50',
		// 'first_name'	=>	'min:1|max:50',
		// 'last_name'	    =>	'min:1|max:50',
		// 'zip_code'	    =>	'max:10'
	);

	// Don't forget to fill this array
	protected $fillable = [
		'name'
		// 'email',
		// 'user_name',
		// 'password',
		// 'first_name',
		// 'last_name',
		// 'zip_code'	  
	];

	/*
	 * hasMany sales on Sale
	 */
	public function sales()
	{
		return $this->hasMany('Sale');
	}
	
	/*
	 * hasMany carts on Cart
	 */
	public function carts()
	{
		return $this->hasMany('Cart');
	}
	
	

}