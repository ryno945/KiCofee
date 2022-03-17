<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Produk;
class ProductIndex extends Component
{
    use WithPagination;
    public function updatingSearch(){
        $this->resetPage();
    }
    public $search;
    protected $updateQueryString = ['search'];
    public function render()
    {
        if($this->search) {
            $produks = Produk::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else{
            $produks = Produk::paginate(8);
        }
        
        return view('livewire.product-index',[
            'produks' => $produks
        ]);
    }
}
