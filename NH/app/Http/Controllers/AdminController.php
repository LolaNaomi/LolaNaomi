<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    //  Rendering a view 
    public function addview() {
        return view('admin.add_doctor');
    }


    
    //  Handles a request
    public function upload(Request $request)
    {
        $doctor = new Doctor;
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }
    
        $doctor->name = $request->input('name');
        $doctor->phone = $request->input('phone');
        $doctor->room = $request->input('room');
        $doctor->department = $request->input('department');
    
        $doctor->save();
    
        return redirect()->back()->with('message', 'Doctor added successfully!');
    }
    
    public function showappointment () 
    {
        $data=appointment::all();
        
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id) 
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();
    }

    public function cancelled($id) 
    {
        $data=appointment::find($id);
        $data->status='Cancelled';
        $data->save();

        return redirect()->back();
    }

    public function showdoctor() 
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id) 
    {
        $data = doctor::find($id);
        $data -> delete('data');
        return redirect()->back();
    }

    public function updatedoctor($id) 
    {
        $data = doctor::find($id);
        
        // Check if the doctor data exists
        if ($data) {
            return view('admin.update_doctor', compact('data'));
        }
    
        // If the doctor data doesn't exist, handle the error
        return redirect()->back()->with('message', 'Doctor not found!');
    }
    

    public function editdoctor(Request $request, $id) 
    {
        $doctor = Doctor::find($id);
    
        if ($doctor) {
            $doctor->name = $request->input('name');
            $doctor->phone = $request->input('phone');
            $doctor->department = $request->input('department');
            $doctor->room = $request->input('room');
    
            $image = $request->file('file');
    
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('C:/xampp/htdocs/NH/public/doctorimage', $imagename);
                $doctor->image = $imagename;
            }
    
            $doctor->save();
    
            return redirect()->back()->with('message', 'Doctor details updated successfully!');
        }
    
        return redirect()->back()->with('message', 'Doctor not found!');
    }
    

}
