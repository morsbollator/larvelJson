<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jso;
class tes extends Controller
{
    public function send(Request $req){
        $test = jso::create($req->except('jsontest'));
        $hamza = jso::find($test->id)->update(['jsontest'=>$req->jsontest]);
        $ahmed = jso::find($test->id);
        return response()->json($ahmed);
    }
}
