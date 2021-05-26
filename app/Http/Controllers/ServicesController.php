<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    function ServiceIndex()
    {
        return view('Services');
    }

    function getServiceData()
    {
        $result = json_encode(ServicesModel::all());
        return $result;
    }

    function ServiceDelete(Request $request)
    {
    	$id = $request->input('id');
    	$result = ServicesModel::where('id', '=', $id)->delete();
    	if ($result == true) {
    		$notification=array(
                'messege' + '=>' + 'Data Delete Successfull.',
                'alert-type' + '=>' + 'success'
            );
    	} else {
    		return 0;
    	}
    }
}
