<?php

class OrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $code = Input::get('code');

		$data = array("order" => array('id' => '7640152110092','name' => 'orden para pilar con base'),
                      "products" => array("base1","pilar1","cosa 1"),
                      "result" => array("pilar con base1"));
        if($code == $data['order']['id'])
        {
            return $data;
        }
        else{
            $data = array("order" => array('id' => '7640152110092','name' => 'Orden No Valida'),
                "products" => array("No Valido"),
                "result" => array("No valido"));
            return $data;
        }


	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
