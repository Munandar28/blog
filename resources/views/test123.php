<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Projek</th>
                <th>Tools</th>
                <th>Link CV(PDF)</th>
            </tr>
        </thead>
        <tbody>

    <h2 align="center">Daftar CV Karyawan Magang 2019</h2>
        

        <div class="topnav">
        <a href="/cv">LIST CV</a>
        <a href="/portfolio">LIST PORTFOLIO</a>
        <a href="/signout">SIGN OUT</a>
    </div>


            <tr>
            <td>1</td>
            <td>Kevin Munandar</td>
            <td><p>1. Big Data Exploration</p>
                <p>2. CellCom Malaysia</p>
                <p>3. OSS Project</p>
                <p>4. Redsite Project</p>
                <p>5. Data Analytics (PT Pupuk Indonesia)</p></td>
            <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. SSH-Client(PuTTY)</p>
                <p>4. Postgresql</p>
                <p>5. Apache Airflow</p>
                <p>6. MapInfo</p>
                <p>7. FileZilla</p>
                <p>8. Hadoop Hortonworks</p>
                <p>9. Google Drive</p></td>
            <td><a href="/assets/Kevin's Resume.pdf">Resume</a></td>
            </tr>
            <tr>
            <td>2</td>
            <td>Muhamad Fadel</td>
            <td><p>1. Big Data Exploration</p>
                <p>2. CellCom Malaysia</p>
                <p>3. OSS Project</p>
                <p>4. Redsite Project</p>
                <p>5. Data Analytics (PT Pupuk Indonesia)</p></td>
            <td><p>1. Hadoop Hortonworks</p>
                <p>2. Google Drive</p>
            <td><a href="/assets/Muhamad Fadel - cv.pdf">Resume</a></td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Projek</th>
                <th>Tools</th>
                <th>Link CV(PDF)</th>
            </tr>
        </tfoot>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

    
    </script>
    </table>