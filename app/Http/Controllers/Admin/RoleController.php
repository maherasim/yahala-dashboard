<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Models\Permission;
use MongoDB\BSON\ObjectId;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view("content.settings.roles.index", compact("roles", "permissions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        $validated = $request->validated();
        $role = Role::create($validated);
        try {
            $role->syncPermissions($validated['permissions']?? []);
        } catch (\Throwable $e) {
                return back()->with("success", "Role successfully created.");
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $validated = $request->validated();
        if (array_key_exists('permissions', $validated)) {
            $permissions = $validated['permissions'];
        } else {
            $permissions = [];
        }

        $role = Role::find($id);
        if ($role->name === 'Super Admin')
            abort(403);
        $role->name = $validated['name'];
        $role->permissions = $permissions;
        $role->save();

        session(['permissions' => $permissions]);

        return back()->with("success", "Role successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objectId = new \MongoDB\BSON\ObjectId($id);
        Role::where('_id', $objectId)->delete();
        return back()->with("success", "Role successfully deleted.");
    }
}
