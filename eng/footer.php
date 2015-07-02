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
			<?php 
				$db = new db\Connector();
				$db->query("select * from brands where brand_lang = 'english'");
				$result = $db->resultset();
				$res = break_array($result, 2);
			?>
			<table class="footerTable pull-left" width="50%">
				<tr>
					<th colspan="2" scope="col">Our Brands</th>
				</tr>
				<?php
				foreach ($res as $r) {
					echo "<tr>";
					foreach ($r as $a) {
						$id = $a['brand_id'];
						$title = $a['brand_title'];
						?>
						<td><a href="brandsSpecific.php?brands_id=<?php echo $id; ?>"><?php echo $title; ?></a></td>
						<?php
					}
					echo "</tr>";
				}
				?>
			</table>
			<table class="footerTable pull-left" width="50%">
				<tr>
					<th>About us</th>
					<th>Services</th>
					<th>Contact us</th>
				</tr>
				<tr>
					<td><a href="about.php?tab=story">Our story</a></td>
					<td><a href="careers.php?tab=life">Maintenance</a></td>
					<td><a href="contact.php?tab=send">Send message</a></td>
				</tr>
				<tr>
					<td><a href="about.php?tab=values">Our values</a></td>
					<td><a href="careers.php?tab=job">Consulting</a></td>
					<td><a href="contact.php?tab=cust">Customer Service</a></td>
					
				</tr>
				<tr>
					<td><a href="about.php?tab=ohse">OHSE</a></td>
					<td><a href="careers.php?tab=employment">Installation</a></td>
					<td><a href="contact.php?tab=find">Find a location</a></td>
				</tr>
				<tr>
					<td><a href="about.php?tab=csr">CSR</a></td>
					<td></td>
					<!-- <td><a href="careers.php?tab=jobapp">Fill out Job Application</a></td> -->
					<td></td>
				</tr>
				<tr>
					<td><a href="about.php?tab=careers">Careers</a></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class="clearfix"></div>
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