<?php

namespace App\Http\Controllers;

use App\Models\User;// User models
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request; //Http Request
use Illuminate\Support\Facades\DB; //useing DB:: Raw Query

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return ($user);
    }
    public function uploadImage(ProfileUpdateRequest $request)
    {
        User::uploadAvatar($request->image,$request->name,$request->email); //goto the User model then validit
        return redirect()->back()->with('success','Profile Details uploaded.'); //succes message
    } 

    
}
