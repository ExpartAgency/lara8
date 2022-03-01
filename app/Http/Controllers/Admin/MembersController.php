<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
   {
   	$member = DB::table('members')->get();
   	return view('Admin.members.index', compact('member'));
   	
      }


      public function contactus()
      {
        return view ('Admin.contact');

      }

     // contact store

      public function storecontact(Request $request)
{
   $request->validate([
        'Name' => 'required|unique:flights|max:10',
        'email' => 'required|unique:flights',
        'password' => 'required|max:10',
       
    ]);

 
  $data= array(
    'Name' =>$request->name, 
    'email' =>$request->email,
    'password' =>$request->password,
  );

 DB::table('flights')->insert( $data);
      return redirect()->back()->with('successs','successfully Send message');

}
}
