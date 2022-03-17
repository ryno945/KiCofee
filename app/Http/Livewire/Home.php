<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Menu;
use App\Produk;
use App\User; 

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => Produk::take(4)->get(),
            'menus' => Menu::all()
        ]);
    }
}
