<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataCardsImport;
use App\Models\DataCard;
use DB;

class CardGameController extends Controller
{
    public function index(){

        return view('card.index');

    }

    public function create(){

        return view('card.create');

    }

    public function store(Request $request){

        Excel::import(new DataCardsImport,request()->file('file'));
        return redirect()->route('card.index');

    }

    public function api(Request $request){

        $id     = $request->id;
        $name   = $request->name;
        $value  = $request->val;

        $data =  DataCard::where('id', $_POST['id'])->first();
        $data->$name = $value;
        $data->save();

        return 'Changes has been made successful';

    }

    public function truncate(){

        DB::table('data_cards')->truncate();
        return redirect()->route('card.index');

    }


}
