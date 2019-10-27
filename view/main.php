<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <button type="button" onclick="add()" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal" >
                    <i class="glyphicon glyphicon-plus"></i> Tambah
            </button>
            <table class="table table-striped table-hover mt-3">
                    <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Aksi</th>
                            </tr>
                    </thead>

                    <?php

                            while($row = $this->model->fetch($book_data)){
                                $id_enc = encryptor('encrypt', $row[0]);
                                echo "
                                    <tr>
                                            <td>$row[1]</td>
                                            <td>$row[2]</td>
                                            <td>$row[3]</td>
                                            <td>$row[4]</td>
                                            <td>$row[5]</td>
                                            <td>
                                                    <div class=''>
                                                            <button class='btn btn-success btn-sm' onclick=\"update('$id_enc')\" href='index.php?u=$id_enc' data-toggle='modal' data-target='#modal'>
                                                                    Edit
                                                            </button>
                                                            <a href='index.php?delete=$id_enc' onClick=\"return confirm('Are you sure delete $row[2] ?')\" data-toggle='tooltip' data-placement='top' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
                                                                    Delete
                                                            </a>
                                                    </div>
                                            </td>
                                    </tr>
                                ";
                            }

                        ?>

            </table>
        </div>
    </div>
</div>