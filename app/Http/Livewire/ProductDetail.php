<?php

namespace App\Http\Livewire;
use App\Menu;
use App\Produk;
use App\Pesanan;
use App\PesananDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $produk, $jumlah_pesanan;
    
    public function mount($id)
    {
        $produkDetail = Produk::find($id);

        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }

    public function masukkanKeranjang(){
        $this->validate([
            'jumlah_pesanan' => 'require'
        ]);
        
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        if(!empty($this->nama)){
            $total_harga = $this->jumlah_pesanan*$this->produk->harga;
        }else {
            $total_harga = $this->jumlah_pesanan*$this->produk->harga;
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->$id)->where('status', 0)->first();

        if(empty($pesanan)){
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);
            
            $pesanan = Pesanan::where('user_id', Auth::user()->$id)->where('status', 0)->first();
            $pesanan->kode_pemesanan ='kc-'.$pesanan->$id;
            $pesanan->update();

        } else{
            $pesanan->$total_harga = $pesanan->$total_harga+$total_harga;
            $pesanan->update(); 
        }

        PesananDetail::create([
            'produk_id' => $this->produk->id,
            'pesanan_id' => $pesanan ->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga' => $total_harga,
        ]);

        $this->emit('masukKeranjang');

        session()->flash('message', 'Sukses Masuk Keranjang');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail');
        
    }
}
