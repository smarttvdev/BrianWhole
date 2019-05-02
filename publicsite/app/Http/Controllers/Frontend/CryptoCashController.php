<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

class CryptoCashController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('pages.crypto-Loans', array('user' => Auth::user()));
    }
}
