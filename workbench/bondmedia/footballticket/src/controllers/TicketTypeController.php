<?php

class TicketTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        try {
            $ids = Input::get('ticket_type_ids');
            if (!empty($ids)) {
                $ticketType = new TicketType();
                return $ticketType->ticketByIds(explode(',', $ids));
            }
            $types = TicketType::all();
            return $types;
        } catch( Exception $e) {
            return $e;
        }

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$name = Input::get('name');

        if( !empty($name)) {
            $ticketType = new TicketType();
            $ticketType->title = $name;
            $ticketType->save();

            return array(
                'id' => $ticketType->id,
                'ticketType' => $ticketType->title
            );
        }

        return array('error'=>'no name found');
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
