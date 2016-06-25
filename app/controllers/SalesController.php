<?php

class SalesController extends \BaseController {

	/**
	 * GET /sales
	 * Display a listing of sales
	 *
	 * @return Response
	 */
	public function index()
	{
		$sales = Sale::all();

		return View::make('sales.index', compact('sales'));
	}

	/**
	 * GET /sales/create
	 * Show the form for creating a new sale
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sales.create');
	}

	/**
	 * POST /sales
	 * Store a newly created sale in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Sale::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Sale::create($data);

		return Redirect::route('sales.index');
	}

	/**
	 * GET /sales/{sale}
	 * Display the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sale = Sale::findOrFail($id);

		return View::make('sales.show', compact('sale'));
	}

	/**
	 * GET /sales/{sale}/edit
	 * Show the form for editing the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sale = Sale::find($id);

		return View::make('sales.edit', compact('sale'));
	}

	/**
	 * PUT /sales/{sale}
	 * Update the specified sale in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sale = Sale::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Sale::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$sale->update($data);

		return Redirect::route('sales.index');
	}

	/**
	 * DELETE /sales/{sale}
	 * Remove the specified sale from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Sale::destroy($id);

		return Redirect::route('sales.index');
	}

}