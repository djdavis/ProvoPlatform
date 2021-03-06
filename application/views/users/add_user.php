<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">Create a new dashoard user</h1>
    <div class="pull-right" style="padding-bottom:10px;">
        <button onclick="window.location.href='<?=base_url('users/show')?>'" class="btn btn-danger">Go Back</button>
    </div>
    <div class="col-md-3">
    <div class="panel panel-default">
    <div class="panel-body">
    <?php 
    $attributes = array("name" => "new_user", "class" => "form", "role" => "form"); 
    echo form_open("users/add", $attributes); ?>
            <div class="form-group">
                <?=form_label('First Name', 'fname')?>
                <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                <span class="text-danger"><?php echo form_error('fname'); ?></span>
            </div>

            <div class="form-group">
                <?=form_label('Last Name', 'lname')?>
                <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                <span class="text-danger"><?php echo form_error('lname'); ?></span>
            </div>
            
            <div class="form-group">
                <?=form_label('Email', 'email')?>
                <input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <div class="form-group">
                <?=form_label('Password', 'password')?>
                <input class="form-control" name="password" placeholder="Password" type="password" />
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>

            <div class="form-group">
                <?=form_label('Confirm Password', 'cpassword')?>
                <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
            </div>

            <div class="form-group">
                <?=form_label('Role', 'role')?>
                <select name="role" class="form-control">
                    <option value="">Select</option>
                    <?php
                    foreach ($roles as $role) {
                        echo "<option value='".$role->id."'>".$role->role."</option>";
                    }
                    ?>
                </select>
                <span class="text-danger"><?php echo form_error('role'); ?></span>
            </div>
            
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-default">Create</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>        
    </div>
    </div>
    </div>
</div>
<?=$footer?>