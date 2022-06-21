<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data['posts'] = Contact::orderBy('id','desc');
    
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');

    }

   /* public function store(Request $request)
    {
    

            DB::table('contacts')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'text' => $request->text
            
        ]);
        return redirect('contact');
       
    }*/
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'text' => 'required',
        ]);
        $post = new Contact;

        $post->name = $request->name;
        $post->phone = $request->phone;
        $post->email = $request->email;
        $post->text = $request->text;
        $post->save();

     return redirect('contact');
        session()->flash('message', 'This is a flash message containing feedback to the user!'); 
    }

    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
   
}
