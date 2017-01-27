<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    /**
     * Display user's page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("memberdetails");
    }

    /**
     * Display user's edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function editmember()
    {
        return view("editmemberdetails");
    }

    /**
     * Display user's videos
     *
     * @return \Illuminate\Http\Response
     */
    public function membervideos()
    {
        return view("membervideos");
    }

    /**
     * Display upload video page
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadvideo()
    {
        return view("uploadvideo");
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
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
