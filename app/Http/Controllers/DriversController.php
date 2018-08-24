<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriversController extends Controller
{
    public function register(Request $request) {
        $user_name = $request->input('user_name');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $photo_url = $request->input('photo_url');
        $phone_num = $request->input('phone_num');
        $email = $request->input('email');
        $birthday = $request->input('birthday');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $car_mode = $request->input('car_mode');
        $password = $request->input('password');
        $token = sha1(time());
        $auth_duplication = DB::select('select id from drivers where email = ? or phone_num = ?', [$email, $phone_num]);

        if ($auth_duplication) {
            return response()->json([
                'status' => '0',
                'message' => 'Auth Duplicated'
            ]);
        } else {
            $register_result = DB::insert('insert into drivers(user_name, first_name, last_name, photo_url, phone_num, email, birthday, gender, address, car_mode, password, remember_token) values(?,?,?,?,?,?,?,?,?,?,?,?)', 
            [$user_name, $first_name, $last_name, $photo_url, $phone_num, $email, $birthday, $gender, $address, $car_mode, $password, $token]);
            if ($register_result) {
                return response()->json([
                    'status' => '1',
                    'message' => 'Register Success',
                    'token' => $token
                ]);
            } else {
                return response()->json([
                    'status' => '0',
                    'message' => 'Register Failed',
                ]);
            }
        }
    }

    public function login(Request $request) {
        $phone_num = $request->input('phone_num');
        $password = $request->input('password');
        $result = DB::select('select id from drivers where phone_num=? and password=?', [$phone_num, $password]);
        
        if (count($result)) {
            return response()->json([
                'status' => '1',
                'message' => 'Login Success'
            ]);
        } else {
            return response()->json([
                'status' => '0',
                'message' => 'Login Failed',
            ]);
        }
    }
}
