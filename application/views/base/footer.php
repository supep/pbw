<footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-xs-12 text-center">
                        <span class="copyright">Copyright &copy; Teknologi Informasi</span>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

	<!--ChatBox-->
	<div class="chat_box">
	<div class="header close_btn">Chat Box 
	</div>
	<div class="toggle_chat" style="display:none;">
		<div class="message_box">
		</div>
	<div class="user_info">
		<input name="chat_username" id="chat_username" type="text" placeholder="Your Name" maxlength="15" required="required" data-error="Valid name is required." />
		<input name="chat_message" id="chat_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" required data-validation-required-message="Please enter a message."/> 
	</div>
	</div>
	</div>
	<!--End of ChatBox-->
    

    <!-- jQuery Version 2.1.1 -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/asset/js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
    <script src="<?php echo base_url('assets/js/classie.js');?>"></script>
    <script src="<?php echo base_url('assets/js/count-to.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.appear.js');?>"></script>
    <script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js');?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.fitvids.js');?>"></script>
	<script src="<?php echo base_url('assets/js/styleswitcher.js');?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js');?>"></script>
    <script src="<?php echo base_url('assets/js/contact_me.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/');?>script.js"></script>
	<!-- ChatBox -->
	<!--script type="text/javascript" src="//<?php echo base_url('assets/libs/');?>jquery-3.3.1.min.js"></script-->
	<script type="text/javascript">
	$(document).ready(function() {

	// Muat pesan setiap 1000 milidetik dari server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('<?php echo base_url();?>home/chat', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//Metode untuk memicu saat pengguna menekan tombol enter
	$("#chat_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#chat_username').val();
				var imessage = $('#chat_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				
				$.post('home/chat', post_data, function(data) {
					
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//Terus  ke bawah obrolan!

					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//Reset nilai kotak pesan
					$('#chat_message').val('');
					
				}).fail(function(err) { 
				
				//Peringatan kesalahan server HTTP
				alert(err.statusText); 
				});
			}
	});
	$("#chat_username").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#chat_username').val();
				var imessage = $('#chat_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				
				$.post('<?php echo base_url();?>home/chat', post_data, function(data) {
					
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//Terus  ke bawah obrolan!

					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//Reset nilai kotak pesan
					$('#chat_message').val('');
					
				}).fail(function(err) { 
				
				//Peringatan kesalahan server HTTP
				alert(err.statusText); 
				});
			}
	});
	
	//Toggle hide / show shoutbox
	$(".close_btn").click(function (e) {
			//get CSS display state of .toggle_chat element
			var toggleState = $('.toggle_chat').css('display');
			
			//toggle show/hide chat box
			$('.toggle_chat').slideToggle();
		
			//use toggleState var to change close/open icon image
			if(toggleState == 'block')
			{
				$(".header div").attr('class', 'open_btn');
			}else{
				$(".header div").attr('class', 'close_btn');
			}
		});
	});
	</script>
	<!-- End of ChatBox -->

</body>

</html>