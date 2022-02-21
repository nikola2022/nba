<?php

namespace App\Http\Controllers;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class teams extends Controller
{
   public function index()
   {

    $teams = team::all();

    return view('teams', compact('teams'));

   }

   public function show($id)
   {

    $team = team::findOrFail($id);

    return view('team', compact('team')); 

   }
}
