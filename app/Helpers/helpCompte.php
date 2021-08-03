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

   function ReadOf($etat)
   {
     $offres = DB::table('offres')
               ->join('users', 'offres.user_id','=','users.id')
               ->select('offres.*','users.*','offres.id as Ofid')
               ->where('offres.etat', '=', $etat)
               ->where('offres.placedispo', '>',0)
               ->orderBy('offres.id', 'desc')
               ->get();
     return $offres;
   }

   function checkOf($etat,$depart,$arrive,$unite)
   {
     $offres = DB::table('offres')
               ->join('users', 'offres.user_id','=','users.id')
               ->select('offres.*','users.*','offres.id as Ofid')
               ->where('offres.etat', '=', $etat)
               ->where('offres.depart', '=', $depart)
               ->where('offres.arrive', '=', $arrive)
               ->where('offres.unite', '=', $unite)
               ->where('offres.placedispo', '>',0)
               ->orderBy('offres.id', 'desc')
               ->get();
     return $offres;
   }

   function ReadOff($idof)
   {
     $offres = DB::table('offres')
               ->join('users', 'offres.user_id','=','users.id')
               ->select('offres.*','users.*','offres.id as Ofid')
               ->where('offres.id', '=', $idof)
               ->orderBy('offres.id', 'desc')
               ->first();
     return $offres;
   }

   function upPlace($place,$idof)
   {
     $res = DB::table('offres')
                 ->where('offres.id', '=', $idof)
                 ->update(['placedispo'=>$place]);
   }


#Gestion des transporteur
 //Selection de l'id transporteur en fonction de l'id user
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

function addreserv($offre_id,$transporteur_id,$qte,$arret,$date,$numPaiement,$statut,$livraison,$code,$user_id)
{
  $dataReserv = ['offre_id'=>$offre_id,
                 'offre_transporteur_id'=>$transporteur_id,
                 'qte'=>$qte,
                 'arret'=>$arret,
                 'date'=>$date,
                 'numpaiement'=>$numPaiement,
                 'statut'=>$statut,
                 'livraison'=>$livraison,
                 'code'=>$code,
                 'user_id'=>$user_id];
   $res = DB::table('offre_has_client')->insert($dataReserv);
   return $res;
}

function paiement($numpaiement,$statut)
{
  $datapay = ['numpaiement'=>$numpaiement,'statut'=>$statut];
  $res = DB::table('paiement')->insert($datapay);
  return $res;
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

#Gestion des notifications
 //SMS
 function SMS($msg,$tel,$sender)
 {
    // Filtrer le messages
         $nvMsg = str_replace('à','a', $msg);
         $nvMsg = str_replace('á','a', $nvMsg);
         $nvMsg = str_replace('â','a', $nvMsg);
         $nvMsg = str_replace('ç','c', $nvMsg);
         $nvMsg = str_replace('è','e', $nvMsg);
         $nvMsg = str_replace('é','e', $nvMsg);
         $nvMsg = str_replace('ê','e', $nvMsg);
         $nvMsg = str_replace('ë','e', $nvMsg);
         $nvMsg = str_replace('ù','u', $nvMsg);
         $nvMsg = str_replace('ù','u', $nvMsg);
         $nvMsg = str_replace('ü','u', $nvMsg);
         $nvMsg = str_replace('û','u', $nvMsg);
         $nvMsg = str_replace('ô','o', $nvMsg);
         $nvMsg = str_replace('î','i', $nvMsg);
         $key = "46635f08c5ee833a42aa16e3273fd1";
         $api = 'Authorization: Bearer '.$key."";
         // Step 1: Créer la campagne
         $curl = curl_init();
         $datas= [
           'step' => NULL,
           'sender' => $sender,
           'name' => 'SMS GRENIER',
           'campaignType' => 'SIMPLE',
           'recipientSource' => 'CUSTOM',
           'groupId' => NULL,
           'filename' => NULL,
           'saveAsModel' => false,
           'destination' => 'NAT_INTER',
           'message' => $msg,
           'emailText' => NULL,
           'recipients' =>
           [
             [
               'phone' => $tel,
             ],
           ],
           'sendAt' => [],
           'dlrUrl' => NULL,
           'responseUrl' => NULL,
         ];
         curl_setopt_array($curl, array(
           CURLOPT_URL => 'https://api.letexto.com/v1/campaigns',
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_POSTFIELDS =>json_encode($datas),
           CURLOPT_HTTPHEADER => array(
             $api,
             'Content-Type: application/json'
           ),
         ));
         $response = curl_exec($curl);
         curl_close($curl);
         $res = json_decode($response);
         $camp_id = $res->id;

         // Step2: Programmer la campagne
         $curl_send = curl_init();
         curl_setopt_array($curl_send, array(
           CURLOPT_URL => 'https://api.letexto.com/v1/campaigns/'.$camp_id.'/schedules',
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_HTTPHEADER => array(
             $api
           ),
         ));
         $response_send = curl_exec($curl_send);
         curl_close($curl_send);
         return $response_send;
   }
