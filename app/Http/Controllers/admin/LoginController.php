<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoginController extends Controller
{

	function showLoginForm(){
		return view("admin.auth.login");
	}

	function login(Request $request){
		//入力内容をチェックする
		$user_id = $request->input("user_id");
		$password = $request->input("password");
		//ログイン成功
		if($user_id == env('ADMIN_USER_ID') && $password == env('ADMIN_USER_PASSWORD')){
			$request->session()->put("admin_auth", true);
			return redirect("admin");
		}
		//ログイン失敗
		return redirect("admin/login")->withErrors([
			"login" => "ユーザーIDまたはパスワードが違います"
		]);

	}
}