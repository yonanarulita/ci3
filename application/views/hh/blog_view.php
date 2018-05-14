<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	
<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<!-- <div class="feature-center">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<p> -->
					<a href="<?php echo base_url() ?>blog/create" class="btn btn-primary my-2">Tulis Artikel</a>
				</p>
			</div>
		</section>

		<?php if( !empty($all_artikel) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<?php
						// Kita looping data dari controller
						foreach ($all_artikel as $key) :
					?>

					<div class="col-md-4">
						<!-- Kita format tampilan blog dalam bentuk card -->
						<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
						<div class="card mb-4 box-shadow border-0">
							
							<!-- Load thumbnail, jika ada -->
							<?php if( $key->post_thumbnail ) : ?>
							<img class="card-img-top" src="<?php echo base_url() .'uploads/'. $key->post_thumbnail ?>" alt="Card image cap">
							
							<!-- Jika tidak ada thumbnail, gunakan holder.js -->
							<?php ; else : ?>
							<img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
							<?php endif; ?>
							
							<div class="card-body">

								<!-- Batasi cuplikan konten dengan substr sederhana -->
								<h5><?php echo substr($key->post_title, 0, 40) ?></h5>
								<p class="card-text"><?php echo substr( $key->post_content , 0, 80)?>...</p>
								
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<!-- Untuk link detail -->
										<a href="<?php echo base_url(). 'blog/read/' . $key->post_slug ?>" class="btn btn-outline-secondary">Baca</a>
										<a href="<?php echo base_url(). 'blog/edit/' . $key->id ?>" class="btn btn-outline-secondary">Edit</a>
									</div>
									<small class="text-muted"><?php echo $key->post_date ?></small>
								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p>Data Belum Dimasukkan</p>
		<?php endif; ?>
		
	</main>
	


		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Keep it simple</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	


	<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Get Started</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	
	
	




				
				