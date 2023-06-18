<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request= $request->all();

            $rulesArray = [
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ];

            $validatedData = Validator::make((array) $request, $rulesArray);

            if ($validatedData->fails()) {
                $data = [
                    'error' => true,
                    'error_code' => Response::HTTP_UNPROCESSABLE_ENTITY,
                    'message' => $validatedData->errors()->toArray()
                ];
                return response($data, Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $user = User::where('email', $request['email'])->first();

            if(Hash::check($request['password'], $user->password)) {
                Auth::login($user, true);
                return response(auth()->user(), Response::HTTP_OK);
            } else {
                $data = [
                    'error' => false,
                    'error_code' => Response::HTTP_UNAUTHORIZED,
                    'message' => 'Invalid User Name And Password'
                ];
                return response($data, Response::HTTP_UNPROCESSABLE_ENTITY);
            }

        } catch(Exception $exception) {
            info($exception->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('home.index'));
    }
}
