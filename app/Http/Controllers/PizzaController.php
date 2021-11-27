<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function detail($id)
    {
        return view('details', ['id' => $id]);
    }

    public function pizzas() 
    {
        $pizzas = [
            ['type' => 'پیتزا گوشت مرغ', 'base' => 'پنیری'],
            ['type' => 'پیتزا گوشت ماهی', 'base' => 'گوشت ماهی و پنیری'],
            ['type' => 'پیتزا اناناس', 'base' => 'اناناس و گوشت مرغ'],
        ];
    
        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }
}
