<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Silber\Bouncer\Database\Role;
use Silber\Bouncer\Database\Ability;
use Modules\User\Entities\User;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('auth::roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $abilities = Ability::all();
        $levels = config('auth.level');
        return view('auth::roles.create', compact('abilities', 'levels'));
    }

    public function addUser($id)
    {
        $listRole = DB::table('assigned_roles')
                    ->where('role_id', $id)
                    ->pluck('entity_id')
                    ->toArray();
        $listData = User::all()
                   ->whereNotIn('id', $listRole);
        return view('auth::roles.adduser', compact('listData', 'id'));
    }

    public function storeUser($id, Request $request)
    {
        $role = Role::findOrFail($id);
        foreach ($request->userId as $key => $data) {
            Bouncer::assign($role->name)->to($data);
        }
        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Role::firstOrCreate($request->only([
            'name',
            'title',
            'level'
        ]));
        Bouncer::allow($request->name)->to($request->permission);
        return redirect()->route('roles.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($name)
    {
        $role = Role::where('name', $name)->firstOrFail();
        $id = $role->id;
        $listData = DB::table('assigned_roles')
                    ->where('role_id', $id)
                    ->join('users', 'assigned_roles.entity_id', 'users.id')
                    ->select('users.*')
                    ->get();
        return view('auth::roles.show', compact('listData', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $data = Role::findOrFail($id);
        $abilities = Ability::all();
        $plucks = $data->getAbilities()
                       ->pluck('id')
                       ->toArray();
        $levels = config('auth.level');
        return view('auth::roles.edit', compact('data', 'abilities', 'plucks', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update($id, Request $request)
    {
        $role = Role::findOrFail($id);
        $update = $role->update($request->only([
            'name',
            'title',
            'level'
        ]));
        $unAbilities = Bouncer::disallow($role->name)->to($role->getAbilities());
        $giveAbilities = Bouncer::allow($role->name)->to($request->permission);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id)->delete();
        if (!$role) {
            return abort(404);
        }
        return redirect()->back();
    }

    public function destroyUser($id, Request $request)
    {
        $role = Role::findOrFail($id);
        Bouncer::retract($role->name)->from($request->userId);
        return redirect()->back();
    }
}
