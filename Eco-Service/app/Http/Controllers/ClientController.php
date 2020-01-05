<?php
/**
 * Created by PhpStorm.
 * User: Souhail
 * Date: 05/01/2020
 * Time: 21:27
 */

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Session;
use App\Repository\Client;
use Exception;
use App\Exceptions\monException;

class ClientController extends Controller
{
    public function getById($id) {
        $unClient = DB::table('client')
            ->Select()
            ->where('id', '=', $id)
            ->first();
        return $unClient;
    }

    /**
     * Initialise le formulaire d'authentification
     * @return type View formLogin
     */
    public function getLogin()
    {
        $erreur = "";
        return view('form/formLogin', compact('erreur'));
    }

    public function login()
    {
        $email = Request::input('email');
        $password = Request::input('password');
        $unClient = new Client();
        $connected = $unClient->login($email, $password);
        if ($connected) {
            return view('home');
        } else {
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }

    /**
     * Déconnecte le client authentifié
     * @return type View home
     */
    public function logout()
    {
        $unClient = new Client();
        $unClient->logout();
        return view('home');
    }

    /**
     * Initialise le formulaire d'inscription
     * @return type View formInsertClient
     */
    public function getPostClient()
    {
        $erreur = "";
        return view('form/formInsertClient', compact('erreur'));
    }

    public function postClient()
    {
        try {
            $firstname = Request::input("firstname");
            $lastname = Request::input("lastname");
            $dateofbirth = Request::input("dateofbirth");
            $civility = Request::input("civility");
            $country = Request::input("country");
            $address = Request::input("address");
            $billingaddress = Request::input("billingaddress");
            $deliveryaddress = Request::input("deliveryaddress");
            $postcode = Request::input("postcode");
            $phone = Request::input("phone");
            $email = Request::input("email");
            $category = Request::input("category");
            $socialreason = Request::input("socialreason");
            $siret = Request::input("siret");
            $password = Request::input("password");
            $unClient = new Client();
            $unClient->insertClient($firstname,$lastname,$dateofbirth,$civility,$country,$address,$billingaddress,$deliveryaddress,$postcode,$phone,$email,$category,$socialreason,$siret,$password);
            return redirect('/getLogin');
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('error', compact('erreur'));
        }
    }
}