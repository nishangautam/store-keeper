<h2><?= $title; ?></h2>


      <div class="col-md-10">
    <div class="box box-primary">
            
           
            <?php echo validation_errors(); ?>

<?php echo form_open_multipart('supplier/create'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label>Title<span class="required">*</span></label>
                  <input type="text" class="form-control"  name="title" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label>Name<span class="required">*</span></label>
                  <input type="text" class="form-control"  name="supplier_name" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label>Address<span class="required">*</span></label>
                  <input type="address" class="form-control" name="supplier_address" id="address" placeholder=" Enter Address">
                </div>

                <div class="form-group">
                  <label>Email<span class="required">*</span></label>
                  <input type="Email" class="form-control"  name="supplier_email" id="email" placeholder=" Enter Email">
                </div>



                <div class="form-group">
                  <label>Contact No<span class="required">*</span></label>
                  <input type="text" class="form-control" id="supplier_contact"   name="supplier_contact" placeholder=" Enter Contact">
                </div>


                <div class="form-group">
                  <label>Supplier Image</label>
                  <input type="file" id="InputFile" name="supplier_image">
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