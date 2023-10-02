<?php
require 'inc/header.php';
require '../php/dbconnect.php';

// Thực hiện truy vấn
$query = "SELECT products.product_id, products.product_code, products.product_cat, products.product_sub_cat, products.product_brand, product_title, products.product_price, products.qty, products.product_status, products.featured_image, sub_categories.sub_cat_title, brands.brand_title FROM products
          LEFT JOIN sub_categories ON products.product_sub_cat = sub_categories.sub_cat_id
          LEFT JOIN brands ON products.product_brand = brands.brand_id
          ORDER BY products.product_id DESC LIMIT 10";

$result = $conn->query($query);

?>

    <div class="admin-content-container">
        <h2 class="admin-heading">All Products</h2>
        <?php
        if ($result->num_rows > 0) { ?>
            <table class="products-table">
                <thead>
                    <tr class="products-table__header-row">
                        <th class="products-table__header-cell">#</th>
                        <th class="products-table__header-cell">Title</th>
                        <th class="products-table__header-cell">Category</th>
                        <th class="products-table__header-cell">Brand</th>
                        <th class="products-table__header-cell">Price</th>
                        <th class="products-table__header-cell">Quantity</th>
                        <th class="products-table__header-cell">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr class="products-table__row">
                            <td class="products-table__cell"><b><?php echo 'PDR00' . $row['product_id']; ?></b></td>
                            <td class="products-table__cell"><?php echo $row['product_title']; ?></td>
                            <td class="products-table__cell"><?php echo $row['sub_cat_title']; ?></td>
                            <td class="products-table__cell"><?php echo $row['brand_title']; ?></td>
                            <td class="products-table__cell"><?php echo $row['product_price']; ?></td>
                            <td class="products-table__cell"><?php echo $row['qty']; ?></td>
                            <td class="products-table__cell">
                                <?php if ($row['featured_image'] != '') { ?>
                                    <img src="../image/<?php echo $row['featured_image']; ?>" alt="<?php echo $row['featured_image']; ?>" width="50px" />
                                <?php } else { ?>
                                    <img src="image/index.png" alt="" width="50px" />
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="not-found products-table__not-found">!!! No Products Found !!!</div>
        <?php } ?>
        
        <a href="add_product.php"><button>Thêm</button></a>
        <button>Sửa</button>
        <button>Xóa</button>
    </div>

<?php
require 'inc/footer.php'
?>
