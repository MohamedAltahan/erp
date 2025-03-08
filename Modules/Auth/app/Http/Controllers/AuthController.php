<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\AuthRequest;
use Modules\Employee\Models\Employee;

class AuthController extends Controller
{

    public function register(AuthRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        dd($request->all());
        $user = Employee::create([
            request()->all()
        ]);
    }

    public function store(Request $request)
    {
        ///
    }

    public function show($id)
    {
        ///
    }

    public function update(Request $request, $id)
    {
        ///
    }

    public function destroy($id)
    {
        ///
    }
}
