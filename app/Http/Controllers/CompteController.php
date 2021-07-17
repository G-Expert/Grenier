<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Transporteur;
use App\Models\Admin;
use App\Models\Offres;

class CompteController extends Controller
{
  // Création de compte client
   public function creatcount(Request $request)
   {
       $nom = $request->nom;
       $prenom = $request->prenom;
       $tel = '225'.$request->tel;
       $password = $request->password;
       // Data user
       $user = ['prenom'=>$prenom,
                'nom' =>$nom,
                'tel'=>$tel,
                'password'=>$password];
      // Verification du compte
      $res = Users::where('tel','=',$tel)->first();
      if ($res=='') {
        // Creation de compte user
        $idus = Users::create($user);
        $transpdata = ['matricule'=>'default','photo'=>'null','user_id'=>$idus->id];
        //dd($transpdata);
        $trans = Transporteur::create($transpdata);

        // Retour json

        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['tel'] = $tel;
        $_SESSION['password'] = $password;
        $_SESSION['id_user'] = $idus->id;
        $_SESSION['profile'] = $idus->profile;
        return response()->json(['code' => '1'],200);

      }
      else {
          return response()->json(['code' => '2'],200);
      }

   }

   // Connection au compte client
   public function login(Request $request)
   {
      $tel = '225'.$request->tel;
      $password = $request->password;
      // Verification
      $restel  = Users::where('tel','=',$tel)->first();
      $respass = Users::where('password','=',$password)->first();
      if ($restel!='' AND $respass!='') {
        $_SESSION['nom'] = $restel->nom;
        $_SESSION['id_user'] = $restel->id;
        $_SESSION['profile'] = $restel->profile;
        $_SESSION['prenom'] = $restel->prenom;
        $_SESSION['tel'] = $restel->tel;
        $_SESSION['password'] = $restel->password;
        //dd($_SESSION['tel']);
        return response()->json(['code' => '1'],200);
      }elseif ($restel=='') {
        return response()->json(['code' => '3'],200);
      }elseif ($respass=='') {
        return response()->json(['code' => '2'],200);
      }else {
        return response()->json(['code' => '0'],200);
      }
   }

   // Récupération de mot de pass
   public function passRecp(Request $request)
   {
     $nom       = $request->nom;
     $prenom    = $request->prenom;
     $tel       = '225'.$request->tel;
     $restel    = Users::Where('tel','=',$tel)->first();
     $resnom    = Users::Where('nom','=',$nom)->first();
     $resprenom = Users::Where('prenom','=',$prenom)->first();
     if ($restel!=''&&$resprenom!='') {
       $pass = $restel->password;
       return response()->json(['code' => '1','pass'=>$pass],200);
     }else {
       return response()->json(['code' => '2'],200);
     }

   }

   // Connection au compte administrateurs
   public function logAd(Request $request)
   {
      $mail = $request->mail;
      $pass = $request->pass;
      $resmail    = Admin::Where('mail','=',$mail)->first();
      $respass    = Admin::Where('pass','=',$pass)->first();
      if ($resmail!=''&& $respass!='') {
         $_SESSION['mail'] = $respass->mail;
         return response()->json(['code' => '1'],200);
      }else {
         return response()->json(['code' => '2'],200);
      }
   }

   // Déconnection au compte
   public function logout()
   {
     session_destroy();
     return redirect('/');
   }

   // Mise à jour des comptes
   public function upcompte(Request $request)
   {
      $lien  = env('LIEN_FILE');
      $file  = $request->profile;
      if ($file!='') {
        $path  = $file->store('profile','public');
        $photo = $lien.$path;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $phone = $request->phone;
        $password = $request->password;
        $dataupd = ['prenom'=>$prenom,'nom'=>$nom,'tel'=>$phone,'password'=>$password,'profile'=>$photo];
        $res = Users::where('id',$_SESSION['id_user'])->update($dataupd);
        $_SESSION['nom'] = $nom;
        $_SESSION['profile'] = $photo;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['tel'] = $phone;
        $_SESSION['password'] = $password;
        return redirect("mon_comptes");
      }else{
        $nom = $request->nom;
        $prenom = $request->prenom;
        $phone = $request->phone;
        $password = $request->password;
        $dataupd = ['prenom'=>$prenom,'nom'=>$nom,'tel'=>$phone,'password'=>$password];
        $res = Users::where('id',$_SESSION['id_user'])->update($dataupd);
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['tel'] = $phone;
        $_SESSION['password'] = $password;
        return redirect("mon_comptes");
      }
      // dd($res);
   }

