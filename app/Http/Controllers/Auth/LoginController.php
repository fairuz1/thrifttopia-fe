<?php

namespace App\Http\Controllers\Auth;

use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Services;

use App\Mail\verification;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $baseUrl = 'http://47.88.89.199:9990/v1';
        $loginEndpoint = $baseUrl . '/login';
        $body = array(
            'email' => $request['email'],
            'password' => $request['password']
        );
        $authData = json_decode(json_encode($this->apiCall('POST', $loginEndpoint, json_encode($body))), true);

        if (isset($authData['data']['token'])) {
            Session::put('auth', $authData['data']);
            $successLogin = "
            <div class='alert alert-primary d-flex align-items-center alert-dismissible fade show' style='z-index: 9999; position: absolute !important; width: 100%' role='alert'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='success'>
                    <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                </svg>
                <div>
                    Successful Login!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>";

            Session::put('successLogin', $successLogin);
            return redirect()->route('dashboard');
        } else {
            $errorMessage = "Authentication failed!";
            dd($errorMessage);
            // return redirect()->route('dashboard');
        }
    }

    protected function logout(Request $request)
    {
        if (session()->has('auth')) {
            // Session::forget('auth');
            // session()->forget('successLogin');
            // session()->forget('auth');
            session()->flush();
            return redirect()->route('dashboard');
        }
    }

    public function apiCall($method, $url, $data) {
        $curl = curl_init();
        switch ($method){
           case "POST":
              curl_setopt($curl, CURLOPT_POST, 1);
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
           case "PUT":
              curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
           default:
              if ($data)
                 $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        $responses  = json_decode($result);
        curl_close($curl);

        return $responses;
    }
}
