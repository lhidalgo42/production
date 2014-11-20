<?php

class CodeController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function create()
	{
		Input::get('code');
	}



}
