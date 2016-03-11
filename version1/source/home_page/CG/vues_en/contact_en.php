
<?php include('entete_en.php'); ?>

<body>

		<?php include('menu_en.php'); ?>

		<div class="section">
			<div class="container"><h1 align="center">Contact</h1></div>
		</div>
		
		<div class="section-colored">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 col-md-6 col-sm-6">
	                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2577.281052794258!2d4.712308999999999!3d49.76196999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e1cdedc54e1%3A0x9ae5acacf807a467!2sLyc%C3%A9e+Polyvalent+Gaspard+Monge!5e0!3m2!1sfr!2sfr!4v1396880815911" width="100%" height="450" frameborder="0" style="border:0"></iframe>
	                </div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h3>Lycée Polyvalent Gaspard Monge</h3>
						<p>
							2 Avenue de Saint-Julien<br/>
							Charleville-Mézières 08000<br/>
						</p>
						<p><i class="fa fa-phone"></i> <abbr title="Telephone">Tel :</abbr> <a href="tel:+33324526969">03.24.52.69.69</a></p>
						<p><i class="fa fa-phone"></i> <abbr title="Fax">Fax :</abbr>03.24.52.69.78</p>
						
					</div>
	            </div><!-- /.row -->
	        </div><!-- /.container -->
		</div><!-- /.section-colored -->
		
		<div class="section">
			<div id="form_section" class="container" align="center"><h4>Contact Form</h4><br/><p>You can also use the form below to get more informations about the formation</p><br/></div>
			<div class="container">
	            <div class="row">
	                <div class="col-lg-12 col-md-12 col-sm-12">
						<form class="form-horizontal" role="form" method="post" action="contact_en.php#form_section">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2">
											<input type="text" name="civ" class="form-control" placeholder="Civility" required="required">
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5">
											<input type="text" name="nom_" class="form-control" placeholder="Name" required="required">
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5">
											<input type="email" name="mail" class="form-control" placeholder="Email" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<select class="form-control" name="to" required="required">
											  <option selected="selected">Adressee :</option>
											  <option>Chief Work</option>
											  <option>Secretariat Chief Work</option>
											  <option>Responsible SIO formation</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
											<textarea class="form-control" name="message" rows="3" placeholder="Message" required="required"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="btn btn-default">Send</button>
										<button type="reset" class="btn btn-default">Replace fields to zero</button>
									</div>
								</div>
							</div>
						</form>	
	                </div>
	            </div><!-- /.row -->
	        </div>
		</div>

		<?php include('traitement_form_en.php'); ?>
		<?php include('footer_en.php'); ?>

	</body>
</html>