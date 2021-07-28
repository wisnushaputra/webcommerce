@extends('master')
@section('content')
 <div class=" custom-product">
   
      {{-- Form untuk halaman cartlist --}}
     <div class="col-sm-10">
        <table class="table">
      
            <tbody>
              <tr>
                <td>Harga barang</td>
                <td>Rp. {{ $total }}.000</td>
                
              </tr>
              <tr>
                <td>Pengiriman</td>
                <td>Rp. 25.000</td>
              
              </tr>
              <tr>
                <td>Total pembayaran</td>
                <td>Rp. {{ $total + 25.000 }}.000</td>
              
              </tr>
       
            </tbody>
          </table>
            <div>
                <form action="/orderplace" method="POST">
                    <div class="form-group">
                     @csrf
                      <textarea name="address" placeholder="Masukan alamat anda" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Jenis Pembayaran</label> <br> <br>
                        <input type="radio" value="cash" name="payment"><span> Pembayaran Online </span> <br> <br>
                        <input type="radio" value="cash" name="payment"><span> Chat via whatsapp </span> <br> <br>
                        <input type="radio" value="cash" name="payment"><span> Sistem COD </span> <br> <br>
                        
                    </div>
                  
                    <button type="submit" class="btn btn-default">Pesan Sekarang</button>
                  </form>
            </div>
     </div>
</div>   
@endsection