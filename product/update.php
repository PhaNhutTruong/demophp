<?php
$id = $_GET['id'];
$sql_up = "SELECT * FROM products where pro_id = $id";

    $query_up = mysqli_query($connect, $sql_up);

    $row_up = mysqli_fetch_assoc($query_up);

if(isset($_POST['sbm'])){
    $pro_name = $_POST['pro_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET pro_name = '$pro_name', price=$price ,quantity=$quantity ,description='$description' WHERE pro_id = $id";

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
                    <input type="text" name = pro_name class="form-control" required value = "<?php echo $row_up['pro_name'];?>">
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name = price class="form-control" required value = "<?php echo $row_up['price'];?>">
                </div>

                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="text" name = quantity class="form-control" required value = "<?php echo $row_up['quantity'];?>">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name = description class="form-control" required value = "<?php echo $row_up['description'];?>">
                </div>

                <button name="sbm" class="btn btn-primary" type=submit >Sửa</button>
            </form>
        </div>
    </div>
</div>