<h1><?= $title; ?></h1>
<div class="content-wrapper" >
  <div>
     
    </section>
  </div>
      <div class="col-md-9" >

    
           
         <?php echo validation_errors(); ?>
<?php echo form_open_multipart('sale/sale');?>
  <div class="form-group ">
                      <label >Title <span class="required">*</span></label>

                      <div class="col-lg-10">
                        <input class="form-control"  name="title" placeholder="title" required/>
                      </div>
                      </div>
			
			<div class="form-group ">
                      <label form="gender" class="control-label col-lg-2">Customer <span>*</span></label>
                      <div class="col-lg-10">
                       
                       <select name="customer_id" class="form-control">
                       <option value="0">Select Customer</option>	
                       <?php foreach($customer as $cus): ?>
                       	<option value="<?php echo $cus['customer_id']; ?> "><?php echo $cus['customer_name']; ?> </option>

                       <?php endforeach; ?>				   
					  
					   
					   
                             </select>
					   </div>
                      </div>   

			
			
                    <div class="form-group ">
                      <label>Category 	<span>*</span></label>
                      
                      <div class="col-lg-10">
                        <select name="category_id" class="form-control" id="category" >
                          <option value="0">Select Category</option>
                           
			                   <?php foreach($category as $cat): ?>
							        <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?></option>
							     <?php endforeach; ?>
							                           
                           
                       </select>
                      </div>
                      </div>

					  <div class="form-group ">
                      <label>Product <span class="required">*</span></label>

                      <div class="col-lg-10">
                      <select name="product_id" class="form-control" id="product" required>
                      	<option value="0">Select Product</option>
                           <?php foreach($product as $pro): ?>
                           	<option value="<?php echo $pro['product_id']; ?> "> <?php echo $pro['product_name']; ?> </option>
                           <?php endforeach; ?>

                     </select>
                      </div>
                      </div>

					  
					  
                      <div class="form-group ">
                      <label >Quantity <span class="required">*</span></label>

                      <div class="col-lg-10">
                        <input class="form-control" id="address" name="quantity" placeholder="Piece" required/>
                      </div>
                      </div>

                      
                      <div class="form-group ">
                      <label>Price <span class="required">*</span></label>

                      <div class="col-lg-10">
                        <input class="form-control" id="address" name="price" placeholder="Rs" required/>
                      </div>
                      </div>
                   <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="sale">Sale</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                      </div>
					  </div>
                  </form> 

          </div>
        </div>