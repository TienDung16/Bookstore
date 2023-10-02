<?php
    require 'inc/header.php';
    require '../php/dbconnect.php';
?>
<div class="admin-content-container">
    <h2 class="admin-heading">Add New Product</h2>
    <form id="createProduct" class="add-post-form row" method="post" enctype="multipart/form-data">
        <div class="col-md-9">
            <div class="form-group">
                <label class="form-label" for="product_title">Product Title</label>
                <input type="text" class="form-control product-title" name="product_title" id="product_title" placeholder="Product Title" required />
            </div>
            <div class="form-group category">
                <label class="form-label" for="product_category">Product Category</label>
                <?php
                $result = $conn->query("SELECT * FROM categories ORDER BY cat_id DESC");
                $categories = $result->fetch_all();?>
                <select class="form-control product-category" name="product_cat" id="product_category">
                    <option value="" selected disabled>Select Category</option>
                    <?php if ($categories > 0) {  
                        foreach($categories as $category) { ?>
                        <option value="<?php echo $category[0]; ?>"><?php echo $category[1]; ?></option>
                        <?php } 
                        } ?>
                </select>
            </div>
            <div class="form-group sub-category">
                <label class="form-label" for="product_sub_cat">Product Sub-Category</label>
                <select class="form-control product-sub-category" name="product_sub_cat" id="product_sub_cat">
                    <option value="" selected disabled>First Select Category</option>
                </select>
            </div>
            <div class="form-group brand">
                <label class="form-label" for="product_brand">Product Brand</label>
                <select class="form-control product-brands" name="product_brand" id="product_brand">
                    <option value="" selected disabled>First Select Sub Category</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="product_desc">Product Description</label>
                <textarea class="form-control product-description" name="product_desc" id="product_desc" rows="8" cols="80" required></textarea>
            </div>
            <div class="show-error"></div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label" for="featured_img">Featured Image</label>
                <input type="file" class="form-control product-image" required name="featured_img" id="featured_img">
                <img id="image" src="" width="150px" />
            </div>
            <div class="form-group">
                <label class="form-label" for="product_price">Product Price</label>
                <input type="text" class="form-control product-price" name="product_price" id="product_price" required value="">
            </div>
            <div class="form-group">
                <label class="form-label" for="product_qty">Available Quantity</label>
                <input type="number" class="form-control product-qty" name="product_qty" id="product_qty" required value="">
            </div>
            <div class="form-group">
                <label class="form-label" for="product_status">Status</label>
                <select class="form-control product-status" name="product_status" id="product_status">
                    <option selected value="1">Publish</option>
                    <option value="0">Draft</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn add-new" name="submit" value="Submit">
            </div>
        </div>
    </form>
</div>

<?php
    require 'inc/footer.php'
?>
