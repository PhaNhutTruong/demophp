<?php
    $sql = "SELECT * FROM products";
    $query = mysqli_query($connect,$sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header col d-flex justify-content-center">
            <h2>Danh sách sản phẩm</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="input-group col d-flex justify-content-end mb-3">
            <input type="text" class="" placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
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
                    <td class="text-center">
                        <a href="index.php?page_layout=update&id=<?php echo $row['pro_id'];?>" class="btn btn-warning"
                            role="button">Update</a>
                    </td>
                    <td class="text-center">
                        <a onclick="return Del('<?php echo $row['pro_name'];?>')"
                            href="index.php?page_layout=delete&id=<?php echo $row['pro_id'];?>" class="btn btn-danger"
                            role="button">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="index.php?page_layout=add">Thêm mới</a>
    </div>
</div>
</div>
<script>
function Del(name) {
    return confirm("Bạn có chắc muốn xóa sản phẩm " + name + "?");
}
</script>