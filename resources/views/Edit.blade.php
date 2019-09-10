<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Karyawan</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
		
		
	<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Edit Data</h3>
                            <br/>
	
	<!-- <h3>Data Karyawan</h3> -->
						


						<a href="/admin"> Kembali</a>
						
						<br/>
						<br/>

	@foreach($karyawan as $k)
	<form action="/admin/update" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}  
		<!-- Umur <input type="number" name="umur" required="required"> <br/> -->
		<input type="hidden" name="no" value="{{$k->no}}"> <br/>
		
		Nama <input type="text" name="Nama" required="required" value="{{$k->Nama}}"> <br/>
		<br>
		<!-- Projek <input type="text" name="Projek" required="required" value="{{$k->Projek}}"> <br/>	 -->
		<br>
		Projek <textarea name="Projek" rows="10" columns="70"  required="required">{{$k->Projek}}</textarea> <br/>

		<!-- Projek <textarea name="Projek" required="required" value="{{$k->Projek}}"></textarea> <br/>		 -->
		Software <textarea name="Software" rows="10" columns="70" required="required">{{$k->Software}}</textarea> <br/>
  
       
		

     <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        Select File to upload:
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <br>
        <input type="submit" value="Upload File" name="submit">
        </form> -->

        <br>
		<!-- <input type="submit" value="Simpan Data"> -->

							<div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit Data
                                    </button>
                                </div>
                            </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	
</body>
</html>