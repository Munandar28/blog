<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Karyawan</title>
</head>
<body>



                    <div class="panel-body">
						
						<h3>Data Karyawan</h3>

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

				</div>
             
				<form action="/admin/store" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}  
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </form>

</body>


</html>