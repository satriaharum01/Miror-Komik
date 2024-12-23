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
use Yajra\DataTables\Facades\DataTables;
//MODELS
use App\Models\Komik;

class FrontMainController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $this->data['title'] = 'Baca Komik Miror';
        $this->data['komik'] = $this->getKomik();

        return view('front.index', $this->data);
    }

    public function getKomik()
    {

        $komik = Komik::orderBy('title')->paginate(10);

        return $komik;
    }
}
