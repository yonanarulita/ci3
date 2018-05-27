<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
<br><br></br></br>
<div class="container">
  <div class="row">
    <div class="col-md-30">

      <table class="table table-bordered table-striped" align="center">



        <tr>
          <th colspan="10"><h4 class="text-center">Data User</h3></th>

        </tr>
          <tr class="danger">
            <td>Nama User</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>

          <tr class="warning">
            <td>Email User</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>

          <tr class="success">
            <td>Umur User</td>
            <td><?php echo $this->session->userdata('user_age');  ?></td>
          </tr>

          <tr class="info">
            <td>No. Telepon User</td>
            <td><?php echo $this->session->userdata('user_mobile');  ?></td>
          </tr>
      </table>


    </div>

  

</div>
<a href="<?php echo site_url() ?>home1"><button type="button" class="btn-primary">Yona Narulita Website</button></a><br></br>
<a href="<?php echo site_url() ?>home"><button type="button" class="btn-primary">Logout</button></a>
</div>





  </body>
</html>
