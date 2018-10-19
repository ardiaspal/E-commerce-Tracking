<?php

namespace App\Http\Controllers;

use App\User;
use App\data;
use App\Produk;
use Auth;
use Illuminate\Http\Request;
use Hash;
use validate;
use Illuminate\Contracts\Encryption\DecryptException;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $no = 1;
      $pekerjas = User::where('role',2)->orderBy('created_at','asc')->paginate(30);
      $produks = Produk::all();
      return view('pekerja.tambah', compact('no','pekerjas','produks'));
    }

    public function update_keamanan(Request $request, $id)
    {
      $user = User::findOrFail($id);
      $data = data::where('user_id',$id)->first();


 // validari
      if (empty($request ->passwordLama) && empty($request ->passwordBaru) && empty($request ->passwordKonfirm)) {
        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
        ]);
      }else if(($request->email == $user->email) && empty($request ->passwordLama) && empty($request ->passwordBaru) && empty($request ->passwordKonfirm)){
        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
        ]);
      }else if ($request->email == $user->email) {
        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
          'passwordLama' => 'string|min:6',
          'passwordBaru' => 'required|string|min:6',
          'passwordKonfirm' => 'required|string|min:6'
        ]);

        if (Auth::check() && Auth::user()->role == 1) {

          if ( Auth::user()->id == $id || Auth::user()->isAdmin()) {
            if (Hash::check($request->passwordLama, Auth::user()->password,[]) == false) {
            // dd('salah lama');
              return redirect('/pekerja');
            } else if((strcmp($request->passwordBaru, $request->passwordKonfirm)==0) == false){
        // dd('tdk cocok');
              return redirect('/pekerja');
            }else if(Hash::check($request->passwordLama, Auth::user()->password,[]) && strcmp($request->passwordBaru, $request->passwordKonfirm)==0){
        // dd('bener');
              $user->password = bcrypt($request->passwordBaru);
              $user->save();
              return redirect('/pekerja');
            }
          }else {
            abort(404);
          }
        }

      }else if($request->email != $user->email){
        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
          'passwordLama' => 'string|min:6',
          'passwordBaru' => 'required|string|min:6',
          'passwordKonfirm' => 'required|string|min:6'
        ]);

        if (Auth::check() && Auth::user()->role == 1) {

          if ( Auth::user()->id == $id || Auth::user()->isAdmin()) {
            if (Hash::check($request->passwordLama, Auth::user()->password,[]) == false) {
            // dd('salah lama');
              return redirect('/pekerja');
            } else if((strcmp($request->passwordBaru, $request->passwordKonfirm)==0) == false){
        // dd('tdk cocok');
              return redirect('/pekerja');
            }else if(Hash::check($request->passwordLama, Auth::user()->password,[]) && strcmp($request->passwordBaru, $request->passwordKonfirm)==0){
        // dd('bener');
              $user->password = bcrypt($request->passwordBaru);
              $user->save();
              return redirect('/pekerja');
            }
          }else {
            abort(404);
          }
        }

      }else if(!empty($request ->passwordLama) && !empty($request ->passwordBaru) && !empty($request ->passwordKonfirm)){

        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
          'passwordLama' => 'string|min:6',
          'passwordBaru' => 'required|string|min:6',
          'passwordKonfirm' => 'required|string|min:6'
        ]);

        if (Auth::check() && Auth::user()->role == 1) {

          if ( Auth::user()->id == $id || Auth::user()->isAdmin()) {
            if (Hash::check($request->passwordLama, Auth::user()->password,[]) == false) {
            // dd('salah lama');
              return redirect('/pekerja');
            } else if((strcmp($request->passwordBaru, $request->passwordKonfirm)==0) == false){
        // dd('tdk cocok');
              return redirect('/pekerja');
            }else if(Hash::check($request->passwordLama, Auth::user()->password,[]) && strcmp($request->passwordBaru, $request->passwordKonfirm)==0){
        // dd('bener');
              $user->password = bcrypt($request->passwordBaru);
              $user->save();
              return redirect('/pekerja');
            }
          }else {
            abort(404);
          }
        }
      }else if(($request->email == $user->email) && !empty($request ->passwordLama) && !empty($request ->passwordBaru) && !empty($request ->passwordKonfirm)){

        $this->validate($request,[
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'alamat' => 'required|string',
          'username' => 'required|string',
          'image' => 'required',
          'nohp' => 'required|string',
          'passwordLama' => 'string|min:6',
          'passwordBaru' => 'required|string|min:6',
          'passwordKonfirm' => 'required|string|min:6'
        ]);

        if (Auth::check() && Auth::user()->role == 1) {

          if ( Auth::user()->id == $id || Auth::user()->isAdmin()) {
            if (Hash::check($request->passwordLama, Auth::user()->password,[]) == false) {
            // dd('salah lama');
              return redirect('/pekerja');
            } else if((strcmp($request->passwordBaru, $request->passwordKonfirm)==0) == false){
        // dd('tdk cocok');
              return redirect('/pekerja');
            }else if(Hash::check($request->passwordLama, Auth::user()->password,[]) && strcmp($request->passwordBaru, $request->passwordKonfirm)==0){
        // dd('bener');
              $user->password = bcrypt($request->passwordBaru);
              $user->save();
              return redirect('/pekerja');
            }
          }else {
            abort(404);
          }
        }
      }else{
        abort(404);  
      }

      $user->update([
        'name' => $request->name,
        'username' => $request->username,
        'image'     => $request->image,
        'email' => $request->email
      ]); 
      $data->update([
        'alamat' => $request->alamat,
        'nohp' => $request->nohp,
      ]);


      return redirect('/pekerja');
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
     $this->validate($request,[
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
      'alamat' => 'required|string',
      'username' => 'required|string',
      'nohp' => 'required|string',
    ]);


     if (Auth::check() && Auth::user()->role == 1) {
      $user = User::create([
        'name' => $request->name,
        'username' => $request->username,
        'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $request->email ) ) ) ."?d=monsterid",
        'role'  => 2,
        'email' => $request->email,
        'token'     => str_random(25),
        'password' => bcrypt($request->password),
      ]); 
      data::create([
        'alamat' => $request->alamat,
        'nohp' => $request->nohp,
        'user_id'   => $user->id,
      ]);
    } 
    return redirect('/pekerja');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function pembeli()
    {
      return view('pembeli.dafatar_pekerja');
    }

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
      $user = User::findOrFail($id);
      $data = data::where('user_id',$id)->first();

      if (Auth::check() && Auth::user()->role == 1) {
       $data->delete();
       $user->delete();
     }else {
       abort(404);
     }

     return redirect('/pekerja');
   }
 }
