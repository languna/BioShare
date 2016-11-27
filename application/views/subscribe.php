<div class="container">
	<h1>Inscription to BioShare</h1>
		<form action="<?php echo base_url();?>welcome/inscription" method="POST">
			<div class="form-group">
				<label class="control-label">Email</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="form-group">
				<label class="control-label">Retype email</label>
				<input class="form-control" type="text" name="email2" />
			</div>
			<div class="form-group">
				<label class="control-label">Lastname</label>
				<input class="form-control" type="text" name="lastname" />
			</div>
			<div class="form-group">
				<label class="control-label">Firstname</label>
				<input class="form-control" type="text" name="firstname" />
			</div>
			<div class="form-group">
				<label class="control-label">Address</label>
				<input class="form-control" type="text" name="address" />
			</div>
			<div class="form-group">
				<label class="control-label">Zip</label>
				<input class="form-control" type="text" name="zip" />
			</div>
			<div class="form-group">
				<label class="control-label">City</label>
				<input class="form-control" type="text" name="city" />
			</div>
			<div class="form-group">
				<label class="control-label">Phone</label>
				<input class="form-control" type="text" name="phone" />
			</div>
			<div class="form-group">
				<label class="control-label">Password</label>
				<input class="form-control" type="password" name="pwd" />
			</div>
			<div class="form-group">
				<label class="control-label">Repeat password</label>
				<input class="form-control" type="password" name="pwd2" />
			</div>
			<div class="form-group">
				<label class="control-label">VAT number</label>
				<input class="form-control" type="text" name="vat" />
			</div>
			<input type="submit" class="btn btn-default" value="Save"/>
	</form>
</div>