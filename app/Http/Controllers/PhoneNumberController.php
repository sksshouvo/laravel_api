<?php

namespace App\Http\Controllers;

use App\phone_number;
use App\user;
use App\passport;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $phone_number = user::with(['phone_number', 'passport'])->get();

        return view('phone_numbers', compact('phone_number'));

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
     * @param  \App\phone_number  $phone_number
     * @return \Illuminate\Http\Response
     */
    public function show(phone_number $phone_number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phone_number  $phone_number
     * @return \Illuminate\Http\Response
     */
    public function edit(phone_number $phone_number)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phone_number  $phone_number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phone_number $phone_number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phone_number  $phone_number
     * @return \Illuminate\Http\Response
     */
    public function destroy(phone_number $phone_number)
    {
        //
    }
}
