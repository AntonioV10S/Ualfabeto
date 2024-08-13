<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Psy\Readline\Userland;

class UserController extends Controller
{
    public function registrar(Request $request)
    {

        $user = new UserModel();
        $user->name = $request->name;
        $user->save();
        return response()->json([
            'message' => 'Usuario agregado exitosamente.'
        ]);

    }
    // Método para mostrar usuarios ordenados alfabéticamente
    public function index()
    {
        $users = UserModel::orderBy('name', 'asc')->get(); // Asegúrate de que el campo 'name' es el correcto
        return response()->json($users);
    }

    // Método para mostrar usuarios cuyos nombres comienzan con 'T'
    public function indexStartingWithT()
    {
        $users = UserModel::where('name', 'like', 'T%')
                     ->orderBy('name', 'asc')
                     ->get();
                     return response()->json($users);
    }
}
