<?= $title; ?>
<div class="panel-body">
        <table class="table table-scripped table-borderd">
        <tr>
        	<td>Product ID</td>
        	<td>Product Name</td>
        	<td>Category Name</td>
        	<td>Price</td>
        	<td>Quantity</td>
        	<td>Created_At</td>
            <td>Action</td>
        </tr>
        	<?php foreach($product as $pro) : ?>
        <tr>
        	<td><?php echo $pro['product_id']; ?></td>
        	<td><?php echo $pro['product_name']; ?></td>
        	<td><?php echo $pro['category_name']; ?></td>
        	<td><?php echo $pro['product_price']; ?></td>
        	<td><?php echo $pro['product_quantity']; ?></td>
        	<td><?php echo $pro['created_at']; ?></td>
            <td><a class=" btn btn-danger" href="<?php echo base_url(); ?>product/<?php echo $pro['slug'] ?>">More Details..</a></td>

        </tr>
<?php endforeach; ?>
    </table>
</div>

