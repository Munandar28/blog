<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Karyawan</title>
</head>
<body>

	
	<h3>Data Karyawan</h3>

	<a href="/test123"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/test123/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}  
		<!-- Umur <input type="number" name="umur" required="required"> <br/> -->
		Nama <input type="text" name="Nama" required="required"> <br/>
		Projek <textarea name="Projek" required="required"></textarea> <br/>
		Software <textarea name="Software" required="required"></textarea> <br/>
        
     
        

     <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
        Select File to upload:
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <br>
        <input type="submit" value="Upload File" name="submit">
        </form> -->

        <br>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>