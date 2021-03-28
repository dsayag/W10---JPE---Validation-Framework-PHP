<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Designer;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home(){
        return view('home');
    }

    public function listCharacters(){
        $characters = Character::all();
        return view('listCharacters', ['characters' => $characters]);
    }

    public function character($id)
    {
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }

    public function addCharacter(){
        $designers = Designer::all()->sortBy('name');
        return view('addCharacter', ['$designers' => $designers]);
    }

    public function editCharacter($id)
    {
        $character = Character::findOrFail($id);
        return view('editCharacter', ['character' => $character]);
    }

    public function listDesigners(){
        $designers = Designer::all();
        return view('listDesigners', ['designers' => $designers]);
    }

    public function designer($id)
    {
        $designer = Designer::findOrFail($id);
        return view('designer', ['designer' => $designer]);
    }

    public function addDesigner(){
        $characters = Character::all()->sortBy('name');
        return view('addDesigner', ['$characters' => $characters]);
    }

    public function editDesigner($id)
    {
        $designer = Designer::findOrFail($id);
        return view('editDesigner', ['designer' => $designer]);
    }
}
