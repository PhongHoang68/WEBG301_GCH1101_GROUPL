<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Repository\AnimalRepos;
=======
>>>>>>> 57dc11e188e245114c6eb95fc2e65138b10b99d6
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $animal = AnimalRepos::getAllAnimalsWithCategories();
        return view('Zoo.ClientView.index',
            [
                'animal' => $animal,
            ]);
=======
        return view('Zoo.ClientView.model');
>>>>>>> 57dc11e188e245114c6eb95fc2e65138b10b99d6
    }


}
