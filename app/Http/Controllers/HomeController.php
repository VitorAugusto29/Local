<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function photo(Request $request)
{
 // Armazenar imagem
 $path = $request->photo->photo('public/file.jpg');

 return $path;
}

}
