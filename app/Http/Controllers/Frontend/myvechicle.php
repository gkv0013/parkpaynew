<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\my_vehicle;
use Illuminate\Support\Facades\Auth;
use Exception;

class myvechicle extends Controller
{

    public function Vechicle()
    {

    
        //$vechicle = my_vehicle::findOrFail(Auth::user()->id)->get();
        $vechicle = my_vehicle::latest()->get();


        return view('frontend.my_vehicle', compact('vechicle'));
    }


    public function vechicleSave(Request $request)
    {
        $request->validate(['vname' => 'required', 'vnumber' => 'required', 'rcnumber' => 'required']);

        my_vehicle::insert([
            'user_Id' => Auth::user()->id,
            'vehicle_name' => $request->vname,
            'vehicle_number' => $request->vnumber,
            'RC_number' => $request->rcnumber,
        ]);
        $notification = array('message' => 'Inserted Sucessfully', 'alert-type' => 'sucess');
        return redirect()->back()->with($notification);
    }
    public function vechicleDelete($id)
    {
        my_vehicle::findOrFail($id)->delete();
        $notification = array('message' => 'Deleted Sucessfully', 'alert-type' => 'info');
        return redirect()->back()->with($notification);
    }
}
