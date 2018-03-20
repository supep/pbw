<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Hubungi Kami</h3>
                        <p class="white-text"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<div class="col-lg-6">
						<form name="sentMessage" id="contactForm" method="post" action ="<?php echo base_url()."home/mail/";?>">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">Send Message</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
						<div class="footer-contact-info text-left">
							<h4 class= "text-center">Contact info</h4>
							<h5><strong>Departemen Teknologi Informasi</strong></h5>
							<ul>
								<li><strong>Fakultas Teknologi Informasi dan Komunikasi</strong></li>
								<li><strong>Institut Teknologi Sepuluh Nopember</strong></li>
								<li><strong>Kampus ITS Sukolilo, Surabaya, 60111</strong></li>
								<br>
								<li><strong>E-mail :</strong> teknologi.informasi@its.ac.id </li>
								<li><strong>Telp :</strong> +62xxxxxxx</li>
								<li><strong>Fax :</strong> +62xxxxxxx</li>
								<li><strong>Web :</strong> tipbw.000webhostapp.com</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>