<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    //
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $http = new \GuzzleHttp\Client;

        $user = [
            'email'=>$request -> email,
            'password'=>$request-> password,
            'role_id' => 2,
            'is_login' => '0',
        ];

        $check = DB::table('users')->where('email',$request->email)-> first();
        if ($check->is_login=='0'){
            if (Auth::attempt($user)){
                $response = $http->post('http://catatanprestasi.test/oauth/token',[
                    'form_params'=>[
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret'=>$this->client->secret,
                        'username'=>$request->email,
                        'password'=>$request->password,
                        'scope'=>'*',
                    ]
                ]);
                $this->isLogin(Auth::id());
                return json_decode((string)$response->getBody(),true);
            }
            else {
                return response([
                    'message' => 'Login Failed'
                ]);
            }
        }
    }

    private function isLogin(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1',

        ]);
    }

//    public function logout() {
//        $user = Auth::user();
//        $user->update([
//            'is_login' => '0',
//
//        ]);
//
//
//        return response([
//            'message' => 'Logged Out'
//        ]);
//    }
}
