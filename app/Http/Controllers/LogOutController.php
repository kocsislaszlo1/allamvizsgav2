<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Auth;
class LogOutController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/home');
      }
}
