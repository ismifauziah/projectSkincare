<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facedas\Required;
use Illuminate\Support\Facedas\Redirect;
use App\Models\product;
use App\Models\produk;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = auth()->user();
        $data['produk'] = produk::find($request->id);
        return view('user-shop', compact('user'),$data);
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (FacadesAuth::attempt($validate)) {
            return redirect('/user');
        }

        return redirect()->back()->with('pesanLogin','Maaf, Login anda gagal!');
    }

    public function user(Request $request)
    {
        $data['user'] = User::all();
        $data['produk'] = produk::all();
        $data['total_user'] = $data['user']->count();
        return view('user',$data);
    }
    public function usershop(){
        return view('/ceck-out');
    }
    

    public  function add(){
        return view('user-shop');
        return redirect('/user/shop');

    }

    public function ceckout(){
        return view('ceck-out');
    }
    public function keranjang(){
        return view('keranjang');
    }
    public function dasboard(){
        return view('dasboard');
    }
    public function checkout(){
        return view('checkout');
    }
    public function produk(){
        return view('produk');
    }


    // public function create()
    // {
    //     return view('users-create');
    // }
}
// {
//     //
//     public function login(){
//         return view(view:'login');
//     }
//     public function auth(Request $request){
//         $vaalidasi = $request->validate(rules:[
//             'email' => ['required'],
//             'password' => ['required'],
//         ]);
//         if (Auth::attempt($vaalidasi)){
//             return redirect('produk');
//         }
//         return redirect()->back()->with('pessan','login anda gagal');
//     }
//     function logout(){
//         Auth::logout();
//         return redirect('/login');
//     }
// }
