<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\AuthRequest;

class AuthController extends Controller
{

    public function register(AuthRequest $request)
    {
        dd('indexd');
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
