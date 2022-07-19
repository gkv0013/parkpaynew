<?php

namespace App\Http\Controllers\Frontend;
use App\Models\SlotDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(){
        return view('frontend.Home');
    }
    public function UserLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function UserSlotBrand(){
        return view('frontend.slot_brand');
    }
    public function Slots($id){
        $slots=SlotDetails::findOrFail($id);
        return view('frontend.slots',compact('slots'));
    }   

}
