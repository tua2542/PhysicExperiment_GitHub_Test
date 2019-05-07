<?php

namespace App\Http\Controllers;

use App\Model\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('SignIn');
        // return Member::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        Member::create($validated);
        return redirect('/SignIn');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
        return  $member;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, Member $member)
    {
        //
        $validated = $request->validated();
        $member->update($validated);
        return $member;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
        $member->delete();
        return response('Member has deleted.',204);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/SignIn')
                ->withErrors($validator)
                ->withInput();
        }
        
        if( Auth::attempt($request->except(['_token'])) ){
            return redirect('/motion');
        }

        return redirect( '/SignIn')
            ->withErrors([
                "errors" => "Invalid email or password"
            ])
            ->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect('/motion');
    }

    public function user() {
        return Auth::user();
    }

    
}