   // Becom transporteur
   public function begintransp(Request $request)
   {
     $lien  = env('LIEN_FILE');
     $file  = $request->photo;
     $path  = $file->store('vehicule','public');
     $vehicule = $lien.$path;
     $matricule = $request->matricule;
     $transpdata = ['matricule'=>$matricule,'photo'=>$vehicule,'user_id'=>$_SESSION['id_user']];
     Transporteur::create($transpdata);
     $_SESSION['error_transp'] = "Votre demande a été pris en compte nous vous contactons dans 24h!";
     return redirect('/mon_comptes');
     //dd($transpdata);
   }

   // Poster une offre
   public function addOffre(Request $request)
   {
     $lien  = env('LIEN_FILE');
     $prix  = $request->prix;
     $file  = $request->vehicule;
     $path  = $file->store('vehicule','public');
     $vehicule = $lien.$path;
     $depart = $request->depart;
     $arrive = $request->arrive;
     $places = $request->places;
     $unite  = $request->unite;
     $code   = date("YmdHis").'off';
     $dateOf = date('d/m/Y');
     $idtransp = transpID($_SESSION['id_user']);
     $dataOffre = ['depart'=>$depart,'arrive'=>$arrive,'placedispo'=>$places,'montant'=>$prix,
                   'transporteur_id'=>$idtransp,'user_id'=>$_SESSION['id_user'],'vehicule'=>$vehicule,
                   'unite'=>$unite,'date'=>$dateOf,'code'=>$code];
     // dd($dataOffre);
     $offre = Offres::create($dataOffre);
     $_SESSION['error_transp'] = "Nouvelle Offre: Votre offre a été publiée avec succès";
     return redirect('/mon_comptes');

   }

   // Creation de compte transporteur
   public function addtransporteur(Request $request)
   {
     $lien  = env('LIEN_FILE');
     $file  = $request->photo;
     $path  = $file->store('vehicule','public');
     $photo = $lien.$path;
     $nom = $request->nom;
     $prenom = $request->prenom;
     $tel = '225'.$request->tel;
     $matricule = $request->matricule;
     $password = rand(100,100000000);

     $restel    = Users::Where('tel','=',$tel)->first();
     $resnom    = Users::Where('nom','=',$nom)->first();
     $resprenom = Users::Where('prenom','=',$prenom)->first();


       if ($restel!='' AND $resprenom!='' AND $resnom!='') {
           $_SESSION['nom'] = $nom.' '.$prenom;
           $_SESSION['error_transp'] = "Ce compte existe déjà, veuillez changer votre numéro de téléphone";
           return redirect('/transporteur');
       }else{
         $userdata = ['nom'=>$nom,'prenom'=>$prenom,'tel'=>$tel,'password'=>$password];
         $user = Users::create($userdata);
         $user_id = $user->id;

         $transpdata = ['matricule'=>$matricule,'photo'=>$photo,'user_id'=>$user_id];
         Transporteur::create($transpdata);
         $_SESSION['nom'] = $nom.' '.$prenom;
         $_SESSION['error_transp'] = "Devenir transporteur: Votre demande a été pris en compte nous vous contactons dans 24h!";
         return redirect('/transporteur');
       }

   }

   // Gestion de compte user
   public function mon_comptes()
   {
     //$users = Users::where('id',$_SESSION['id_user'])->first();
     return view('entreprise');
   }

   // Suppression d'une offre
   public function delOf(Request $request)
   {
     $res = delOffre($request->idOf);
     $_SESSION['error_transp'] = "Offre Supprimée avec succès";
     return response()->json(['code' => '2'],200);
   }

}
