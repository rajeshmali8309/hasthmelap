<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Family;
use App\Models\Contact;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Customer::with('family')->orderBy('id', 'desc')->get();
        return view('admin.user.list', compact('users'));
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('admin.contact.list', compact('contacts'));
    }

    public function store_contacts(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
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
        $id = base64_decode($id);
        $user = Customer::findOrFail($id);

        return view('admin.user.edit_user', compact('user'));
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

        $user->status     = $request->status;
        $user->save();

        return redirect()->route('list_user')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $user = Customer::findOrFail($id);
        $family = Family::where('user_id', $id)->first();
        if ($user->image) {
            unlink(public_path('uploads/profile/' . $user->image));
        }
        $user->delete();
        $family->delete();
        return redirect()->route('list_user')->with('success', 'User deleted successfully.');
    }

    public function delete_contacts($id)
    {
        $id = base64_decode($id);

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }
}
