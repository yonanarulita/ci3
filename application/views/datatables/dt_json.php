<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Basic DataTables</h1>
			
		</div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-ajax" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
	
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function(){

        $('#dt-ajax').DataTable({
            "ajax": "<?php echo base_url() ?>datatables/get_json",
            "columns": [
                { "data": "post_id" },
                { "data": "date_created" },
                { "data": "post_title" },
                { "data": "cat_name" },
                { "data": "post_status" },
                // Kolom Action
                { 
                    "data" : null,
                    "render": function (data) {
                        return '<a href="<?php echo base_url('blog/edit/') ?>'+ data.post_id + '" class="btn btn-sm btn-outline-primary">Edit</a> <a href="<?php echo base_url('blog/delete/') ?>'+ data.post_id + '" class="btn btn-sm btn-outline-danger">Delete</a>' 
                    }
                },
            ],
        });
    });

</script>
