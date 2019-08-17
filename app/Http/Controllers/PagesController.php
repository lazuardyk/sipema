<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function getJumlah(){
        $food = \App\Food::get();
        $jumlah = count($food);
        return $jumlah;
    }

    public function home()
    {
        $jumlah = $this->getJumlah();
        return view('index', compact('jumlah'));
    }

    public function search(Request $requests)
    {   
        $jumlah = $this->getJumlah();
        $food = \App\Food::where('nama_makanan','like','%'. $requests->search .'%')->get();
        return view('index', ['jumlah' => $jumlah, 'food' => $food]);
        // return $query;
    }
}