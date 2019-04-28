<h2><?= $title; ?></h2>


      <div class="col-md-10">
    <div class="box box-primary">
            
           
            <?php echo validation_errors(); ?>

<?php echo form_open_multipart('customer/create'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Title<span class="required">*</span></label>
                  <input type="text" class="form-control"  name="title" id="title" placeholder="Enter name">
                </div><div class="form-group">
                  <label>Name<span class="required">*</span></label>
                  <input type="text" class="form-control"  name="customer_name" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label>Address<span class="required">*</span></label>
                  <input type="address" class="form-control" name="customer_address" id="address" placeholder=" Enter Address">
                </div>

                <div class="form-group">
                  <label>Email<span class="required">*</span></label>
                  <input type="Email" class="form-control"  name="customer_email" id="email" placeholder=" Enter Email">
                </div>



                <div class="form-group">
                  <label>Contact No<span class="required">*</span></label>
                  <input type="text" class="form-control" id="phone"   name="customer_contact" placeholder=" Enter Contact">
                </div>


                <div class="form-group">
                  <label>Customer Image</label>
                  <input type="file" id="InputFile" name="customer_image">
                </div>
              </div>
             

              <div class="form-group">
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <button type="button" name="cancel" class="btn btn-secondary">Cancel</button>            
              </div>
            </form>
          </div>
        </div>
           </div>