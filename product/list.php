<?php
    $sql = "SELECT * FROM products";
    $query = mysqli_query($connect,$sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($query)){
                    ?>
                        <td><?php echo $row['pro_id']?></td>
                        <td><?php echo $row['pro_name']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo $row['quantity']?></td>
                        <td><?php echo $row['description']?></td>
                        <td>
                            <a href="index.php?page_layout=update&id=<?php echo $row['pro_id'];?>">Update</a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $row['pro_name'];?>')" href="index.php?page_layout=delete&id=<?php echo $row['pro_id'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=add">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc muốn xóa sản phẩm " + name + "?");
    }
</script>