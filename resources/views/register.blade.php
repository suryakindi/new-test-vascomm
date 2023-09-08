<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/style.css">

	</head>
	<body>
        @if(session()->has('sukses'))
    <script>
        alert('Sukses Membuat User, Cek Email Untuk Melihat Password');
    </script>
    @endif  
	<section class="ftco-section">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(/images/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register User</h3>
			      		</div>
								
			      	</div>
							<form action="" class="signin-form" method="POST">
                                @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Email </label>
			      			<input type="email" class="form-control" placeholder="email" name="email" required>
			      		</div>
                        <div class="form-group mb-3">
                            <label class="label" for="name">Nama </label>
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="notelp">No Telp </label>
                            <input type="text" class="form-control" placeholder="No Telp" name="notelp" required>
                        </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar </button>
		            </div>
                    <div class="form-group">
		            	<a href="/"><button type="button" class="form-control btn btn-primary rounded submit px-3">Kembali </button></a>
		            </div>
		            
		          </form>
		          
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

