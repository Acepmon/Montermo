<div class="container customFooter">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="footer-logo">
				<a href="index.php">
					<img src="../images/logo.png" alt="">
				</a>
			</div>
		</div> <!-- /.col-md-4 -->
		<div class="col-md-9 col-sm-9">
		</div> <!-- /.col-md-4 -->
	</div> <!-- /.row -->
	
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<table class="footerTable" width="100%" border="0" cellspacing="5">
				<?php 
					$db = new db\Connector();
					$db->query("select brand_title from brands");
					$db->resultset();
					
				?>
			  <tr>
				<th colspan="2" scope="col">Global Brands</a></th>
				<th width="18%" scope="col">Our Company</a></th>
				<th width="20%" scope="col">Careers</a></th>
				<th width="15%" scope="col">Contact us</a></th>
			  </tr>
			  <tr>
				<td width="24%"><a href="">FLOWROX</a></td>
				<td width="23%"><a href="">PUDA</a></td>
				<td><a href="about.php">Our story</a></td>
				<td><a href="careers.php">Life at Montermo</a></td>
				<td><a href="contact.php">Send message</a></td>
			  </tr>
			  <tr>
				<td><a href="">CiDRA</a></td>
				<td><a href="">GEHO</a></td>
				<td><a href="about.php">Our values</a></td>
				<td><a href="careers.php">Job Posting</a></td>
				<td><a href="contact.php">Customer Service</a></td>
			  </tr>
			  <tr>
				<td><a href="">MULTOTEC</a></td>
				<td><a href="">KAMAT</a></td>
				<td><a href="about.php">OHSE</a></td>
				<td><a href="careers.php">Employment Procedure</a></td>
				<td><a href="contact.php">Find a location</a></td>
			  </tr>
			  <tr>
				<td><a href="">FLYGT</a></td>
				<td><a href="">TYCO</a></td>
				<td><a href="about.php">CSR</a></td>
				<td><a href="careers.php">Fill out Job Application</a></td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			</table>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="copyright">
				<span>&copy; 2015 Montermo LLC. All rights reserved.</span>
			</div>
		</div> <!-- /.col-md-4 -->
		<div class="col-md-6 col-sm-6">
		</div>
		<div class="col-md-3 col-sm-3">
			<ul class="social-icons">
				<li><a href="https://www.facebook.com/MontermoLLC" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="https://www.linkedin.com/company/montermo-llc?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-flickr"></a></li>
				<li><a href="#" class="fa fa-rss"></a></li>
			</ul>
		</div> <!-- /.col-md-4 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->