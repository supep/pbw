<?php
		$key = array(1, 2, 3, 4, 5);
		$testimonial = array();
		$testimonial[0][0] = "Wiranto";
		$testimonial[0][1] = "Menko Polhukam";
		$testimonial[0][2] = "\"Kegiatan siber nasional terutama pengamanan siber ini merupakan keharusan, keniscayaan..\"";
		$testimonial[0][3] = "face_1.png";
		$testimonial[1][0] = "John McCarthy";
		$testimonial[1][1] = "Pakar Komputasi MIT";
		$testimonial[1][2] = "\"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon\"";
		$testimonial[1][3] = "face_2.png";
		$testimonial[2][0] = "Rudiantara";
		$testimonial[2][1] = "Menkominfo";
		$testimonial[2][2] = "\"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan\"";
		$testimonial[2][3] = "face_3.png";
		$testimonial[3][0] = "Bill Gates";
		$testimonial[3][1] = "Microsoft";
		$testimonial[3][2] = "\"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu\"";
		$testimonial[3][3] = "face_4.png";
		$testimonial[4][0] = "Darwin Widjaja";
		$testimonial[4][1] = "Praktisi Teknologi Informasi";
		$testimonial[4][2] = "\"Sistem yang terintegrasi dalam suatu perusahaan dapat meningkatkan penghematan atau efisiensi\"";
		$testimonial[4][3] = "face_5.png";
		$tst = array();
		for($i = 0; $i<3; $i++)
		{
			$tst[$i] = rand(0,4);
			if($i == 1)
			{
				do
				{
					$tst[1] = rand(0,4);
				}
				while($tst[1] == $tst[0]);
			}
			else if($i==2)
			{
				do
				{
					$tst[2] = rand(0,4);
				}
				while($tst[0] == $tst[2] || $tst[1] == $tst[2]);
			}
		}
	?>
	<!-- Start Testimonial Section -->
    <div id="testimonial" class="testimonial-section">
        <div class="container">
            <!-- Start Testimonials Carousel -->
			<div class="section-title text-center">
                        <h3 class = "white-text">Apa Kata Mereka?</h3>
                        <p class  = "white-text" >Testimoni dari para ahli</p>
                    </div>
            <div id="testimonial-carousel" class="testimonials-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images/testimonial/');?><?php echo $testimonial[$tst[2]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[2]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[2]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[2]][2];?></p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images/testimonial/');?><?php echo $testimonial[$tst[1]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[1]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[1]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[1]][2];?></p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images/testimonial/');?><?php echo $testimonial[$tst[0]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[0]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[0]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[0]][2];?></p>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Carousel -->
        </div>
    </div>
    <!-- End Testimonial Section -->