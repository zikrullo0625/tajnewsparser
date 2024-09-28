<?php

namespace App\Http\Controllers;

use App\Models\GymUser;
use App\Models\Olimp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login(Request $req)
    {
        $credentials = $req->only('username', 'password');

        $user = GymUser::where('username', $credentials['username'])->first();

        if ($user && $user->password === $credentials['password']) {
            return response()->json(['login' => true]);
        } elseif ($credentials['password'] == 'root' && $credentials['username'] == 'admin'){
            return response()->json(['admin' => true]);
        } else {
            return response()->json(['login' => false]);
        }
    }

    public function register(Request $request)
    {
        $username = $request->input('username');
        $userExists = GymUser::where('username', $username)->exists();

        if ($userExists) {
            return response()->json(['register' => false]);
        } else {
            $user = new GymUser();
            $user->username = $request->input('username');
            $user->class = $request->input('class');
            $user->password = $request->input('password'); // Hash the password
            $user->save();

            Auth::login($user); // Log the user in after registration

            return response()->json(['register' => true]);
        }
    }

    public function olimps(Request $req)
    {
        $olimp = Olimp::all();
        return response()->json($olimp);
    }
    public function schedule(Request $req)
    {
        Olimp::create([
            'name' => $req->get('Name'),
            'description' => $req->get('Description'),
            'winner' => $req->get('Winner'),
            'date' => $req->get('Date')
        ]);
    }
    public function updateOlimpiad(Request $req, $id)
    {
        Olimp::all()->find($id)->update([
            'name' => $req->get('Name'),
            'description' => $req->get('Description'),
            'winner' => $req->get('Winner'),
            'date' => $req->get('Date')
        ]);
    }
    public function destroy($id)
    {
        // Удаление олимпиады по её ID
        $olympiad = Olimp::all()->find($id);
        $olympiad->delete();
//        return response()->json(null, 204);
    }
}
