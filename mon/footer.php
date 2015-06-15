<div class="container customFooter">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="footer-logo">
				<a href="index.php">
					<img src="../images/montermo-mon-scaled.png" alt="">
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
				$db->query("select * from brands where brand_lang = 'mongolian'");
				$result = $db->resultset();
				$res = break_array($result, 2);
			?>
			<table class="footerTable pull-left" width="50%">
				<tr>
					<th colspan="2" scope="col">Глобал Брэндүүд</th>
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
					<th>Манай компани</th>
					<th>Үйлчилгээ</th>
					<th>Бидэнтэй холбогдох</th>
				</tr>
				<tr>
					<td><a href="about.php?tab=story">Бидний түүх</a></td>
					<td><a href="careers.php?tab=life">Монтермо дахь амьдрал</a></td>
					<td><a href="contact.php?tab=send">Мессеж илгээх</a></td>
				</tr>
				<tr>
					<td><a href="about.php?tab=values">Бидний үнэт зүйлс</a></td>
					<td><a href="careers.php?tab=job">Нээлттэй ажлын байр</a></td>
					<td><a href="contact.php?tab=cust">Харилцагчийн үйлчилгээ</a></td>
					
				</tr>
				<tr>
					<td><a href="about.php?tab=ohse">ХАБЭА</a></td>
					<td><a href="careers.php?tab=employment">Ажилтан сонгон шалгаруулах</a></td>
					<td><a href="contact.php?tab=find">Байршил олох</a></td>
				</tr>
				<tr>
					<td><a href="about.php?tab=csr">Нийгмийн хариуцлага</a></td>
					<td><a href="careers.php?tab=jobapp">Анкет татах</a></td>
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
		<div class="col-md-4 col-sm-4">
			<div class="copyright">
				<span>&copy; 2015 Монтермо ХХК Бүх эрх хуулиар хамгаалагдсан</span>
			</div>
		</div> <!-- /.col-md-4 -->
		<div class="col-md-5 col-sm-5">
		</div>
		<div class="col-md-3 col-sm-3">
			<ul class="social-icons">
				<li><a href="https://www.facebook.com/MontermoLLC?fref=ts" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="https://www.linkedin.com/company/montermo-llc?report%2Esuccess=KJ_KkFGTDCfMt-A7wV3Fn9Yvgwr02Kd6AZHGx4bQCDiP6-2rfP2oxyVoEQiPrcAQ7Bf" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-flickr"></a></li>
				<li><a href="#" class="fa fa-rss"></a></li>
			</ul>
		</div> <!-- /.col-md-4 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->