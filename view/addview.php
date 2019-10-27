<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>Input Data Barang</title>

				<link href="style/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="style/style.css">

		</head>
		<body>
				<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
								<div class="navbar-header">
										<a class="navbar-brand" href="index.php">
												<i class="glyphicon glyphicon-check"></i>
													Aplikasi CRUD PHP Menggunakan Metode MVC
										</a>
								</div>
						</div>
				</nav>

				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="page-header">
												<h4>
														<i class="glyphicon glyphicon-check"></i> Input Data Barang
												</h4>
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Input Data Barang</h3>
												</div>

												<div class="panel-body">
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Kode Barang</label>
                                        <input type="text" class="form-control" name="kode_barang" autocomplete="off" maxlength="10" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" name="nama_barang" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Jual</label>
                                        <input type="text" class="form-control" name="harga_jual" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Beli</label>
                                        <input type="text" class="form-control" name="harga_beli" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Stok Barang</label>
                                        <input type="text" class="form-control" name="stok" autocomplete="off" required/>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
                                        <button type="reset" class="btn btn-danger btn-reset" data-dismiss="modal" aria-hidden="true">Batal</button>
                                    </div>

                                </form>
                            </div>
												</div>
										</div>
								</div>
						</div>
				</div>

		</body>
</html>

<?php

    if(isset($_POST['simpan'])){
        $main = new controller();
        $main->insert();
    }

?>
