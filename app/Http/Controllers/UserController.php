<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\User;
use Tymon\JWTAuth\Contracts\JWTSubject as JWTSubject;

class UserController extends Controller
{
    public function register(Request $request)
    {
         $validator = validator::make($request->all(),[
             'name'=>'required|string|min:2|max:100',
             'email'=>'required|string|email|max:100|unique:users',
             'password'=>'required|min:5|max:12'
          ]);

      if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
         }

         $input = $request->all();
         $input['password']=bcrypt($input['password']);
         $user = user::create($input);

         $success['token'] = $user->createToken('MyApp')->plainTextToken;
         $success['name'] = $user->name;

         $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User signup successfully!',
         ];

         return response()->json($response,200);

         }




    public function login(Request $request){
       // if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        if(Auth::attempt(['email' => $request->email, 'password' =>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
               'success' => true,
               'data' => $success,
               'message' => 'User login successfully!',
            ];

            return response()->json($response,200);
        }
        else{
            $response = [
                'success' => false,
               'data' => 'Unauthorised'
            ];
            return response()->json($response);
        }
    }

}
