@extends('master')
@section('content')
 <div class=" custom-product">
   
      {{-- Form untuk halaman search --}}
     <div class="col-sm-4">
         <a href="#">Filter</a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Hasil Dari Produk Yang Anda Cari</h4>
            @foreach ($products as $item)
            <div class="search-item">
              <a href="detail/{{ $item['id'] }}">
              <img class="trending-image" src="{{ $item ['gallery'] }}">
              <div class="">
                <h2>{{ $item['nama'] }}</h2>
                <h5>{{ $item['deskripsi'] }}</h5>
                
              </div>
            </a>
            </div>   
            @endforeach  
          </div>
     </div>
</div>   
@endsection