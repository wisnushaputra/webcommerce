@extends('master')
@section('content')
 <div class=" custom-product">
   
      {{-- Form untuk halaman cartlist --}}

     <div class="col-sm-10">
         <div class="trending-wrapper ">
       <h2>List Produk Dalam Keranjang Anda</h2>
       <br>
       <a class="btn btn-success" href="ordernow">Pesan Sekarang</a>
       <br><br>
            @foreach ($products as $item)
            <div class="row search-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}">
          
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{ $item->nama }}</h2>
                      <h5>{{ $item->deskripsi }}</h5>
                      
                    </div>
             </div>
             <div class="col-sm-3">
                    <div class="">
                      <h3>{{ $item->harga }}</h3>                    
                      
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Hapus Dari Keranjang</a>
               </div>       
                    
                  
             </div>
              
            @endforeach  
          </div>
          <a class="btn btn-success" href="ordernow">Pesan Sekarang</a>
     </div>
</div>   
@endsection