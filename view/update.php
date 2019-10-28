<div class="modal-dialog">
    <div class="modal-content">
        <form action="index.php?procUpdate=1" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Update Book</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo encryptor('encrypt', $row[0]); ?>">
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $row[1]; ?>" require>
                </div>
                <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row[2]; ?>" require>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?php echo $row[3]; ?>">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $row[4]; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $row[5]; ?>">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-submit" name="save">Update</button>
            </div>
        </form>
    </div>
</div>