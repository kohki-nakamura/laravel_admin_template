<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
	function index(){
		$user_list = User::orderBy("id", "desc")->paginate(10);
		return view("admin.users.index", [
			"user_list" => $user_list
		]);
	}
	function show($id){
		$user = User::find($id);
		return view("admin.users.show", [
			"user" => $user
		]);
	}
}