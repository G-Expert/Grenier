<?php
use Illuminate\Support\Facades\DB;
use App\Models\Ville;
use App\Models\Unite;
# Gestion des zones
function AddZone($zone)
{
  // Verification
  $zones = DB::table('villes')
            ->where('nom', '=', $zone)
            ->get();
  $nb = count($zones);
  if ($nb==0)
  {
    $dataZone = ['nom'=>$zone];
    Ville::create($dataZone);
  }
}

function ReadZone()
{
  $zone = DB::table('villes')->orderBy('id', 'desc')->get();
  return $zone;
}

# Gestion des unités
function AddUnite($unite)
{
  // Verification
  $unites = DB::table('unites')
            ->where('unite', '=', $unite)
            ->get();
  $nb = count($unites);
  if ($nb==0)
  {
    $dataUnite = ['unite'=>$unite];
    Unite::create($dataUnite);
  }
}
function ReadUnite()
{
  $unite = DB::table('unites')->orderBy('id', 'desc')->get();
  return $unite;
}

# Lecture des offres en fonction du client
function offre($user)
{
  $offres = DB::table('offres')
            ->join('users', 'offres.user_id','=','users.id')
            ->join('villes', 'offres.depart','=','villes.id')
            ->select('offres.*','users.*','offres.id as offID','users.id as Usid')
            ->where('users.id', '=', $user)
            ->where('offres.etat', '=',0)
            ->get();
  return $offres;
}

#Lecture des villes depart et arrive
function ReadVille($id)
{
  $villes = DB::table('villes')->where('villes.id','=',$id)->first();
  $nom = $villes->nom;
  return $nom;
}

#Lecture des unités
function ReadUnites($id)
{
  $unites = DB::table('unites')->where('unites.id','=',$id)->first();
  $unit = $unites->unite;
  return $unit;
}

#Gestion des Offres
  // Suppression d'une offre
   function delOffre($id)
   {
     $res = DB::table('offres')->where('offres.id', '=', $id)->update(['etat' => 1]);
     return $res;
   }

 // Selection de l'id transporteur en fonction de l'id user
 function transpID($user)
 {
   $transp =  DB::table('transporteurs')->where('transporteurs.user_id','=',$user)->first();
   $idtransp = $transp->id;
   return $idtransp;
 }

# Gestion des réservations
function reserv($user,$statut)
{
  $offres = DB::table('offre_has_client')
            ->join('users', 'offre_has_client.user_id','=','users.id')
            ->join('offres', 'offre_has_client.offre_id','=','offres.id')
            ->select('offre_has_client.*','offres.*','offres.id as Usid','offre_has_client.updated_at as livdate')
            ->where('offre_has_client.user_id', '=', $user)
            ->where('offre_has_client.statut', '=', $statut)
            ->get();
  return $offres;
}

#Gestion des transporteurs
function transp($id)
{
  $transp = DB::table('transporteurs')
            ->join('users', 'transporteurs.user_id','=','users.id')
            ->select('transporteurs.*','users.*','users.id as Usid','transporteurs.id as Tpsid')
            ->where('transporteurs.id', '=', $id)
            ->get();
  return $transp;
}

function transpTel($id)
{
  $transp = DB::table('transporteurs')
            ->join('users', 'transporteurs.user_id','=','users.id')
            ->select('transporteurs.*','users.*','users.id as Usid','transporteurs.id as Tpsid')
            ->where('transporteurs.id', '=', $id)
            ->first();
  return $transp->tel;
}

function transpNom($id)
{
  $transp = DB::table('transporteurs')
            ->join('users', 'transporteurs.user_id','=','users.id')
            ->select('transporteurs.*','users.*','users.id as Usid','transporteurs.id as Tpsid')
            ->where('transporteurs.id', '=', $id)
            ->first();
  $nomT = $transp->nom.' '.$transp->prenom;
  return $nomT;
}

function transpProf($id)
{
  $transp = DB::table('transporteurs')
            ->join('users', 'transporteurs.user_id','=','users.id')
            ->select('transporteurs.*','users.*','users.id as Usid','transporteurs.id as Tpsid')
            ->where('transporteurs.id', '=', $id)
            ->first();
  return $transp->profile;
}

#Gestion des users
function userTel($id)
{
  $user = DB::table('users')->where('users.id','=',$id)->first();
  return $user->tel;
}


function userNom($id)
{
  $user = DB::table('users')->where('users.id','=',$id)->first();
  return $user->nom." ".$user->prenom;
}

function userProfil($id)
{
  $user = DB::table('users')->where('users.id','=',$id)->first();
  return $user->profile;
}


#Gestion des livraison
function livr($transp,$statut)
{
  $offres = DB::table('offre_has_client')
            ->join('users', 'offre_has_client.user_id','=','users.id')
            ->join('offres', 'offre_has_client.offre_id','=','offres.id')
            ->select('offre_has_client.*','offres.*','offres.id as Offid','offres.user_id as OffUser','offre_has_client.user_id as offClient')
            ->where('offre_has_client.offre_transporteur_id', '=', $transp)
            ->where('offre_has_client.livraison', '=', $statut)
            ->get();
  return $offres;
}
