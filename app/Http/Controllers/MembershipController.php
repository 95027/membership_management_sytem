<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function create(){
        return view('membership.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'dob' => 'required | date',
            'country' => 'required',
            'state' => 'required',
            'district' => 'required',
            'city' => 'required',
            'address' => 'required',
            'pincode' => 'required', 
            'image' => 'required | file',
            'remarks' => 'required',
        ]);

        $userid = Auth()->user()->id;
        $name = request('name');
        $email = request('email');
        $phone = request('phone');
        $dob = request('dob');
        $country = request('country');
        $state = request('state');
        $district = request('district');
        $city = request('city');
        $address = request('address');
        $pincode = request('pincode');
        $remarks = request('remarks');
        //for image
        $file = time() . '.' . request('image')->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file);

        Membership::create([
            'userid' => $userid,
            'name' => $name,
            'email' => $email, 
            'phone' => $phone,
            'dob' => $dob,
            'country' => $country,
            'state' => $state,
            'district' => $district,
            'city' => $city,
            'address' => $address,
            'pincode' => $pincode,
            'image' => $file,
            'remarks' => $remarks,
        ]);

        return redirect()->route('home')->with('message', 'Your membership added successfully...');
    }

    public function delete($id){
        $member = Membership::find($id);

        $member->delete();

        return redirect()->route('home')->with('message', 'Your membership removed successfully...');

    }

    public function edit($id){
        $member = Membership::find($id);

        return view('membership.edit', compact('member'));
    }

    public function update(Request $request){
        $id = request('id');
        $member = Membership::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'dob' => 'required | date',
            'country' => 'required',
            'state' => 'required',
            'district' => 'required',
            'city' => 'required',
            'address' => 'required',
            'pincode' => 'required', 
            'image' => 'required | file',
            'remarks' => 'required',
        ]);

        $userid = Auth()->user()->id;
        $name = request('name');
        $email = request('email');
        $phone = request('phone');
        $dob = request('dob');
        $country = request('country');
        $state = request('state');
        $district = request('district');
        $city = request('city');
        $address = request('address');
        $pincode = request('pincode');
        $remarks = request('remarks');
        //for image
        $file = time() . '.' . request('image')->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file);

        $member->update([
            'userid' => $userid,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob,
            'country' => $country,
            'state' => $state,
            'district' => $district,
            'city' => $city,
            'address' => $address,
            'pincode' => $pincode,
            'image' => $file,
            'remarks' => $remarks,
        ]);

        return redirect()->route('home')->with('message', 'Your membership details updated successfully...');

    }
}
