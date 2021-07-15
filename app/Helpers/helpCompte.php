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
     $res = DB::table('offres')->where('offres.id', '=', $id)->delete();
     return $res;
   }

 // Selection de l'id transporteur en fonction de l'id user
 function transpID($user)
 {
   $transp =  DB::table('transporteurs')->where('transporteurs.user_id','=',$user)->first();
   $idtransp = $transp->id;
   return $idtransp;
 }
