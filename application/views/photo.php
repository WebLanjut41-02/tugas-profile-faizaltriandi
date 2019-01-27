<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">myPerson.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>panggil/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>panggil/photo">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>panggil/portofolio">Portofolio</a>
            </li>
            
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

		<div class="card-deck" style="margin: 30px">
		  <div class="card">
		    <img src="<?php echo base_url('assets/img'); ?>/1.png" class="card-img-top" alt="logo">
		    <div class="card-body">
		      <h5 class="card-title">Yogyakarta</h5>
		      <p class="card-text">Untuk merayakan pergantian tahun 2017, aku bersama ibu dan kakaku merayakan pergantian tahun ke Bromo dan Yogyakarta.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		       <form action="<?php echo base_url() ?>panggil/proses" method="post">
			   	Comment<br><br>
				<input type="textarea" name="komentar" style="height: 150px; width: 420px;" placeholder="  put your comment..."><br><br>
				<input type="submit" name="post" style="border-radius: 5px; background-color: #0069D9; color: white; border: none; padding: 7px;">
		    </div>
		  </div>
		  <div class="card">
		    <img src="<?php echo base_url('assets/img'); ?>/2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Kunjungan Industri 2017</h5>
		      <p class="card-text">Kami KEMA MI mengikuti serangkaian acara Kunjungan Industri 2017 di Perusahaan KUDO Jakarta</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		      <!-- 
		     <form action="<?php echo base_url() ?>panggil/proses" method="post">
		      <div class="form-group">
			    <label for="exampleFormControlTextarea1"> Comment</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar" placeholder="put your comment..."></textarea>
			  </div>

			   <button type="submit" class="btn btn-primary" name="post"><a href="<?php echo base_url(); ?>panggil/proses">Post</a></button>
			  </form>
 -->
			   <form action="<?php echo base_url() ?>panggil/proses" method="post">
			   	Comment<br><br>
				<input type="textarea" name="komentar" style="height: 150px; width: 420px;" placeholder="  put your comment..."><br><br>
				<input type="submit" name="post" style="border-radius: 5px; background-color: #0069D9; color: white; border: none; padding: 7px;">
	</form>
		    </div>
		  </div>
		  <div class="card">
		    <img src="<?php echo base_url('assets/img'); ?>/3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">RISTEK HMMI 2017</h5>
		      <p class="card-text">Foto berikut merukapan foto awal terbentuknya RISTEK HMMI 2017 dengan beranggotakan 4 orang staff dan 1 orang kepala departemen</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>



		       <form action="<?php echo base_url() ?>panggil/proses" method="post">
			   	Comment<br><br>
				<input type="textarea" name="komentar" style="height: 150px; width: 420px;" placeholder="  put your comment..."><br><br>
				<input type="submit" name="post" style="border-radius: 5px; background-color: #0069D9; color: white; border: none; padding: 7px;">
			</form>
			   
		    </div>
		  </div>
		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>