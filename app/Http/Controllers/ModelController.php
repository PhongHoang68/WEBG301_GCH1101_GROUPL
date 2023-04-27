<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use App\Repository\AnimalRepos;
=======
>>>>>>> 57dc11e188e245114c6eb95fc2e65138b10b99d6
>>>>>>> c48af0118a68d27d7c04ae60895dbbb29f18426b
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('Zoo.ClientView.model');
=======
<<<<<<< HEAD
        $animal = AnimalRepos::getAllAnimalsWithCategories();
        return view('Zoo.ClientView.index',
            [
                'animal' => $animal,
            ]);
=======
        return view('Zoo.ClientView.model');
>>>>>>> 57dc11e188e245114c6eb95fc2e65138b10b99d6
>>>>>>> c48af0118a68d27d7c04ae60895dbbb29f18426b
    }


}
