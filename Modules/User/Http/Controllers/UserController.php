<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Bouncer;
use Modules\User\Entities\User;
use Auth;
use Modules\User\Entities\Services\Validation as ValidationService;
use Modules\User\Entities\Services\Authentication as AuthService;
use Modules\User\Entities\Services\Insertion as InsertService;

class UserController extends Controller
{
    /**
     * Kiem tra fields nhap
     *
     * @var ValidationService
     */
    protected $validation;

    /**
     * Kiem tra xac thuc dang nhap
     *
     * @var AuthService
     */
    protected $auth;

    /**
     * Tao recond database
     *
     * @var InsertService
     */
    protected $insert;
    
    /**
     * Khoi tao class
     *
     * @param ValidationService $validation
     * @param AuthService $auth
     * @param InsertService $insert
     * @return void
     */
    public function __construct(ValidationService $validation, AuthService $auth, InsertService $insert)
    {
        $this->validation = $validation;
        $this->auth = $auth;
        $this->insert = $insert;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $roles = Auth::user();
        $listData = User::all();
        return view('user::index', compact('listData', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validator
        $validation = $this->validation->registerUser($request);
        // Create user
        $this->insert->createUser($request);

        return redirect('/admin/users/');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($email)
    {
        $data = User::where('email', $email)->first();
        return view('user::edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update($email, Request $request)
    {
        $data = $this->validation->updateUser($request);
        $this->insert->updateUser($email, $data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
