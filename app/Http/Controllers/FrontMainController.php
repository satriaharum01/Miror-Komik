<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class FrontMainController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $this->data['title'] = 'Baca Komik Miror';

        return view('front.index', $this->data);
    }
}
