<?php

namespace App\Http\Controllers;

use App\Models\Jobapllies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user()->id;
        $apply = Jobapllies::where('id_user', $user)->get();
        return view('profile', [
            'title' => 'Profile',
            'akun' => $apply,
        ]);
    }
}
