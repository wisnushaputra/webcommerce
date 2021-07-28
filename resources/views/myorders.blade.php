@extends('master')
@section('content')
 <div class=" custom-product">
   
      {{-- Form untuk halaman cartlist --}}

     <div class="col-sm-10">
         <div class="trending-wrapper ">
       <h2>List Produk Orderan Anda</h2>
       <br>
   
       <br><br>
            @foreach ($orders as $item)
            <div class="row search-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}">
          
                  </a>
             </div>
             <div class="col-sm-7">
                    <div class="">
                      <h2>Nama : {{ $item->nama }}</h2>
                      <h5>Alamat : {{ $item->address }}</h5>
                      <h5>Status Pengiriman : {{ $item->status }}</h5>
                      <h5>Status pembayaran : {{ $item->payment_status }}</h5>
                      <h5>Jenis Pembayaran : {{ $item->payment_method }}</h5>
                      
                      
                    </div>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>{{ $item->harga }}</h3>                    
                      
                    </div>
             </div>
           
                  
             </div>
              
            @endforeach  
          </div>
      
     </div>
</div>   
@endsection