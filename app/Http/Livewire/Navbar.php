<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Menu;
use App\User;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;
class Navbar extends Component
{
    public $jumlah = 0;
    public function mount()
    {
        if(Auth::user()){
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if($pesanan){
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            } 
        }
    }
    public function render()
    {
        return view('livewire.navbar',[
            'menus' => Menu::all(),
            'jumlah_pesanan' => $this->jumlah,
        ]);
    }
}
