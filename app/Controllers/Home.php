<?php

namespace App\Controllers;

use App\Models\promotion_model;

class Home extends BaseController
{
    public function index()
    {
        $model_promotion = new promotion_model();

        // C R U D

        // CREATE -> insert
        /*$donnees = ['intitule' => 'Licence 3'];
        $model_promotion -> insert($donnees);*/

        // READ -> find, findAll
        /*$promotions = model_promotion->findAll();

        var_dump($promotions);*/

        // UPDATE -> update
        /*$donnees = ['intitule' => 'Licence 3'];
        $model_promotion -> update (8, $donnees);*/

        // DELETE -> delete
        /*$model_promotion->delete(9)0*/;


        return view('accueil');
    }

    public function acceuil(){
        return view("accueil");
    }

    public function profile(){
        return view("profile_etudiant");
    }

    public function promotion(){
        return view("promotion_prrofile");
    }
}
