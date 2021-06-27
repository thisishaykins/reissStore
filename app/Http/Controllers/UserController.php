<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{

  public function index()
  {
      return response()->json(User::with(['orders'])->get());
  }

  // Auth login
  public function login(Request $request)
  {
      $status = 401;
      $response = ['error' => 'Unauthorised'];

      if (Auth::attempt($request->only(['email', 'password']))) {
          $status = 200;
          $response = [
              'user' => Auth::user(),
              'token' => Auth::user()->createToken('bigStore')->accessToken,
          ];
      }

      return response()->json($response, $status);
  }

  // Auth register
  public function register(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:50',
          'email' => 'required|email',
          'password' => 'required|min:8',
          'c_password' => 'required|same:password',
      ]);

      if ($validator->fails()) {
          return response()->json(['error' => $validator->errors()], 401);
      }

      $data = $request->only(['name', 'email', 'password']);
      $data['password'] = bcrypt($data['password']);

      $user = User::create($data);
      $user->is_admin = 0;
      $user->is_vendor = 0;

      return response()->json([
          'user' => $user,
          'token' => $user->createToken('bigStore')->accessToken,
      ]);
  }

  // Show user details
  public function show(User $user)
  {
      return response()->json($user);
  }

  // Show user orders
  public function showOrders(User $user)
  {
      return response()->json($user->orders()->with(['product'])->get());
  }

  // show user vendor details
  public function showVendor(User $user)
  {
      return response()->json($user->vendor()->with(['vendor'])->get());
  }

}
