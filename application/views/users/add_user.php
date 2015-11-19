<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">New User</h1>
    <div class="pull-right" style="padding-bottom:10px;">
        <button onclick="window.location.href='<?=base_url('users/show')?>'" class="btn btn-danger">Go Back</button>
    </div>
    <div class="col-md-3">
    <?php /* <div> */ $attributes = array("name" => "new_user", "class" => "form", "role" => "form"); echo form_open("users/add", $attributes); ?>
            <div class="form-group">
                <label for="name">First Name</label>
                <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                <span class="text-danger"><?php echo form_error('fname'); ?></span>
            </div>

            <div class="form-group">
                <label for="name">Last Name</label>
                <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                <span class="text-danger"><?php echo form_error('lname'); ?></span>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <div class="form-group">
                <label for="subject">Password</label>
                <input class="form-control" name="password" placeholder="Password" type="password" />
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control">
                    <option value="">Select</option>
                    <?php
                    foreach ($roles as $role) {
                        echo "<option value='".$role->id."'>".$role->role."</option>";
                    }
                    ?>
                </select>
            </div>


            <div class="form-group">
                <label for="subject">Confirm Password</label>
                <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
            </div>

            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-default">Create</button>
                <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>        
        </div>
    </div>
</div>
<?=$footer?>