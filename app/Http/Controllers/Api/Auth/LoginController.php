<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;
use function Illuminate\Events\queueable;

class LoginController extends Controller
{
    //
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    //login user
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
                $response = $http->post('http://192.168.100.106/Capres/public/oauth/token',[
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

    //login admin
    public function loginAdmin(Request $request)
    {

        $http = new \GuzzleHttp\Client;

        $user = [
            'email'=>$request -> email,
            'password'=>$request-> password,
            'role_id' => 1,
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

    public function refresh(request $request){
        $this->validate($request, [
           'refresh_token'=>'required',
        ],[
            'refresh_token'=>'refresh token is required',
        ]);

        $http = new \GuzzleHttp\Client;
        $response = $http->post('http://catatanprestasi.test/oauth/token',[
            'form_params'=>[
                'grant_type' => 'refresh_token',
                'client_id' => $this->client->id,
                'client_secret'=>$this->client->secret,
                'refresh_token'=> $request->refresh_token,
                'scope'=>'*',

            ]
        ]);
        return json_decode((string)$response->getBody(),true);

    }

    public function logout() {
        $user = Auth::user();
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken -> id)
            ->update([
            'revoked' => true
        ]);

        $user->update([
            'is_login' => '0',
        ]);

        $accessToken->revoke();

        return response([
            'message' => 'Logged Out'
        ]);
    }
}
