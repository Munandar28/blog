<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Karyawan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

        <div class="container">
             <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <h3 class="text-center">Tambah Data</h3>
                                    <br/>

                    
						
					

						<a href="/admin"> Kembali</a>
						
						<br/>
						<br/>

						<!-- <form action="/test123/store" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}  
							
							Nama <input type="text" name="Nama" required="required"> <br/>
							Projek <textarea name="Projek" required="required"></textarea> <br/>
							Software <textarea name="Software" required="required"></textarea> <br/>
         -->
     
        
<!-- 
     <form action="upload.php" method="post" enctype="multipart/form-data">
        Select File to upload:
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <br>
        <input type="submit" value="Upload File" name="submit">
        </form> -->

					<!-- <br>
					<input type="submit" value="Simpan Data">
				</form> -->

             
				<form action="/admin/store" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}  

                  <!-- Nama <input type="text" name="Nama" required="required" value=""> <br/> -->

                  <div class="form-group">
					<label for="Nama">Nama Karyawan:</label>
					<input type="Nama" class="form-control"  name="Nama" required="required" >
				</div> 


                     <!-- Subject -->
                    <label>Tahun Angkatan</label>
                    <select class="browser-default custom-select mb-4">
                        <option value="" disabled>Tahun Angkatan</option>
                        <option value="1" selected>2019</option>
                        <option value="2">2020</option>
                        <option value="3">2021</option>
                        <option value="4">Feature request</option>
                    </select>

                <div class="form-group">
					<label for="Projek">Projek yang dikerjakan:</label>
					<textarea class="form-control" rows="5" id="Projek"  name="Projek" required="required" "></textarea>
				</div>
                    <!-- Projek <textarea name="Projek" rows="10" columns="70" required="required"></textarea> <br/> -->

                <div class="form-group">
					<label for="Software">Software yang digunakan:</label>
					<textarea class="form-control" rows="5" id="Software" name="Software" required="required" "></textarea>
				</div>
                    <!-- Software <textarea name="Software" rows="10" columns="70" required="required"></textarea> <br/> -->

                            <br>
                            <br>
                    
							<div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Tambah Data
                                    </button>
                                </div>
                            </div>

                     </form>
                    </div>
				</div>
			</div>
		</div>
	</div>

</body>



</html>