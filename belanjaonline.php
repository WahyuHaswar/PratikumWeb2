<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Product</label> 
    <div class="col-8">
      <div class="form-check form-check-inline">
        <input name="produk" id="produk_0" type="radio" class="form-check-input" value="tv"> 
        <label for="produk_0" class="form-check-label">TV</label>
      </div>
      <div class="form-check form-check-inline">
        <input name="produk" id="produk_1" type="radio" class="form-check-input" value="kulkas"> 
        <label for="produk_1" class="form-check-label">KULKAS</label>
      </div>
      <div class="form-check form-check-inline">
        <input name="produk" id="produk_2" type="radio" class="form-check-input" value="mesin_cuci"> 
        <label for="produk_2" class="form-check-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

<?php
  $customer = $_POST['customer'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];
  

  
  echo "Customer: " . $customer . "<br>";
  echo "produk: " . $produk . "<br>";
  echo "jumlah: " . $jumlah . "<br>";
  
 ?>