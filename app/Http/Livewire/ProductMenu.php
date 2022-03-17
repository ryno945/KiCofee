<?php

namespace App\Http\Livewire;

use App\Produk;
use App\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class ProductMenu extends Component
{
    use WithPagination;

    public $search, $menu;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($menuId)
    {
        $menuDetail = Menu::find($menuId);

        if($menuDetail) {
            $this->menu = $menuDetail;
        }
    }

    public function render()
    {
        if($this->search) {
            $produks = Produk::where('menu_id', $this->menu->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $produks = Produk::where('menu_id', $this->menu->id)->paginate(8);
        }
        
     return view('livewire.product-index',[
            'produks' => $produks
        ]);
    }
}
