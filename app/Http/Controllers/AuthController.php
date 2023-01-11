<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use  App\Models\User;

//import auth facades
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function register(Request $request)
    {
        // cek registered user
        echo "dodi test";
        $datarespon = array(User::where('msisdn', $request->msisdn)->first());
        echo json_encode($datarespon);die();
        if ($datarespon == [null]) {
            //validate incoming request 
            $this->validate($request, [
                'msisdn' => 'required|unique:users',
                'country_code' => 'required',
                'os' => 'required'
            ]);
            
            
            //try {
                $user = new User;
                $user->msisdn = $request->input('msisdn');
                $user->country_code = $request->input('country_code');
                $user->os = $request->input('os');
                $user->save();
                $datarespon = array(User::find($request->msisdn));
                //return successful response
                return response()->json(['code' => '200', 'error_message' => 'CREATED', 'data' => $datarespon], 200);
            //} catch (\Exception $e) {
              //  //return error message
                //return response()->json(['code' => '409', 'error_message' => 'User Registration Failed!', 'data' => []], 409);
            //}
        } else {
            return response()->json(['code' => '200', 'error_message' => 'User has been registered!', 'data' => $datarespon], 200);
        }
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(Request $request)
    {
        //validate incoming request 
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
}
