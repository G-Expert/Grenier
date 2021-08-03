<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route d'oublie du mot de passe
Route::get('/forgotpass', function () {
    return view('forgotpass');
});

// Route du backoffice
Route::get('/kmt', function () {
    return view('admin');
});

// Route du dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route transporteur
Route::get('/transporteur', function () {
    return view('transporteur');
});

// Route de connection
Route::get('/sign', function () {
    return view('sign');
});

// Route ouverture de compte
Route::get('/signup', function () {
    return view('signup');
});

// Route qui-sommes-nous
Route::get('/about', function () {
    return view('about');
});

/*--------------------
 GESTION ROUTE ADMIN
----------------------**/

// Nouvelle commande
Route::get('/new_commande', function () {
    return view('Admin_new_commande');
});

// Remboursées commandes
Route::get('/rembourse_commande', function () {
    return view('Admin_rembourse_commande');
});

// Livrées commandes
Route::get('/livre_commande', function () {
    return view('Admin_livre_commande');
});

// Soldées commandes
Route::get('/solde_commande', function () {
    return view('Admin_solde_commande');
});

// Clients liste
Route::get('/clients_liste', function () {
    return view('Admin_clients_liste');
});

// Clients bloqué
Route::get('/clients_bloque', function () {
    return view('Admin_clients_bloque');
});

// Courses publiées
Route::get('/course_pub', function () {
        return view('Admin_course_pub');
});

// Courses bloquées
Route::get('/course_lock', function () {
    return view('Admin_course_lock');
});

// Compte transporteur demande
Route::get('/transp_demande', function () {
    return view('Admin_transp_demande');
});

// Compte transporteur validé
Route::get('/transp_valide', function () {
    return view('Admin_transp_valide');
});

// Compte transporteur bloque
Route::get('/transp_lock', function () {
    return view('Admin_transp_lock');
});

// Zone de livraison
Route::get('/zone', function () {
    return view('Admin_zone');
});

// Coordonées adminstrateurs
Route::get('/zone', function () {
    return view('Admin_zone');
});

// Gestion des coordonnées administrateurs
Route::get('/coordonnes', function () {
    return view('Admin_coordonnees');
});

// Gestion des unités sms
Route::get('/unite_sms', function () {
    return view('Admin_unitesms');
});





/*--------------------
 GESTION ROUTE CLIENT
----------------------**/

/*--------------------
 GESTION ROUTE MODULE
----------------------**/
  # Module d'authentification
    // Création de compte grenier
     Route::get('creatcount', [CompteController::class, 'creatcount']);

    // Connection au compte
     Route::get('login',[CompteController::class, 'login']);

    // Mot de pass oublié
    Route::get('passRecp',[CompteController::class, 'passRecp']);

    // Connection au backoffice
    Route::get('logAd',[CompteController::class, 'logAd']);

   // Creation de compte transporteur
   Route::post('addtransporteur',[CompteController::class, 'addtransporteur']);

   // Déconnection du Compte
   Route::get('logout',[CompteController::class, 'logout']);

 # Module de gestion de compte client
   // Mise à jour du compte client
   Route::post('upcompte',[CompteController::class, 'upcompte']);

   // Accès au compte
   Route::get('mon_comptes',[CompteController::class, 'mon_comptes']);

   // Compte devenir transporteur
   Route::post('begintransp',[CompteController::class, 'begintransp']);

   // Poster une offre
   Route::post('addOffre',[CompteController::class, 'addOffre']);

   // Supprimer une offre::Compte client
   Route::get('delOf',[CompteController::class, 'delOf']);

#Module de gestion de la vue principale
   //Infos de reservation
   Route::get('readoff',[CompteController::class, 'readoff']);
   //Lancement de la reservation
   Route::get('saveReserv',[CompteController::class, 'saveReserv']);

#Filtre de recherche
  Route::post('grenier_check',[CompteController::class, 'grenier_check']);
