<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Designer;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class ActionController extends Controller
{
    public function addCharacter(Request $request){
        //dd($request);
        $character = new Character;
        $character->name = $request->name;
        $character->creation_date = $request->creation_date;
        $character->comic = $request->comic;
        $character->designer = $request->designer;
        $character->save();
        return redirect('/listCharacters');
    }
    
    public function deleteCharacter(Request $request){
        $character = Character::find($request->id);
        $character->delete();
        return redirect('/listCharacters');
    }

    public function editCharacter (Request $request){
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->creation_date = $request->creation_date;
        $character->comic = $request->comic;
        $character->designer = $request->designer;
        $character->save();
        return redirect('/listCharacters');
    }

    public function addDesigner(Request $request){
        //dd($request);
        $designer = new Designer;
        $designer->name = $request->name;
        $designer->birth_date = $request->birth_date;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/listDesigners');
    }
    
    public function deleteDesigner(Request $request){
        $designer = Designer::find($request->id);
        $designer->delete();
        return redirect('/listDesigners');
    }

    public function editDesigner (Request $request){
        $designer = Designer::findOrFail($request->id);
        $designer->name = $request->name;
        $designer->birth_date = $request->birth_date;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/listDesigners');
    }
}