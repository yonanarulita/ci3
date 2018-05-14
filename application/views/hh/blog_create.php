<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Tulis Artikel Baru</h1>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					
					<?php    
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>

					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

					<?php echo form_open_multipart(); ?>

					<div class="form-group">
						<label for="title">Judul Artikel</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label for="text">Konten</label>
						<textarea class="form-control" name="text" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="thumbnail">Gambar thumbnail</label>
						<input type="file" class="form-control-file" name="thumbnail">
					</div>
					<button type="submit" class="btn btn-primary">Post Artikel</button>
				</form>
			</div>
		</div>
	</div>
</section>
</main>