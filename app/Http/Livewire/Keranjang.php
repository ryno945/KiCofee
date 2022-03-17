<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
class Keranjang extends Component
{
    protected $pesanan;
    protected $pesanan_detail = [];
    public function render()
    {
        if(Auth::user()){
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if($this->pesanan)
            {
                $this->pesanan_detail = PesananDetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        }
        
        return view('livewire.keranjang');
    }
}
