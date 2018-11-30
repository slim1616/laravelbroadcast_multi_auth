<?php

namespace App\Http\Controllers;
use App\Events\TestEvent;
use Illuminate\Http\Request;
use App\User;
use App\Events\UserEvent;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('home', compact('users'));
    }
    public function notifier()
    {
        broadcast(new TestEvent(['title' => 'test title']));

        
    }

    public function notifyUser($id){
        $user = User::find($id);
        broadcast(new UserEvent($user));
        return redirect()->back();

    }
}
