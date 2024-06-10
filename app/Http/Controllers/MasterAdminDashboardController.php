<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MasterAdminDashboardController extends Controller
{
    public function masterDashboard()
    {
        return view ('admin.master_admin_dashboard');
    }

    public function allUsers(){
        $userTypes = ['user', 'rider', 'admin'];

        $registeredUsers = User::whereIn('usertype',  $userTypes)->get();
        return view('admin.all_users', compact('registeredUsers'));
    }

    // public function convertUsers(){
    //     $userTypes = ['user', 'rider', 'admin'];

    //     $convertUsers = User::where('usertype',  $userTypes)->latest()->get();
    //     return view('admin.all_users', compact('convertUsers'));
    // }

    public function deleteUsers($id)
    {
          $user = User::find($id);
          $user->delete();
          return redirect()->route('all.users');
    }

    public function restrictUsers($id)
    {
          $user = User::find($id);
          $user->status ='restricted';
          $user->save();
          return redirect()->route('all.users');
    }

    public function switchRider($id)
    {
        $swRider = User::find($id);

        if (!$swRider) {
            return redirect()->route('home')->with('error', 'User record not found.');
        }

        if ($swRider->usertype == 'user') {

            $swRider->usertype = 'rider';
            $swRider->save();

        }


        return redirect()->route('all.users')->with('flash_message', 'User Successfully Switched to a Rider..')
        ->with('flash_type', 'alert-success');
    }


    public function switchAdmin($id)
    {
        $swAdmin = User::find($id);

        if (!$swAdmin) {
            return redirect()->route('home')->with('error', 'User record not found.');
        }

        if ($swAdmin->usertype == 'user' || ($swAdmin->usertype == 'rider')) {

            $swAdmin->usertype = 'admin';
            $swAdmin->save();

        }


        return redirect()->route('all.users')->with('flash_message', 'User Successfully Switched to an Admin..')
        ->with('flash_type', 'alert-success');
    }


}
