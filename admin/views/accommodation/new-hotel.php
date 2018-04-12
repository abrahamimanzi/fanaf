<div class="row">
	<div class="col-md-12">
		<h1 class="page-head-line">Add New Hotel</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Hotel info
			</div>
			<div class="panel-body">
		
				<form  method="post" accept-charset="UTF-8" role="form"  enctype="multipart/form-data">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Hotel name" name="hotel-name" type="text">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Enter email" name="hotel-email" type="text">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Enter Telephone" name="hotel-telephone" type="text">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Enter Distance" name="hotel-distance" type="text">
						</div>
						<!-- <div class="form-group">
							<label for="exampleInputFile">Featured image</label>
							<br/>
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
								<div>
									<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
									<input id="profilePhoto" type="file" name="hotelphoto"></span>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							<div id="progress-div"><div id="progress-bar"></div></div>
							<div id="targetLayer"></div>
							<p class="help-block">Choose the image</p>
						</div> -->

						<div class="form-group">
				            <div class="col-sm-4" style="padding: 5px">
				                <div class="form-group">
				                    <input name="hotel-photo" onchange="readURL(this);" type="file" required="required"/>
				                </div>
				            </div>
            			</div>
						<!-- <div class="form-group">
							<label>Gender</label>
							<select name="gender" class="form-control">
								<option value="F">Female</option>
								<option value="M">Male</option>
							</select>
						</div> -->

	                    <input type="hidden" name="webToken" value="56">
	                    <input type="hidden" name="request" value="hotel-new">

						<a href="" class="btn btn-md btn-default pull-left">Cancel</a>
						<input class="btn btn-md btn-success btn-block" type="submit" value="Submit">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>