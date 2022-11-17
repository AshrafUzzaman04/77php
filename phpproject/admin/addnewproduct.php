<?php
include_once("./header.php");
?>
<div class="container-fluid">
    <div class="row min-vh-100">
        <?php
        include_once("./sidebar.php");
        ?>
        <div class="col-md-10">
            <?php include_once("./navbar.php") ?>
            <h4>Add Product</h4>
            <div class="row">
                <div class="col-md-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" placeholder="Product Name" name="name" class="form-control" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Regular Price" name="rprice" class="form-control" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Discount Price" name="dprice" class="form-control" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Short Description" name="description" required autocomplete="off"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" id="ppimg" name="proImg" required>
                        </div>
                        <button type="submit" name="addpro123" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("./footer.php");
?>