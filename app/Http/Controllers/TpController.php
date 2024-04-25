<?php

namespace App\Http\Controllers;
use App\Mail\PaymentNotification;
use App\Models\Produit;
use App\Models\Price;
use App\Models\Commande;
use App\Models\User;
use App\Models\Profil;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class TpController extends Controller

    {



        public function home(){
            $cover=Profil::where('type','cover')->get();





            $produitsFromDB = Produit::where('type', 'produit')->take(3)->get();



            return view('home',['produits' => $produitsFromDB,'cover'=>$cover]);
        }


        public function service(){
            $produitsFromDB = Produit::where('type', 'produit')->get();

            return view('service',['produits' => $produitsFromDB]);
        }

        public function price(){
            return view('price');
        }
        public function thank(){
            return view('thank');
        }

        public function  servicedetail(){
            return view(' servicedetail');
        }

        public function  payement(){
            return view(' payement');
        }


    public function about(){
        return view('about');
    }
        public function contact(){
            return view('contact');
        }


        public function showLoginForm()
        {
            return view('connecter');  // Assuming your login view is named 'connecter.blade.php'
        }

        /**
         * Handle a login request to the application.
         */
        public function loginUser(Request $request)
        {
            $credentials = $request->only('name', 'password');


            if (Auth::attempt($credentials, $request->filled('remember'))) {
                $request->session()->regenerate();

                return redirect()->intended('payement');  // Redirect to a dashboard or wherever you wish after login
            }

            return back()->withErrors([
                'error' => 'The provided credentials do not match our records.',
            ])->withInput();
        }





        public function inscrire() {
            return view('inscrire');
        }

        public function StoreInscrire(Request $request) {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]);

            // Create the user
            $user = User::create([
                'name' => $validatedData['nom'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);



            return redirect()->route('payement')->with('success', 'Inscription et commande traitées avec succès.');
        }


        

    }





