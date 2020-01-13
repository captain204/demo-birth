<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $child = Child::paginate(10);
        return view('child.index')->with('child',$child);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function registerStep1()
    {
        return view('child\step_one');
    }
    public function registerStep2()
    {
        $child = $request->session()->get('child');
        return view('child\step_two',compact('child',$child));
    }
   
    public function postregisterStep1(Request $request)
    {      
        $data = $request->validate([
            'date_birth'=>'required',
            'place_birth'=>'required',
            'child_firstname'=>'required',
            'child_middlename'=>'required',
            'child_lastname'=>'required',
            'child_weight' =>'required|numeric',
            'eye_color' => 'required',
            'sex'=> 'required',
        ]);
        if(empty($request->session()->get('child'))){

            $child = new Child();
            $child->fill($data);
            $request->session()->put('child',$child);
        }else{
            $child = $request->session()->get('child');
            $child->fill($data);
            $request->session()->put('child',$child);
        }
        return redirect('/child/register-step2');
    }
    public function postregisterStep2()
    {
        $child = $request->session()->get('child');
    }
   


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function show(Child $child)
    {
       
        return view('child.show')->with('child',$child);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function edit(child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(Child $child)
    {
        
        $child->delete();
        return redirect('/child');


    }
}
