<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;

class AdminController extends Controller
{
    public function show()
    {
        $admin = Admin::first();
        return view ('index',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin= Admin::first();
        return view ('layouts.pane-content',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        dd($request);
        //save data in database
        $admin = Admin::first();
        $admin ->name = $request -> name;
        $admin->email = $request -> email;
        $admin->save();

        return redirect('/')->with('message', 'UPDATE SUCCEED !');
    }

}
