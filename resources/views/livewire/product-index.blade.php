<div class="container">
    <div class="row">
        <div class="col mb-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }} " class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List Menu</li>
                </ol>
            </nav>
      </div>
</div>
    
<div class="row">
  <div class="col-md-9">
    <h2>List Menu</h2>
  </div>
    <div class="col-md-3">
      <div class="input-group mb-3">
          <input wire:model="search" type="text" class="form-control" placeholder="Search...." aria-label="Search...." aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
              <i class="gg-search"></i>
            </span>
        </div>
      </div>
    </div>

    <section class="product mb-5">
      <div class="row mt-4">
        @foreach ($produks as $produk)
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <img src="{{ url('assets\produk') }}/{{ $produk -> gambar}}" class="img-fluid">
              <div class="row md-2"> 
                <div class="col-md-12">
                <h5><strong>{{ $produk->nama}}</strong></h5>
                <p>Rp. {{ number_format($produk -> harga) }} </p>
                </div>
              </div>
              <div class="row md-2"> 
                <div class="col-md-12">
                  <a href="{{ route('products-detail', $produk->id)}}" class="btn btn-dark btn-block"><i class="gg-eye"></i> Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        <div class="row">
          <div class="col">
          {{ $produks->links() }}
        </div>
    </section>
</div>
