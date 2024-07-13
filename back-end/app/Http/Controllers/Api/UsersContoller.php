<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class UsersContoller extends Controller
{


    public  function GetUsers(){

        return Response::json([
            "users"=>User::all()
        ]);
    }

    public function AuthAdmin(){
        $admin=Auth::guard('admin')->user();
        $time = $admin->tokens()->latest()->first()->expires_at;
        $time=  Carbon::parse($time);
        if ( Carbon::now('Europe/Berlin')->greaterThan($time)) {

            return response()->json(['message' => 'Token has expired'], 401);
        }

        return Response::json([
            "admin"=>Auth::guard('admin')->user(),
            "time"=>$time
        ]);
    }

    // Delete User
    public function destroy($id)
    {
        return  User::findOrFail($id)->delete();
    }
}
