<?php

namespace App\Http\Controllers;

use App\User;
use Dotenv\Validator;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class userconfig extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
       
        return view("admin/users")->with('a',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        $validator = $data->validate([
            'uname' => 'required|string| max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pass' => 'required|min:8|same:con',
            'con' => 'required|min:8',
        
        ],);
        //
        try {
            if (Auth::check() ){
 
                User::create([
                    'name' => $data['uname'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['pass']),
                ]);
       
                User::where('email',$data['email'])->update(['role'=>$data['type'],]);
        
                    return redirect()->back();
            }else{
                return view("auth/login");
            }
            }
            catch (Throwable $e) {
             
                return view('train\failed')->with('e',$e);
            }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { $u=User::find($id);
        return view("admin/edituser")->with('a',$u);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    { $validator = $request->validate([
        'uname' => 'required|string| max:255',
       
        'pass' => 'required|min:8|same:con',
        'con' => 'required|min:8',
    
    ],);
       
        User::where('email',$request['email'])->update(['email'=>$request['email'],'name'=>$request['uname'],'role'=>$request['type'],'password'=>Hash::make($request['pass'])]);
        $user=User::all();
       
        return view("admin/users")->with('a',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        if ( User::find($id)->role=="user") {
            # code...
            User::where('id',$id)->update(['role'=>"admin"]);
        }else{
        User::where('id',$id)->update(['role'=>"user"]);
    } return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::find($id)->delete();
        return redirect()->back();
    }
}
