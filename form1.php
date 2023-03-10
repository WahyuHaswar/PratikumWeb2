<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form>
	<h1>Belanja Online</h1>
	<hr>
      <div class="form-group row">
        <label for="text" class="col-2 col-form-label">Customer</label> 
        <div class="col-10">
          <input id="text" name="text" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2">Pilih Product</label> 
        <div class="col-10">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
            <label for="radio_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
            <label for="radio_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-2 col-form-label">Jumlah Beli</label> 
        <div class="col-10">
          <input id="text1" name="text1" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-2 col-10">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </body>
</html>
