<div class="container">
  <div class="banner">
    <img src="{{ url ('assets\slider\slider.png') }}" alt="100">
  </div>

  <section class="pilih-menu mt-4">
    <h3><strong>Pilih Menu</strong></h3>
    <div class="row mt-4">
      @foreach ($menus as $menu)
      <div class="col">
       <a href="{{ route('products-menu', $menu->id )}}">
        <div class="card">
          <div class="card-body text-center">
            <img src="{{ url('assets\menu') }}/{{ $menu -> gambar}}" class="img-fluid">
          </div>
        </div>
       </a>
      </div>
      @endforeach
  </section>

  <section class="product mt-5 mb-5">
    <h3><strong>Best Product</strong>
      <div class="row md-2"> 
        <div class="col-md-12">
        <a href="{{ route('products') }}" class="btn btn-dark float-right"></i>Lihat Semua</a>
      </div>
    </div>
    </h3>
    <div class="row mt-4">
      @foreach ($produks as $produk)
      <div class="col-md-3">
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
  </section>
</div>
