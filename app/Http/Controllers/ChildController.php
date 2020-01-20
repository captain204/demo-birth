<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        return view('child.step_one');
    }
    public function registerStep2(Request $request)
    {
        return view('child.step_two');
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
       
        $id = DB::table('children')->insertGetId($data);
        $request->session()->put('id',$id);
        return redirect('/register-step2');
    }
    public function postregisterStep2(Request $request)
    {
        $id = $request->session()->get('id');
        #dd($id);
        $data = $request->validate([
            'f_firstname' =>'required',
            'f_surname' => 'required',
            'f_national_id' =>'required|numeric',
            'm_maiden' =>'required',
            'm_firstname' => 'required',
            'm_lastname' => 'required',
            'm_national_id' => 'required|numeric',
            'nationality' => 'required',
            'address' => 'required',
        ]);

        #dd($data);
        #echo $id;
        #DB::table('users')->where('id', 1) ->update(['votes' => 1]);
         DB::table('children')->where('id', $id)
                    ->update(['f_firstname'=>$data['f_firstname'],'f_surname'=>$data['f_surname'],
                    'f_national_id'=>$data['f_national_id'],
                    'm_maiden'=>$data['m_maiden'],
                    'm_firstname'=>$data['m_firstname'],
                    'm_lastname'=>$data['m_lastname'],
                    'm_national_id'=>$data['m_national_id'],
                    'nationality'=>$data['nationality'],
                    'address'=>$data['address'],]);
        return redirect('/')->with('success',"Thank you for registering your child");
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
