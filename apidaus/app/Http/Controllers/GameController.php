<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GameResource;
use App\Models\Game;

class GameController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'player_id' => 'required',
            'dia' => 'required',
            'hora' => 'required',
            'dado1' => 'required',
            'dado2' => 'required',
            'resultado' => 'required',
        ]);
        $game = new Game();
        $game->player_id = $request->player_id;
        $game->dia = $request->dia;
        $game->hora = $request->hora;
        $game->dado1 = $request->dado1;
        $game->dado2 = $request->dado2;
        $game->resultado = $request->resultado;

        $game->save();

        return new GameResource($game);
       }
}
