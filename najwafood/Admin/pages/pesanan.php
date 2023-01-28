<link rel="stylesheet" href="../assets/css/keyboard.css">
<script src="../assets/js/keyboard.js"></script>
<script type="text/javascript" src="../assets/js/keyboard.js"></script>

<section class="section">
    <div class="section-header">
      <h1>Pesanan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Pesanan</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-striped ">
                <thead>
                  <tr>
                    <th scope="col">#No Order</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th >1</th>
                    <td>IDR 240.000</td>
                    <td>Process</td>
                    <td>Dine In</td>
                    <td>
                    <button type="button" class="btn btn-list-done" data-toggle="modal" data-target="#exampleModdal">
                      Done
                    </button>
                  </td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>IDR 140.000</td>
                    <td>Unpaid</td>
                    <td>Take Away</td>
                    <td><a href="#" class="btn btn-list-prosess">Process</a></td>
                  </tr>
                  <tr>
                    <th >3</th>
                    <td>IDR 80.000</td>
                    <td>Done</td>
                    <td>Dine In</td>
                    <td><a href="#" class="btn btn-list-archive">Archive</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- modal -->
  <div class="modal fade" id="exampleModdal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Clo  se">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga</th>
              <th scope="col">QYT</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Ayam Crispy</th>
              <td>IDR 25.000</td>
              <td>5</td>
              <td>IDR 125.000</td>
            </tr>
            <tr>
              <th scope="row">Hamburger</th>
              <td>IDR 30.000</td>
              <td>3</td>
              <td>IDR 90.000</td>
            </tr>
            <tr>
              <th scope="row">Air Mineral</th>
              <td>IDR 5.000</td>
              <td>5</td>
              <td>IDR 25.000</td>
            </tr>
          </tbody>
        </table>
        <table class="table-total">
          <head>
            <title>Penggunaan Atribut Width di HTML</title>
           </head>
           <body>
            <table class="tabel-total" width="300">
          <tr>
            <th></th>
            <td align="right"</td>
            <td>Sub Total</td>
            <td>Rp 240.000</td>
           </tr>
          <tr>
            <th></th>
            <td></td>
            <td>PPN 10%</td>
            <td>Rp 24.000</td>
          </tr>
          <tr>
            <th></th>
            <td></td>
            <td>Total</td>
            <td id = 'totalb'>Rp 264.000</td>
          </tr>
        </table>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto">
        <button type="button" class="btn btn-primary" data-width="300px" data-toggle="modal" data-target="#keyboard">
          Pembayaran
        </button>
        <div class="mt-4"></div>
      </div> 
    </div>
    </div>
    </div>
<!-- modal2 -->
    <div class="modal fade" id="keyboard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No Order : 449</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="text-uang">Uang Tunai</div>
      <input class="inputuang" type="text" id="inputAngka1">
        <div class="keys">
          <button onclick = "buttonkeyboard('1')" data-key='65' class='key__button'>1</button>
          <button onclick = "buttonkeyboard('2')" data-key='65' class='key__button'>2</button>
          <button onclick = "buttonkeyboard('3')" data-key='65' class='key__button'>3</button>
          <button onclick = "buttonkeyboard('4')" data-key='65' class='key__button'>4</button>
          <button onclick = "buttonkeyboard('5')" data-key='65' class='key__button'>5</button>
          <button onclick = "buttonkeyboard('6')" data-key='65' class='key__button'>6</button>
          <button onclick = "buttonkeyboard('7')" data-key='65' class='key__button'>7</button>
          <button onclick = "buttonkeyboard('8')" data-key='65' class='key__button'>8</button>
          <button onclick = "buttonkeyboard('9')" data-key='65' class='key__button'>9</button>
          <button onclick = "buttonkeyboarddel()" data-key='65' class='key__button'>X</button>
          <button onclick = "buttonkeyboard('0')" data-key='65' class='key__button'>0</button>
          <button onclick = "totalkembalian()"  data-key='65' class='key__button' data-toggle="modal" data-target="#finish" >-></button>
      </div>
      </div>
    </div>
   </div>
  <div class="modal fade" id="finish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">No Order : 449</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-kembalian">Kembalian</div>
          <input class="inputuang">
          <div class="d-grid gap-2 col-5 mx-auto">
            <button type="button" class="btn btn-primary" data-width="300px" data-toggle="modal" data-target="#keyboard">
              DONE
            </button>
            <div class="mt-5"></div>
          </div> 
        </div>
      </div>
    </div>
   </div>
  <script src="../assets/js/stisla.js"></script>