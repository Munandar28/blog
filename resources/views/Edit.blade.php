<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Karyawan</title>
</head>
<body>

	
	<h3>Data Karyawan</h3>

	<a href="/test123"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($karyawan as $k)
	<form action="/test123/update" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}  
		<!-- Umur <input type="number" name="umur" required="required"> <br/> -->
		<input type="hidden" name="no" value="{{$k->no}}"> <br/>
		
		Nama <input type="text" name="Nama" required="required" value="{{$k->Nama}}"> <br/>
		Projek <textarea name="Projek" required="required" value="{{$k->Projek}}"></textarea> <br/>
		Software <textarea name="Software" required="required" value="{{$k->Software}}"></textarea> <br/>
  
        

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
	@endforeach
     
</body>
</html>