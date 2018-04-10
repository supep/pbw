<script type="text/javascript">
    function showHideContent(id){
        if(document.getElementById(id).style.display==""){
            document.getElementById(id).style.display="none";
        }else{
            document.getElementById(id).style.display="";
        }
    }    
</script>
    <section id="guest" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Buku Tamu</h3>
                        <p class="white-text"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div>
                            <td><h3 class="col-md-3">Nama</h3></td>
                            <td><h3 class="col-md-3">Email</h3></td>
                            <td><h3 class="col-md-3">Pesan</h3></td>
                            <td><h3 class="col-md-3">Waktu</h3></td>
                        </div>
                        <?php 
                            //GLOBALS['tmbl']=sizeof($data)/10;
                            for ($itr=0; $itr<sizeof($data); $itr++): 
                            ?>
                            <div class="col-md-3">
                                <p><?php 
                                    /*if($itr == ($itr+10))
                                    {
                                        break;
                                    }*/
                                    echo $data[$itr]['Name'];
                                ?></p>
                            </div>
                            <div class="col-md-3">
                                <p><?php echo $data[$itr]['Email']; ?></p>
                            </div>
                            <div class="col-md-3">    
                                <p><?php
                                    $GLOBALS['i'] = 0;
                                    $str = str_split($data[$itr]['Message']); 
                                    for($x=0; $x<strlen($data[$itr]['Message']); $x++)
                                    {
                                        if($x>0 && $x%20==0)
                                        {
                                            echo "<br>";
                                            echo $str[$x];
                                            $GLOBALS['i']++;
                                        }
                                        else
                                        {
                                            echo $str[$x];
                                        }
                                    } 
                                ?></p>
                            </div>
                            <div class="col-md-3">    
                                <p><?php 
                                    echo $data[$itr]['Date'];
                                    for($i=0; $i<=$GLOBALS['i']; $i++)
                                    {
                                        echo "<br>";
                                    } 
                                ?></p>
                            </div>
                        <?php endfor ?>
                    </div>
                    <p></p><p><br></p>
                    <button class="btn btn-primary" onclick="showHideContent('tambah')">Tambah Baru</button>
                    <a href="<?php echo base_url();?>bukuTamu/download"><button class="btn btn-primary">Download Buku Tamu</button> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->


    <!-- Start About Us Section 2 -->
    <div style="display: none;" id="tambah" class="about-us-section-1">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h3>Tambah Buku Tamu</h3>
						<br>
					</div>
				</div>
				<div class="col-md-12">
                    <form name="tambahTamu" method="post" action ="<?php echo base_url("bukuTamu/add");?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-primary" >Isi buku tamu</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.col-md-2 -->
            </div><!-- /.row --> 
        </div>
    </div>