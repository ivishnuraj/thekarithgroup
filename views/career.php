<div class="jumbotron text-white" style="color:#ffffff;border-radius: 0;background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/9398/assets/pages/about/careers/working-in-lobby-1500w.jpg');background-size: cover;">
	<small>Careers </small>
	<h1 class="identity">JOIN OUR TEAM</h1>
</div>
<div class="" style="padding: 30px;"></div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<h1 class="display-1" style="font-size: 2em;">Accountant cum Admin Manager</h1>
			<p><strong>Karith Design- Build Private Limited is currently seeking graduates to join our company as an Accountant cum Office Administrator</strong><br>Working in a close-knit team, you will be exposed to a broad range of accounting and taxation work for small to medium &ndash; sized businesses.</p>
			<p><strong>Location: Trivandrum</strong><br>
			<strong>Job Type: Permanent</strong><br>
			<strong>Salary: As per qualification</strong><br>
			<strong>Appointment: Immediate</strong><br>
			<strong>Requirements: -</strong></p>
			<ul>
			<li>Bachelor Degree or Diploma in office Admin&amp;Accountancy</li>
			<li>Proven experience (2-3 years) as an Office Administrator, Accounts Officer or relevant role</li>
			<li>Excellent organizational and leadership skills</li>
			<li>Familiarity with office management procedures and basic accounting principles</li>
			<li>Excellent knowledge of MS Office, Tally and office management software (ERP etc.)</li>
			</ul>
			<p style="margin-left: .25in;">Your primary responsibilities will include:</p>
			<ul>
			<li>Preparation of financial statements</li>
			<li>Taxation and business advisory</li>
			<li>Liaison with C.A. and financial agencies</li>
			<li>Client financial and management accounting</li>
			<li>Subcontractors liaison</li>
			</ul>
			<a data-toggle="modal" href="#" data-target="#myModal">
				Apply <i class="material-icons" style="vertical-align: middle;">arrow_right_alt</i>
			</a>
			<br>
			<br>
		</div>
	</div>
</div>
<div id="myModal" class="modal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <form class="form">
        	<div class="form-group">
        		<label for="name">Your Name</label>
        		<input type="text" name="name" id="name" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="email">Your Email ID</label>
        		<input type="email" name="email" id="email" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="phone">Your Phone No</label>
        		<input type="text" name="phone" id="phone" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="resume">Add Your Resume</label>
        		<input type="file" name="resume" id="resume" class="form-control">
        	</div>
        	<div class="form-group">
        		<button class="btn btn-info" style="background-color: #9e9e9e;color:#ffffff;border:none;border-radius: 50px;" type="submit">Apply  <i class="material-icons" style="vertical-align: middle;">arrow_right_alt</i> </button>
        	</div>
        </form>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
	$(document).on('submit', 'form', function(event) {
		event.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: '/career.php',
			type: 'POST',
			contentType: false,
			processData: false,
			data: formData,
		})
		.done(function(res) {
			if (res == 'true') {
				alert("Your Application was successful. We will get in touch with you shortly.");
				$('.modal').modal("hide");
			}
			else{
				alert("There was an error processing your application. Please try again later.");
			}
		})
		.fail(function() {
			
		})
		.always(function() {
			
		});
		
	});
</script>