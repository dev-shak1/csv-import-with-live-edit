<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\DataCard;

class DatatablesController extends Controller
{

    public function anyData(Request $request)
    {   
        $data   = new DataCard;
        $filter = $data->newQuery();

        if(!empty($request->name)){
            $filter->where('name', 'LIKE', $request->name.'%');
        }

        if(!empty($request->type)){
            $filter->where('type', 'LIKE', $request->type.'%');
        }

        if(!empty($request->cost)){
            $filter->where('cost', 'LIKE', $request->cost.'%');
        }

        if(!empty($request->color)){
            $filter->where('color', $request->color);
        }

        if(!empty($request->attack)){
            $filter->where('attack', $request->attack);
        }

        if(!empty($request->defense)){
            $filter->where('defense', $request->defense);
        }

        $filter->get();

        return Datatables::of($filter)->make(true);
    }
    
}
