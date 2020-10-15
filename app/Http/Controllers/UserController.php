<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createView()
    {
        return view('users.create');
    }

    use PasswordValidationRules;

    public function create(Request $request)
    {
        $user=User::create([
            'name' => $request->get('name'),
            'user_type' => 'customer',
            'surname' => $request->get('surname'),
            'telephone' => $request->get('telephone'),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))

        ]);
        return view('dashboard', compact('user'));
    }

    public function indexView()
    {
        $users = User::where('deleted_at', '=', null)->get();
        return view('users.index', compact('users'));
    }

    public function update(Request $request, $id)
    {

        User::where('id', $id)->update([
            'name' => $request->get('name'),
            'user_type' => 'customer',
            'surname' => $request->get('surname'),
            'telephone' => $request->get('telephone'),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'updated_at' => Carbon::now()
        ]);

        $users = User::where('deleted_at', '=', null)->get();
        return view('users.index', compact('users'));

    }

    public function updateView($id)
    {
        $user = User::where('id', $id)->get();
        $user = $user->first();

        return view('users.update', compact('user'));
    }

    public function delete($id)
    {
        // DB::table('users')->where('id','=',$id)->delete(); // Hard delete ile veriyi kalıcı siler. TAVSİYE EDİLMEZ!
        DB::table('users')->where('id', '=', $id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return back();
    }

    public function bilet_al()
    {

        if (Auth::check()) {
            return view('ticket');
        } else {
            return view('auth.login');
        }

    }

    public function dashboard(){

        $events=Event::all()->take(3);
        return view('dashboard', compact('events'));
    }
}
