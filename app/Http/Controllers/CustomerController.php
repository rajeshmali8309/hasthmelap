<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Family;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\registrationmail;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.register');
    }

    public function show_user($id)
    {
        $id = base64_decode($id);
        $user = Customer::findOrFail($id);
        $family = Family::where('user_id', $id)->first();

        return view('website.show_user', compact('user', 'family'));
    }

    public function edit_user($id)
    {
        $id = base64_decode($id);
        $user = Customer::findOrFail($id);

        return view('website.edit_profile', compact('user'));
    }

    public function edit_family($id)
    {
        $id = base64_decode($id);

        $family = Customer::with("family")->where('id', $id)->firstOrFail();

        return view('website.edit_family', compact('family'));
    }

    public function profile()
    {
        $user_id = session('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $user = Customer::find($user_id);
        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found.');
        }

        $family = Family::where('user_id', $user_id)->first();
        return view('website.profile', compact('user', 'family'));
    }

    public function login()
    {
        return view('website.login');
    }
    public function logout()
    {
        session()->forget(['user_id', 'user_email', 'user_name']);

        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'profile_for' => 'required',
            'first_name'  => 'required',
            'last_name'   => 'required',
            'gender'      => 'required',
            'email'       => 'required|email|unique:customers,email',
            'password'    => 'required',
            'otp'         => 'required',
        ]);

        // OTP check
        if ($request->otp != session('registration_otp')) {
            return redirect()->route('register')->with('error', 'Invalid OTP entered!');
        }

        $user = new Customer;
        $user->profile_for = $request->profile_for;
        $user->first_name  = $request->first_name;
        $user->last_name   = $request->last_name;
        $user->gender      = $request->gender;
        $user->email       = $request->email;
        $user->password    = Hash::make($request->password);
        $user->save();

        Family::create([
            'user_id' => $user->id,
        ]);

        session()->forget('registration_otp');

        return redirect()->route('services')->with('success', 'Registration successful!');
    }


    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email',
        ]);

        $otp = rand(100000, 999999);

        session([
            'registration_otp' => $otp,
            'otp_email' => $request->email,
            'otp_expiry' => now()->addMinutes(5)
        ]);

        Mail::to($request->email)->send(new registrationmail($otp));

        return response()->json(['success' => 'OTP sent successfully!']);
    }


    public function login_auth(Request $request)
    {
        $validated = $request->validate([
            'email'       => 'required',
            'password'    => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $customer = Customer::where('email', $email)->first();

        if ($customer) {
            if (Hash::check($password, $customer->password)) {

                session()->put('user_id', $customer->id);
                session()->put('user_email', $customer->email);
                session()->put('user_name', $customer->first_name . ' ' . $customer->last_name);
                session()->put('user_gender', $customer->gender);

                return redirect()->route('index')->with('success', 'Login successful!');
            } else {
                return redirect()->route('login')->with('error', 'Password does not match!');
            }
        } else {
            return redirect()->route('login')->with('error', 'User does not exist!');
        }
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
        $user = Customer::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required',
            'gender'     => 'required',
        ]);

        $user->profile_for     = $request->profile_for;
        $user->first_name      = $request->first_name;
        $user->last_name       = $request->last_name;
        $user->gender          = $request->gender;
        $user->email           = $request->email;
        $user->mobile          = $request->mobile;
        $user->age             = $request->age;
        $user->caste           = $request->caste;
        $user->religion        = $request->religion;
        $user->height          = $request->height;
        $user->weight          = $request->weight;
        $user->city            = $request->city;
        $user->marital_status  = $request->marital_status;
        $user->profession      = $request->profession;
        $user->qualification   = $request->qualification;
        $user->college_name    = $request->college_name;
        $user->hobbies         = $request->hobbies;
        $user->about           = $request->about;

        if ($request->filled('otp')) {
            if ($request->otp != session('registration_otp')) {
                return redirect()->route('edit_user', ['id' => $id])
                    ->with('error', 'Invalid OTP entered!');
            }
        }


        if ($request->hasFile('image')) {
            if (!empty($user->image) && file_exists(public_path('uploads/profile/' . $user->image))) {
                unlink(public_path('uploads/profile/' . $user->image));
            }

            $image      = $request->file('image');
            $imageName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile'), $imageName);

            $user->image = $imageName;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }


    public function update_family(Request $request, $id)
    {
        $request->validate([
            'father_name'     => 'nullable|string|max:255',
            'mother_name'     => 'nullable|string|max:255',
            'profession'      => 'nullable|string|max:255',
            'family_status'   => 'nullable|string|max:255',
            'family_location' => 'nullable|string|max:255',
            'total_siblings'  => 'nullable|integer',
            'annual_income'   => 'nullable|string|max:255',
        ]);

        $family = Family::where('user_id', $id)->first();

        if (!$family) {
            $family = new Family;
            $family->user_id = $id;
        }

        $family->father_name      = $request->father_name;
        $family->mother_name      = $request->mother_name;
        $family->profession       = $request->profession;
        $family->family_status    = $request->family_status;
        $family->family_location  = $request->family_location;
        $family->total_siblings   = $request->total_siblings;
        $family->annual_income    = $request->annual_income;

        $family->save();

        return redirect()->route('profile')->with('success', 'Family details updated successfully.');
    }

    // search functionality
    public function searchdata(Request $request)
    {
        $query = $request->input('query');

        $results = Customer::where('first_name', 'LIKE', '%' . $query . '%')
            ->orWhere('last_name', 'LIKE', '%' . $query . '%')
            ->orWhere('age', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json($results);
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
}
