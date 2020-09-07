<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\User;
class usercontrollers extends Controller
{
  public function editPatient($id)
 {
  // echo $id; die;
   // code...
   $userdata=User::where('id',$id)->first()->toArray();


   //$id=convert_uudecode(base64_decode($id));
  // $userdata=DB::table('patients')->where('pid',$id)->first();
   //$userdata=json_decode(json_encode($userdata),true);
   return view('editPatient',['userdata'=>$userdata]);
 }
 public function updatePatient(Request $request)
    {
       $data=$request->all();
       //echo "<pre>";
       //print_r($data);
       //die;

  try{
         User::where('id',$data['id'])->update(['name'=>$data['name'],'email'=>$data['email'],'contact'=>$data['contact']]);
      // DB::table('patients')->where('id',$data['pid'])->update(['pname'=>$data['pname'],'pemail'=>$data['email'],'pcontact'=>$data['mob_no']]);
       $request->session()->flash('alert-success','patients info updated successfully!');
     }catch(\Exception $e)
     {
       $request->session()->flash('alert-danger','failed');
     }
     return redirect()->to('/');

    }

}
