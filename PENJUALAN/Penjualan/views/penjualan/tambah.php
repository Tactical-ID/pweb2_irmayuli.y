<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<div class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;">
<h3 class="text-center">Tambah Data Penjualan</h3>
    <div class="container px-5 d-flex justify-content-center align-items-center">
        <img
            class="mb-5"
            src="logoo.png"
            alt=""
            width="180"
            height="180"
            style="margin: 2%"
         />
    </div>
<form action="proses_tambahpenjualan" method="post">

<div class="mb-4">
    <label class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="tanggal">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Admin</label>
    <input type="text" class="form-control" name="nama admin">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="nama pelanggan">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama barang">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Kurir</label>
    <input type="text" class="form-control" name="nama kurir">
  </div>
  <div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <div class="mb-3">
    <label class="form-label">Jumlah</label>
    <input type="text" class="form-control" name="jumlah">
  </div>
  <div class="mb-3">
    <label class="form-label">Sub Total</label>
    <input type="text" class="form-control" name="sub total">
  </div>
  
  <div class="button-container">
    <button type="submit" name="submit" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
        </svg>Simpan</button>

    <a href="penjualan" class="btn btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
        </svg>Kembali</a>
</div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>