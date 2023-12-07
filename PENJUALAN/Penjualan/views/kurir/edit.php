<?php

include_once '../../config.php';
include_once '../../controllers/KurirController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $kurirController = new KurirController($db);
    $kurirData = $kurirController->getKurirById($id);

    if ($kurirData) {
        if (isset($_POST['submit'])) {

            $nama = $_POST['nama'];
            $no_telepon = $_POST['no_telepon'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $kurirController->updateKurir($id, $nama, $no_telepon, $email, $username, $password);

            if ($result) {
                header("location:kurir");
            } else {
                header("location:edit.php");
            }
        }

   } else {
        echo " Kurir tidak ditemukan";
   }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
<div class="mx-3 border border-secondary-subtle px-3 mt-5 " style="background-color: #EEEEEE;">
<h3 class="text-center">Edit Data Kurir</h3>
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

<?php
if ($kurirData) {
    ?>
        <div class="container mt-5">
            <form action="" method="post" class="edit-form">
                <?php
                foreach ($kurirData as $d => $value) {
                ?>
                    <div class="form-group row mb-3">
                        <label for="<?php echo $d ?>" class="col-sm-2 col-form-label"><?php echo $d ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="<?php echo $d ?>" name="<?php echo $d ?>" value="<?php echo $value ?>">
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="button-container">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                            </svg>Simpan</button>

                        <a href="kurir" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                            </svg>Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }
?>
    