
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
    
 <!-- <h2 align="center">Daftar CV Karyawan Magang 2019</h2> -->
    <div class="topnav">
        <a href="/cv">LIST CV</a>
        <a href="/portfolio">LIST PORTFOLIO</a>
        <a href="/register">REGISTER</a>
        <a href="/signout">SIGN OUT</a>
     </div>

     <br/>
     <a href="cv/tambah/">
<button type="button" class="btn btn-primary">Tambah Data</button>
    </a>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
                <br>
                <br/>

            <tr>
                <!-- <th>No</th> -->
                <th>Nama</th>
                <th>Projek</th>
                <th>Software</th>
                <th>Link CV(PDF)</th>
                <th>Edit</th>
                <th>Hapus</th>

            </tr>
        </thead>
        <tbody>

             
    @foreach($karyawan as $key => $data)
    <tr>    
      <!-- <td>{{$data->no}}</td> -->
      <td>{{$data->Nama}}</td>
      <td>
      <select name="color4" size="5" multiple style="width:'100%'">
        @foreach($kerja as $key => $item)
         @if ($item->no_karyawan === $data->no)
        <option value="white">{{$item->project_nama}} </option>
        @endif
        <!-- <option value="white">dsldskldsk</option>
        <option value="white">dsldskldsk</option>
        <option value="white">dsldskldsk</option>
        <option value="white">dsldskldsk</option>
        <option value="white">dsldskldsk</option> -->
        @endforeach
    </select>
      </td>
      <td>{{$data->Software}}</td>
      <td><a href="/assets/{{$data->Link_CV}}">Resume</a></td>      
      
      <td>
      <a href="/admin/edit/{{$data->no}}"><button type="button" class="btn btn-primary">Edit</button></a>
      </td>  
      <p> </p>
     
        <td>
       <a href="/admin/hapus/{{$data->no}}"><button type="button" class="btn btn-danger">Hapus</button></a> 
       </td> 
    </tr>
    @endforeach


        </tbody>
        </table>
        
</body>
        <!-- <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Projek</th>
                <th>Tools</th>
                <th>Link CV(PDF)</th>
            </tr>
        </tfoot> -->

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

    
    </script>
    </table>