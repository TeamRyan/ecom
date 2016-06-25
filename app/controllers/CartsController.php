<?php

class CartsController extends \BaseController {

	/**
	 * GET /carts
	 * Display a listing of carts
	 *
	 * @return Response
	 */
	public function index()
	{
		$carts = Cart::all();

		return View::make('carts.index', compact('carts'));
	}

	/**
	 * GET /carts/create
	 * Show the form for creating a new cart
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('carts.create');
	}

	/**
	 * POST /carts
	 * Store a newly created cart in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Cart::create($data);

		return Redirect::route('carts.index');
	}

	/**
	 * GET /carts/{cart}
	 * Display the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cart = Cart::findOrFail($id);

		return View::make('carts.show', compact('cart'));
	}

	/**
	 * GET /carts/{cart}/edit
	 * Show the form for editing the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cart = Cart::find($id);

		return View::make('carts.edit', compact('cart'));
	}

	/**
	 * PUT /carts/{cart}
	 * Update the specified cart in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cart = Cart::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cart->update($data);

		return Redirect::route('carts.index');
	}

	/**
	 * DELETE /carts/{cart}
	 * Remove the specified cart from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cart::destroy($id);

		return Redirect::route('carts.index');
	}

}