<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlotDetails;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class SlotController extends Controller
{
    public function SlotPlace()
    {
        $slotplace = SlotDetails::latest()->get();
        return view('backend.slotbrand.slot_brand_view', compact('slotplace'));
    }


    public function BrandStore(Request $request)
    {
        $request->validate(['brandname' => 'required', 'address' => 'required', 'slot_numbers' => 'required', 'brand_image' => 'required']);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(300, 200)->save('upload/brand/' . $name_gen);
        $save_url = 'upload/brand/' . $name_gen;
        SlotDetails::insert([
            'brandname' => $request->brandname,
            'address' => $request->address,
            'slot_numbers' => $request->slot_numbers,
            'brand_thumbnail' => $save_url,
            'selling_price' => $request->selling_price,
        ]);
        $notification = array('message' => 'Inserted Sucessfully', 'alert-type' => 'sucess');
        return redirect()->back()->with($notification);
    }
    public function BrandEdit($id)
    {
        $brand = SlotDetails::findOrFail($id);
        return view('backend.slotbrand.slot_brand_edit', compact('brand'));
    }
    public function BrandUpdate(Request $request)
    {

        $brand_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('brand_image')) {
            Storage::delete("$old_img");
        
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(300, 200)->save('upload/brand/' . $name_gen);
            $save_url = 'upload/brand/' . $name_gen;
            SlotDetails::findOrFail($brand_id)->update([
                'brandname' => $request->brandname,
                'address' => $request->address,
                'slot_numbers' => $request->slot_numbers,
                'brand_thumbnail' => $save_url,
                'selling_price' => $request->selling_price,
            ]);
            $notification = array('message' => 'Inserted Sucessfully', 'alert-type' => 'info');
            return redirect()->route('all.slotplace')->with($notification);
        } else {
            SlotDetails::findOrFail($brand_id)->update([
                'brandname' => $request->brandname,
                'address' => $request->address,
                'slot_numbers' => $request->slot_numbers,

                'selling_price' => $request->selling_price,
            ]);
            $notification = array('message' => 'Inserted Sucessfully', 'alert-type' => 'info');
            return redirect()->route('all.slotplace')->with($notification);
        }
    }
    public function BrandDelete($id)
    {

        $brand=SlotDetails::findOrFail($id);
        $img=$brand->brand_image;
        Storage::delete("$img");
        SlotDetails::findOrFail($id)->delete();
        $notification = array('message' => 'Deleted Sucessfully', 'alert-type' => 'info');
        return redirect()->back()->with($notification);
    }
}
