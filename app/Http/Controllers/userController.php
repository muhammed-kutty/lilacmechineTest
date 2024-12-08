<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $req)
    {
        $query = $req->input('query');
        
        $departIds = Department::where('name', 'like', '%' . $query . '%')->pluck('id');
        $designationId = Designation::where('name', 'like', '%' . $query . '%')->pluck('id');
        $saerchUserID = User::where('name', 'like', '%' . $query . '%')->pluck('id');

        $users = User::with(['department:id,name', 'designation:id,name'])
            ->whereIn('id',$saerchUserID)
            ->orWhereIn('departmenet', $departIds)
            ->orWhereIn('designation', $designationId)
            ->get();
        
     
        return response()->json(['data' => $users]);
    }
}
