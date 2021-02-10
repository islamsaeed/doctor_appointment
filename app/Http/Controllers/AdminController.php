<?php

namespace App\Http\Controllers;

use App\Mail\AdminResetPassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (view('site.' . $id)) {
            return view('site.' . $id);

        } else {
            return view('admin.404');

        }

        //   return view($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //reset password
    public function forgot_password()
    {
        return view('auth.passwords.forgot');
    }

    // forget password

    // forget password

    public function forgot_password_Post(Request $request)
    {

        $admin = User::where('email', $request->email)->first();

        if (!empty($admin)) {
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email' => $admin->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
            return new AdminResetPassword(['data' => $admin, 'token' => $token]);

            Mail::to($admin->email)->send(new AdminResetPassword(['data' => $admin, 'token' => $token]));
            session()->flash('success', trans('admin.the_link_reset_sent'));

            return back();
        }

        return back();
    }

    public function reset_password_final(Request $request, $token)
    {

        $this->validate($request, [
            'password' => 'required|confirmed',
            'email' => 'email',
            'password_confirmation' => 'required',
        ], [], [
            'password' => 'password',
            'password_confirmation' => 'password  confrimation',
        ]);

        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();

        if (!empty($check_token) && $check_token->email == $request->email) {
            $admin = User::where('email', $check_token->email)->update(['password' => bcrypt(request('password'))]);
            DB::table('password_resets')->where('email', $check_token->email)->delete();
            Auth::attempt(['email' => $check_token->email, 'password' => $request->password], true);

            return redirect(url('admin'));
        } else {

            // // return route('forgot.password.Post')->with('error', 'email or password  is  incorrect');
            // return Redirect::back()->with('error', 'email or password  is  incorrect');

            return Redirect::back()->withErrors(['email or password  is  incorrect']);

        }
    }

    public function reset_password($token)
    {
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();

        if (!empty($check_token)) {
            return view('auth.passwords.reset', ['data' => $check_token]);
        } else {
            return redirect()->back();
        }
    }
}
