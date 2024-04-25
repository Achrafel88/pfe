<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Panier;
use App\Models\User;
use App\Models\Administrator;
use App\Models\Profil;







class AdminController extends Controller
{
    public function profil(){
        $cover=Profil::where('type','cover')->get();
       
        return view('Admin.interfaceHome',['cover'=>$cover]);
    }
    public function editImage(Profil $image){

        $imageDB=Profil::where('id',$image->id)->get();


        return view('Admin.editImage',['imageDB'=>$imageDB,'image'=>$image]);
    }

    public function updateImage(Request $request ,$imageId){
        $validatedData = $request->validate([

            'image' => 'image|mimes:png,jpg,jpeg,webp,WEBP',

        ]);
        $image = Profil::find($imageId);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'images/profilSite';
            $file->move($path, $filename);
            $image->images = $path . '/' . $filename;
        }else{
            return 'non';
        }
        $image->save();
        return redirect()->route('profil');



    }

    public function admin(){


        return view('Admin.loginAdmin');
    }

    public function adminInfo(Request $request){

        $validatedData = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);


        $user = Administrator::where('name', $request->input('name'))->first();


        if ($user && Hash::check($request->input('password'), $user->password)) {
            return redirect()->route('index');

        } else {
            return back()->withInput()->withErrors(['messageP' => 'Nom d\'utilisateur ou mot de passe non valide']);


        }








    }





    public function index(){
        $servicesFromDB=Produit::all();

        return view('Admin.index',['produits' => $servicesFromDB]);
    }



    public function create(){
        $produit=Produit::all();


        return view('Admin.create',['produits'=>$produit]);
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nom' => ['required', 'min:3'],
            'description' => ['required'],
            'image' => 'required|image|mimes:png,jpg,jpeg,webp,WEBP',
            'type' => ['required']


        ]);



        $imagePaths = [];


        foreach (['image', ] as $key => $imageField) {
            if ($request->hasFile($imageField)) {
                $file = $request->file($imageField);
                $filename = time() . '_' . ($key + 1) . '.' . $file->getClientOriginalExtension();
                $path = 'images/produits';
                $file->move($path, $filename);
                $imagePaths[$imageField] = $path . '/' . $filename;
            }
        }


        $produitData = [
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],


            'type' => $validatedData['type']


        ];

        foreach ($imagePaths as $field => $path) {
            $produitData[$field] = $path;
        }


        Produit::create($produitData);


        return redirect()->route('index');
    }

public function edit(Produit $produit){
    $produits=Produit::all();

    return view('Admin.edit',['produits'=>$produits ,'produit'=>$produit]);
}
public function update(Request $request ,$produitId){


        $validatedData = $request->validate([
            'nom' => ['required', 'min:3'],
            'description' => ['required'],
            'image' => 'image|mimes:png,jpg,jpeg,webp,WEBP',


            'type' => ['required']

        ]);



        $produit = Produit::find($produitId);


        $produit->nom = $validatedData['nom'];
        $produit->description = $validatedData['description'];


        $produit->type = $validatedData['type'];



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'images/produits';
            $file->move($path, $filename);
            $produit->image = $path . '/' . $filename;
        }



        $produit->save();


        return redirect()->route('index');



}


public function destroy($produitId){


    $SinglProduitFromDB=Produit::find($produitId);
    $SinglProduitFromDB->delete();



    return redirect()->route('index');


}

public function listeCommande(){
    $commande=Commande::all();
    $panier=Panier::all();



    return view('Admin.listeCommande',['commande'=>$commande,'panier'=>$panier]);
}
public function listeUser(){
    $users=User::all();
    return view('Admin.listeUser',['users'=>$users]);



}
}
