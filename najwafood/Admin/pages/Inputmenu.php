<link rel="stylesheet" href="../assets/css/keyboard.css">
<link rel="stylesheet" href="../assets/js/keyboard.js">

<section class="section">
    <div class="section-header">
      <h1>Input Menu</h1>
    </div>
    <div class="section-body">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="../be/inputmenu-pros.php" method="post">
                <div class="form-group row">
                  <label for="katagori" class="col-3 col-form-label ">Katagori</label> 
                  <div class="col-9">
                    <select id="katagori" name="katagori" required="required" class="custom-select ">
                      <option value="Minuman">Minuman</option>
                      <option value="Makanan">Makanan</option>
                      <option value="Snack">Snack</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama_menu" class="col-3 col-form-label">Nama Menu</label> 
                  <div class="col-9">
                    <input id="nama_menu" name="nama_menu" placeholder="Burger" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="HARGA" class="col-3 col-form-label">Harga</label> 
                  <div class="col-9">
                    <input id="HARGA" name="HARGA" placeholder="harga" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                <label class="col-4">Status</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="status" id="radio_0" type="radio" class="custom-control-input" value="Ready" required="required"> 
                      <label for="radio_0" class="custom-control-label">Ready</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="status" id="radio_1" type="radio" class="custom-control-input" value="Not Ready" required="required"> 
                      <label for="radio_1" class="custom-control-label">Not Ready</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="HARGA" class="col-3 col-form-label">Image Menu</label> 
                  <div class="col-9">
                    <input id="Image" name="Image" placeholder="Image" type="file" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../assets/js/stisla.js"></script>