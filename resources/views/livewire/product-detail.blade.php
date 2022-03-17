    <div class="container">
        <div class="col mt-4 mb-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }} " class="text-dark">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('products') }} " class="text-dark">List Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                </ol>
              </nav>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card gambar-product ">
                    <div class="card-body">
                        <img src="{{ url('assets\produk') }}/{{ $produk -> gambar}}" class="img-fluid">
                    </div>
                </div>
            </div>
        
           
    
                <div class="row">
                    <div class="col">
                        <form wire:submit.prevent="masukkanKeranjang"> 
                        <table class="table" style="border-top : hidden">
                           <div class="row">
                               <div class="col">
                                <h2><strong>{{ $produk->nama}}</strong></h2>
                                <h2>Rp. {{ number_format($produk -> harga) }}</h2>  
                               </div>
                               <div class="col">
                                <h2>
                                    @if($produk->is_ready == 1)
                                    <span class="badge badge-success">Ready</span>
                                    @else
                                    <span class="badge badge-danger">Stok Habis</span>
                                    @endif
                                </h2>
                               </div>
                            </div>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td>{{ $produk->jenis }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td><input id="jumlah_pesanan" type="text" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>
    
                                    @error('jumlah_pesanan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-dark btn-block" @if($produk->is_ready !== 1) disabled @endif><i class="gg-shopping-cart"></i>  Masukkan Keranjang</button>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
</div>