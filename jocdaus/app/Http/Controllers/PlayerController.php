<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;


use Symfony\Component\HttpFoundation\Response;


class PlayerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $games = Game::all();
        return response()->json(compact('players','games'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validate data
        $data = $request->only('user_id', 'alias', 'fecha_alta');
        $validated = $request->validate([
            'user_id' => 'required',
            'alias' => 'required',
            'fecha_alta' => 'required',

        ]);



        //Request is valid, create new product
          Player::create($request->all());
        //Product created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Player created successfully',

        ], Response::HTTP_OK);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return response()->json($player->game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $data = $request->only('user_id', 'alias', 'fecha_alta');
        $validated = $request->validate([
            'user_id' => 'required',
            'alias' => 'required',
            'fecha_alta' => 'required',

        ]);



        //Request is valid, create new product
          $player = $player->update($request->all());
        //Product created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Player updated successfully',

        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
