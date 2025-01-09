<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  // ログイン処理
  public function login(Request $request) {
    $credentials = [
      'email' => $request->email,
      'password' => $request->password
    ];

    if(Auth::attempt($credentials)) {
      $user = $request->user();
      $token = $user->createToken('AccessToken')->plainTextToken;
      return response()->json(['token' => $token], 200);
    } else {
      return response()->json(['error' => '認証に失敗しました'], 401);
    }
  }

  // 認証ユーザー情報の取得
  public function user(Request $request) {
    return response()->json([
      'name' => $request->user()->name,
      'email' => $request->user()->email
    ]);
  }

  // ログアウト処理
  public function logout(Request $request) {
    $request->user()->currentAccessToken()->delete();
    return response()->json(['message' => 'ログアウトしました'], 200);
  }
}
