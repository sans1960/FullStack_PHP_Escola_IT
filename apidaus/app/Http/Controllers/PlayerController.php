<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Http\Resources\PlayerResource;

class PlayerController extends Controller
{
   public function store(Request $request){
    $this->validate($request, [
        'alias' => 'required',
        'fecha_alta' => 'required',
        'user_id' => 'required',
    ]);
    $player = new Player();
    $player->user_id = $request->user()->id;
    $player->alias = $request->alias;
    $player->fecha_alta = $request->fecha_alta;

    $player->save();

    return new PlayerResource($player);
   }
   public function show(Player $player)
   {
       return response(['player'=> new PlayerResource($player->game)]);
   }
   public function destroy(Request $request,Player $player)
   {
     if($request->user()->id != $player->user_id){
       return response()->json(['error' => 'You can only delete your own player.'], 403);
     }
       $player ->delete();
       return response()->json(null,204);
   }
}
