<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


         $validated = $request->validate([
             'player_id' => 'required',
             'dia' => 'required',
             'hora' => 'required',
             'dado1'=> 'required',
             'dado2'=> 'required',
             'tirada'=> 'required',
             'resultado'=> 'required',

         ]);



         //Request is valid, create new product
           Game::create($request->all());
         //Product created, return success response
         return response()->json([
             'success' => true,
             'message' => 'Game created successfully',

         ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
    public function rankingWin(){
        $rankings =Game::all()->where('tirada',7);
        foreach($rankings as $ranking){
         echo ($ranking);
        }

    }
    public function rankingLost(){
        $rankings =Game::all()->where('tirada','!=',7);
        foreach($rankings as $ranking){
         echo ($ranking);
        }

    }
    public function playerRankingWin($id){
        $games = Game::all()->where('player_id',$id)->count();
        $wins = Game::all()->where('player_id',$id)->where('tirada',7)->count();
        echo 'Tu eficacia es del  '.$wins*100/$games. ' '.'%';

    }
}
