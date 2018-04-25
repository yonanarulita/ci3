<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
		



	<h1 class="jumbotron-heading"><?php echo $artikel->post_title ?></h1>
			
			<small>Ditulis pada <?php echo $artikel->post_date ?></small>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php echo $artikel->post_content ?>
					<hr>
					<div class="highlight text-center">
						<a href="<?php echo base_url() ?>blog/edit/<?php echo $artikel->id ?>" class="btn btn-secondary">Edit</a>
						<a href="<?php echo base_url() ?>blog/delete/<?php echo $artikel->id ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>
