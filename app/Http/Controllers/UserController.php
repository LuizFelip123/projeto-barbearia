<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    public function index(){
        return view('clientes', ['clientes'=> User::role('cliente')->get()]);
    }
    public function register(Request $request){
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefone' => ['required', ],
            'password' => ['required', 'string', 'min:8', ],
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'telefone'=> $request['telefone'],
            'password' => bcrypt($request['password']),
        ]);
     
        $user->refresh();
        if($user->id ==1){
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'cliente']);
            $user->assignRole('admin');
        }
        
        $request->session()->regenerate();
        
        Auth::login($user);
        

       return redirect('/');
    }
    public function login(Request $request){
        Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', ],
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            $user = User::where('email', $request->email)->first();
        
            Auth::login($user);
            $request->session()->regenerate();
        
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'Credenciais inválidas']);

    }
    public function logout( Request $request){
      
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return view('login');
    }
}
