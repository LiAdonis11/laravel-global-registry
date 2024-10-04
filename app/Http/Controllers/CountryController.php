<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    public function create(){
        return view('countries.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'country' => 'required|string|max:255',
            'capital' => 'required|string|max:255',
            'code' => 'required|integer'
        ]);

        $newCountry = new Country();
        $newCountry->country = $data['country'];
        $newCountry->capital = $data['capital'];
        $newCountry->code = $data['code'];

        $newCountry->save();

        return redirect()->route('countries.index')->with('success', 'Country created successfully!');

    }
    public function index(){
    $countries = Country::all();
    return view('countries.index', compact('countries'));
    }
}
