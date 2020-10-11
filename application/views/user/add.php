<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="full_name" class="control-label">Full Name</label>
						<div class="form-group">
							<input type="text" name="full_name" value="<?php echo $this->input->post('full_name'); ?>" class="form-control" id="full_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="branch_id" class="control-label">Branch Id</label>
						<div class="form-group">
							<input type="text" name="branch_id" value="<?php echo $this->input->post('branch_id'); ?>" class="form-control" id="branch_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo $this->input->post('is_active'); ?>" class="form-control" id="is_active" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_admin" class="control-label">Is Admin</label>
						<div class="form-group">
							<input type="text" name="is_admin" value="<?php echo $this->input->post('is_admin'); ?>" class="form-control" id="is_admin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="form-control" id="date_created" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>