<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Hien thi giao dien dang nhap
     */
    public function login()
    {
        return view('admin::login');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if (Auth::attempt($request->only([
            'email',
            'password'
        ]))) {
            return redirect()->intended('admin');
        }

        return redirect()->back();
    }

}
