<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
/**
	 * @var InjectionController
	 */
	protected $injectionController;

	public function __construct(){
        
	}

	/**
	 * Display a listing of the resource.
	 *
	 */
	public function index(){
		$users = User::orderBy("id","desc")->paginate();

		return view("admin.users.index", compact("users"));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 */
	public function create(){
		return view("admin.users.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 */
	public function store(StoreUser $request){
		
		// PAsado a un archivo request llamado StoreUser
		// $request->validate([
		// 	"name" => "required|max:10",
		// 	"email" => "required",
		// 	"password" => "required|min:6"
		// ]);

		
		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->email_verified_at = now();
		
		$user->save();

		return redirect()->route("users.show", $user->id);
	}

	/**
	 * Display the specified resource.
	 *
	 */
	public function show(User $user){
		return view("admin.users.show", compact("user"));
	}

	/**
	 * Edit user
	 *
	 */
	public function edit(User $user){
		return view("admin.users.edit", compact("user"));
	}

	/**
	 * Update user
	 */
	public function update(User $user, StoreUser $request){
		// $request->validate([
		// 	"name" => "required|max:40",
		// 	"email" => "required",
		// 	"password" => "required|min:6"
		// ]);
		
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->email_verified_at = now();
		$user->save();

		return redirect()->route("users.show", $user->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 */
	public function destroy($id){
		//
	}
}
