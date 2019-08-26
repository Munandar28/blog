<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
    <body>
    <div class="topnav">
        <a href="/cv">LIST CV</a>
        <a href="/portfolio">LIST PORTFOLIO</a>
        <a href="/signout">SIGN OUT</a>
    </div>

    <h2 align="center">Kumpulan Portofolio Pekerjaan </h2>

    <hr />

    <table id="example" id="example" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Nama karyawan</th>
            <th>Tools</th>

        </tr>

        <tr>
            <td>1</td>
            <td><a href="assets/flyerbig.jpg">Big Data Exploration</a></td>
            <td><p>1. Kevin Munandar</p>
                <p>2. Muhamad Fadel</p>
                <p>3. Maykel Wongkar</p>
                <p>4. Chalvin Dinata</p>
              <td><p>1. Apache Airflow</p>
                <p>2. MapInfo</p>
                <p>3. FileZilla</p>
                <p>4. Hadoop Hortonworks</p>
                <p>5. Visual Code</p></td></td>

        </tr>

        <tr>
            <td>2</td>
            <td><a href="/assets/3e8ae472-212b-469e-b63b-3ad68ae2ce60.jpg">MuslimPocket</a>
            <td><p>1. Inez Christiani</p>
                <p>2. Muhammad Fardiansyah</p>
                <p>3. Muhammad Farid Wajidi</p>
                <p>4. Adlez Devha Bernandez Rakinaung</p>
                <p>5. Martinus G B L Parera</p>
                <p>6. Stephanie Wilhelmina</p>
                <p>7. Mohammad Akbar</p>
                <p>8. Mohammad Alhafidz Permana Baskoro</p>
                <p>9. Aulia Prameswari Elyanto</p>
                <p>10. Aprilia Dwi Lestari</p>
              <td><p>1. Visual Code</p>
                <p>2. Trello Scrum</p>
                <p>3. Immobi Tracker</p>
                <p>4. GitLab / GitHub</p>
                <p>5. Google Drive</p></td></td>

        </tr>

        <tr>
            <td>3</td>
            <td><a href="">Jaring Laut Application</a>
            <td><p>1. Inez Christiani</p>
                <p>2. Martinus G B L Parera</p>
                <p>3. Stephanie Wilhelmina</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Android Studio</p>

        </tr>

        <tr>
            <td>4</td>
            <td><a href="/assets/photo6260539743527872770.jpg">Immobi Tracker (Web)</a>
            <td><p>1. Mohammad Akbar</p>
                <p>2. Bob Harwin</p>
                <p>3. Adrian Hartanto </p>
                <p>4. Ivander Reyner Suryo Hadi </p>
                <p>5. Aulia Prameswari Elyanto </p>
                <p>6. Aditya Pradipta</p>
                <p>7. Hestiara Agatha</p>
              <td><p>1. Visual Studio Code</p>
                <p>2. Postman</p>
                <p>3. Navicat</p>


        </tr>


        <tr>
            <td>5</td>
            <td><a href="/assets/photo6260496566221646079.jpg">Immobi Tracker (IOS)</a>
            <td><p>1. Mohammad Alhafidz Permana Baskoro </p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Postman</p>
                <p>3. Xcode</p>

        </tr>

        <tr>
            <td>6</td>
            <td><a href="assets/brosur rating karyawan 2.jpg">Rating Karyawan (IOS)</a>
            <td><p>1. Justin Tanner </p>

              <td><p>1. Xcode</p>
                <p>2. Google Drive</p>

        </tr>

        <tr>
            <td>8</td>
            <td><a href="assets/brosur rating karyawan 2.jpg">Rating Karyawan (Android)</a>
            <td><p>1. Samuel Sanjaya</p>
                <p>2. Andri Yanto</p>

              <td><p>1. Android Studio</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>

        </tr>

        <tr>
            <td>9</td>
            <td><a href="">CRM App (Sales and Marketing App)</a>
            <td><p>1. Adlez Devha Bernandez Rakinaung</p>
                <p>2. Andri Yanto</p>
                <p>3. Hestiara Agatha</p>
                <p>4. Samuel Sanjaya</p>

              <td><p>1. Google Drive</p>
                <p>2. OODO</p>
                <p>3. Android Studio</p>
                <p>4. Navicat</p>
                <p>5. Visual Code</p></td></td>

        </tr>

        <tr>
            <td>10</td>
            <td><a href="">Data Analytics(PT. Pupuk Indonesia)</a>
            <td><p>1. Aprilia Dwi Lestari</p>
                <p>2. Hengky</p>
                <p>3. Krisna Fernando</p>
                <p>4. Imanuel Ruben</p>

              <td><p>1. Google Drive</p>
                <p>2. Anaconda</p>
                <p>3. Jupyter Notebook</p>

        </tr>

        <tr>
            <td>11</td>
            <td><a href="">Nominatif Entertaint</a>
            <td><p>1. Mohammad Akbar</p>
                <p>2. Aditya Pradipta</p>
                <p>3. Bob Harwin</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Terminal</p>
                <p>4. Postman</p>

        </tr>

        <tr>
            <td>12</td>
            <td><a href="">Rekonsiliasi Payment Muslim Pocket</a>
            <td><p>1. Mohammad Akbar</p>
                <p>2. Aditya Pradipta</p>
                <p>3. Bob Harwin</p>
                <p>4. Chalvin Surya Dinata</p>
                <p>5. Maykel Adhitia Wongkar</p>
                <p>6. Bagas Kuncoro</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Terminal</p>
                <p>4. Postman</p>

        </tr>


        <tr>
            <td>13</td>
            <td><a href="">Redsite Project</a>
            <td><p>1. Kevin Munandar</p>
                <p>2. Muhamad Fadel</p>
                <p>3. Adlez Devha Bernandez Rakinaung</p>
                <p>4. Aulia Prameswari Elyanto</p>

              <td><p>1. Mapinfo</p>
                <p>2. Navicat</p>

        </tr>














    </table>
    </body>
   
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

    
    </script>
</html>
