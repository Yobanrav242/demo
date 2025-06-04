<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    // create data
    public function store(Request $request){
        // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^[0-9]{1,10}$/',
            'address'=>'',
            'course'=>'required',
            'gender'=>'required' ,          
        ],[
            'name.required'=>'Please Fill out Name Field',
            'email.required'=>'Enter a Valid Email',
            'phone.required'=>'Enter a valid Phone number'
        ]);
        $data=new Form();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->course=$request->course;
        $data->gender=$request->gender;
        $data->save();
        // to redirect route to view form
        return redirect()->route('form.view');

    }
    
    // view data
    public function view(){
        $views=Form::all();
        return view('viewForm',compact('views'));
    }

    // delete data
    public function delete($id){
        $view=Form::findOrFail($id);
        $view->delete();
        // redirect to same file
        return redirect()->back();
    }

    // edit form
    public function edit($id){
        $view=Form::findOrFail($id);
        //redirect to editForm
        return view('editForm',compact('view')); 
    }

    //updte form
    public function update(Request $request,$id){
        $data=Form::findOrFail($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->course=$request->course;
        $data->gender=$request->gender;
        $data->update();
        // redirect to viewForm
        return redirect()->route('form.view'); 
    }
}
