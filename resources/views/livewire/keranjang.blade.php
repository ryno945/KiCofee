<div class="container">
    <div class="col mt-4 mb-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }} " class="text-dark">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
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
    
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Total Harga</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <tr>
                                    <td colspan="6"></td>
                                    <td colspan="2">
                                        <a href="{{ route('checkout') }}" class="btn btn-success btn-blok">
                                            <i class="fas fa-arrow-right"></i> Check Out
                                        </a>
                                    </td>
                                </tr>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>