<?php
/**
 * Created by PhpStorm.
 * User: Souhail
 * Date: 05/01/2020
 * Time: 21:00
 */

namespace App\Repository;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Exceptions\MonException;


class Client extends Model
{
    //On déclare la table client
    protected $table = 'client';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'dateofbirth',
        'civility',
        'country',
        'address',
        'billingaddress',
        'deliveryaddress',
        'postcode',
        'phone',
        'email',
        'category',
        'socialreason',
        'siret',
        'password'
    ];

    public function login($email, $password) {
        $connected = false;
        $client = DB::table('client')
            ->select()
            ->where('email', '=', $email)
            ->first();
        if ($client) {
            if ($client->mdpcli == md5($password)) {
                Session::put('id', $client->id);
                $connected = true;
            }
        }
        return $connected;
    }

    public function logout(){
        Session::put('id', 0);
    }

    public function insertClient($firstname,$lastname,$dateofbirth,$civility,$country,$address,$billingaddress,$deliveryaddress,$postcode,$phone,$email,$category,$socialreason,$siret,$password){
        try{
            DB::table('client')->insert(
                [
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'dateofbirth'=>$dateofbirth,
                    'civility'=>$civility,
                    'country'=>$country,
                    'address'=>$address,
                    'billingaddress'=>$billingaddress,
                    'deliveryaddress'=>$deliveryaddress,
                    'postcode'=>$postcode,
                    'phone'=>$phone,
                    'email'=>$email,
                    'category'=>$category,
                    'socialreason'=>$socialreason,
                    'siret'=>$siret,
                    'password'=>md5($password)
                ]);
        }catch(\Illuminate\Database\QueryException $e){
            throw new MonException($e->getMessage(),5);
        }
    }

}