<div class="container">
    <div class="col mt-4 mb-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }} " class="text-dark">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('keranjang') }} " class="text-dark">Keranjang</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
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
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark"> Kembali </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk Pembayaran Silahkan dapat transfer di rekening dibawah ini sebesar Rp. 15,000</p>
            <div class="media">
                <img src="{{ url('assets\bri.png') }}" alt="Bank BRI" width="55px">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="media-body">
                                <h5 class="mt-0">BANK BRI</h5>
                                No. Rekening 028905-887-980 atas nama <strong>Muhammad Satya Pamungkas</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">
                <div class="form-group">
                    <label for="">No. HP</label>
                    <input id="nohp" type="text" class="form-control" autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control"></textarea>
                </div>
                <a href="{{ route('history') }}" class="btn btn-success btn-block"> Checkout </a>
            </form>
        </div>
    </div>
</div>