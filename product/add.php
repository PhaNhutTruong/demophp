<?php
if(isset($_POST['sbm'])){
    $pro_name = $_POST['pro_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (pro_name,price,quantity,description) 
    VALUES ('$pro_name',$price,$quantity,'$description')";

    $query = mysqli_query($connect, $sql);

    header('location: index.php?page_layout=list');
    
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name = pro_name class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name = price class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="text" name = quantity class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name = description class="form-control">
                </div>

                <button name="sbm" class="btn btn-primary" type=submit >Thêm</button>
            </form>
        </div>
    </div>
</div>