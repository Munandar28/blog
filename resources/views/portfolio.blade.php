<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js|https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style type="text/css">

/*optional css*/

body{ padding: 20px; }

</style>

</head>


<div class="table-responsive-xl ">
<table id="example" class="table table-striped table-bordered mytable" >
        <thead>
           
               
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Project</th>
                  <th scope="col">Nama karyawan</th>
                  <th scope="col">Software</th>
                  <th scope="col">Hardware</th>
                  <th scope="col">Deskripsi Proyek</th>
                  <th scope="col">Link Flyer(PDF)</th>
                   <!-- <th></th>
                <th></th> -->
                </tr>
                

        </thead>

        <body>
        <title>Daftar Portofolio</title>


      

      
<!-- <div class="container"> -->

  <div class="topnav navbar navbar-expand-xl navbar-dark bg-dark width=100% ">
<!--   
        <a href="/cv">LIST CV</a>
        <a href="/portfolio">LIST PORTFOLIO</a>
        <a href="/signout">SIGN OUT</a>

        

      </div> -->
 
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="/cv">LIST RESUME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="/portfolio">LIST PORTFOLIO</a>
    </li>
    @auth
    @if(Auth::user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link " data-toggle="pill" href="/admin">ADMIN</a>
    </li>
    @endif
    @endauth
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="/signout">SIGN OUT</a>
    </li>
  </ul>
  
  </div>

  <!-- Tab panes -->
  
    <br>
          
        </body>

        <tbody>

    <!-- <h2 align="center">Daftar Portofolio projek Karyawan Magang 2019</h2> -->
   
   
            
            
        <tr>
            <th scope="row">1</th>
            <!-- <td>1</td> -->
            <td>Big Data Exploration</td>
            <td style="white-space:nowrap;" ><p>1. Kevin Munandar</p>
                <p>2. Muhamad Fadel</p>
                <p>3. Maykel Wongkar</p>
                <p>4. Chalvin Dinata</p>
                <td style="white-space:nowrap;" ><p>1. Apache Airflow</p>
                <p>2. MapInfo</p>
                <p>3. FileZilla</p>
                <p>4. Hadoop Hortonworks</p>
                <p>5. Visual Code</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Melakukan eksplorasi tentang big data menggunakan HortonWorks SandBox.
</p> 
                </td>
                <td> <p><a href="assets/Portfolio BigData.pdf">Flyer</a></p>
                </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <!-- <td>2</td> -->
            <td>MuslimPocket</td>
             <td style="white-space:nowrap;" ><p>1. Inez Christiani</p>
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
                <td><p>hardware</p>
                </td>
                <td> <p>Muslimpocket adalah sebuah aplikasi mobile yang akan mendampingi ibadah Umat Muslim di Indonesia. Hanya dengan menginstall aplikasi ini, kamu bisa menemukan masjid di sekitar mu, berbincang dengan ustadz , mengingatkan waktu shalat , dsb</p>
                </td>
                <td> <p><a href="/assets/muslimpocket_compressed.pdf">Flyer</a></p>
        </tr>

        <tr>
            <!-- <td>3</td> -->
            <th scope="row">3</th>

            <td>MuslimPocket(IOS)
            <td><p>1. Mohammad Alhafidz Permana Baskoro </p>
                <p>2. Inez Christiani</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Postman</p>
                <p>3. Xcode</p>
                <p>4. Navicat</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Muslimpocket adalah sebuah aplikasi mobile yang akan mendampingi ibadah Umat Muslim di Indonesia. Hanya dengan menginstall aplikasi ini, kamu bisa menemukan masjid di sekitar mu, berbincang dengan ustadz , mengingatkan waktu shalat , dsb</p>
                </td>
                <td> <p><a href="/assets/muslimpocket_compressed.pdf">Flyer</a></p>
        </tr>

        <!-- <tr>
            <th scope="row">4</th> -->
            <!-- <td>4</td> -->
            <!-- <td><a href="">Jaring Laut Application</a>
            <td><p>1. Inez Christiani</p>
                <p>2. Martinus G B L Parera</p>
                <p>3. Stephanie Wilhelmina</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Android Studio</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi Jaring Laut adalah aplikasi marketplace yang bertujuan untuk menampung petani dan menghubungkannya dengan buyer.
</p> 
                </td>

        </tr> -->

        <tr>
            <th scope="row">4</th>
            <!-- <td>5</td> -->
            <td>Immobi Tracker (Web)
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
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi keluaran PT Immobi Solusi Prima yang berfungsi untuk melakukan monitoring project-project yang sedang berjalan ataupun project yang sudah closed.
</p> 
                </td>
                <td> <p><a href="/assets/photo6260539743527872770.jpg">Flyer</a></p>
        </tr>


        <tr>
            <th scope="row">5</th>
            <!-- <td>6</td> -->
            <td>Immobi Tracker (IOS)
            <td><p>1. Mohammad Alhafidz Permana Baskoro </p>
                <p>2. Aditya Pradipta</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Postman</p>
                <p>3. Xcode</p>
                <p>4. ProjectLibre</p>

              <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi keluaran PT Immobi Solusi Prima yang berfungsi untuk melakukan monitoring project-project yang sedang berjalan ataupun project yang sudah closed.
</p> 
                </td>
                <td> <p><a href="/assets/photo6260496566221646079.jpg">Flyer</a></p>

        <tr>
            <th scope="row">6</th>
            <!-- <td>7</td> -->
            <td>Rating Karyawan (IOS)
            <td><p>1. Justin Tanner </p>
                <p>2. Aulia Prameswari Elyanto</p>
              <td><p>1. Xcode</p>
                <p>2. Visual Studio Code</p>
                <p>3. Trello</p>
                <p>4. Terminal</p>
                <p>5. Postman</p>
                <p>6. GitLab/GitHub</p>
                <p>7. Navicat</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi Rating Karyawan adalah sebuah aplikasi internal yang bertujuan untuk memberikan penilaian terhadap seluruh karyawan lewat mobile phone.
</p> 
                </td>
                <td> <p><a href="assets/brosur rating karyawan 2.jpg">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">7</th>
            <!-- <td>8</td> -->
            <td>Rating Karyawan (Android)
            <td><p>1. Samuel Sanjaya</p>
                <p>2. Andri Yanto</p>

              <td><p>1. Android Studio</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi Rating Karyawan adalah sebuah aplikasi internal yang bertujuan untuk memberikan penilaian terhadap seluruh karyawan lewat mobile phone.
</p> 
                </td>
                <td> <p><a href="assets/brosur rating karyawan 2.jpg">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">8</th>
            <!-- <td>9</td> -->
            <td>CRM App (Sales and Marketing App)
            <td><p>1. Adlez Devha Bernandez Rakinaung</p>
                <p>2. Andri Yanto</p>
                <p>3. Hestiara Agatha</p>
                <p>4. Samuel Sanjaya</p>

                <td style="white-space:nowrap;" ><p>1. Google Drive</p>
                <p>2. OODO</p>
                <p>3. Android Studio</p>
                <p>4. Navicat</p>
                <p>5. Visual Code</p>
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi seperti CRM yang ada di Odoo Web, dengan tambahan fitur Digital Marketing. Dibangun dengan Android Studio (Javascript, Node.JS, React.JS)
</p> 
                </td>
                <td> <p><a href="assets/Brosur CRM (5).pdf">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">9</th>
            <!-- <td>10</td> -->
            <td>Data Analytics(PT. Pupuk Indonesia)
            <td><p>1. Aprilia Dwi Lestari</p>
                <p>2. Hengky</p>
                <p>3. Krisna Fernando</p>
                <p>4. Imanuel Ruben</p>

              <td><p>1. Google Drive</p>
                <p>2. Anaconda</p>
                <p>3. Jupyter Notebook</p>
                
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi berbasis web yang bertujuan untuk memudahkan dalam menentukan target prioritas distribusi pupuk dan meningkatkan kualitas proses pengambilan keputusan 
</p> 
                </td>
                <td> <p><a href="assets/Portfolio Data Analyst.pdf">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">10</th>
            <!-- <td>11</td> -->
            <td>Nominatif Entertaint
            <td><p>1. Mohammad Akbar</p>
                <p>2. Aditya Pradipta</p>
                <p>3. Bob Harwin</p>

              <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Terminal</p>
                <p>4. Postman</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Nominatif Entertaint adalah sebuah aplikasi yang bertujuan sebagai sarana untuk klaim entertaint secara online melalui aplikasi berbasis website yang diperuntukan untuk karyawankaryawan Immobi.Apps Nominatif Entertaint terdapat fitur Rekam dan Rekap Nominatif Entertaint. Masing-masing dari fitur diharapkan mampu menunjang kegiatan klaim entertaint pada karyawan Immobi.</p>
                </td>
                <td> <p><a href="assets/Nominatif Entertaint.pdf">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">12</th>
            <!-- <td>12</td> -->
            <td>Rekonsiliasi Payment Muslim Pocket
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
                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi untuk memonitor progres dan perkembangan status payment dan data rekap bank pada aplikasi Muslim Pocket.
</p> 
                </td>
                <td> <p><a href="assets/Rekonsiliasi.pdf">Flyer</a></p>
        </tr>


        <tr>
            <th scope="row">12</th>
            <!-- <td>13</td> -->
            <td>Redsite Project
            <td><p>1. Kevin Munandar</p>
                <p>2. Muhamad Fadel</p>
                <p>3. Adlez Devha Bernandez Rakinaung</p>
                <p>4. Aulia Prameswari Elyanto</p>

                <td style="white-space:nowrap;" ><p>1. Mapinfo</p>
                <p>2. Navicat</p>
                  <p>3. Google Drive</p>
                  <p>4. Visual Studio Code</p>
                  <td><p>hardware</p>
                </td>
                <td> <p>Redsite Project adalah proyek data validasi untuk optimisasi signal di site.
</p> 
                </td>
                <td> <p><a href="assets/Redsite Flyer.pdf">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">13</th>
            <!-- <td>14</td> -->
            <td>Connecta Phase 2 
            <td><p>1. Muhammad Akbar</p>
                <p>2. Samuel Sanjaya</p>
                <p>3. Aditya Pradipta</p>
                

              <td><p>1. Postman</p>
                <p>2. Navicat</p>
                <p>3. Visual Studio Code</p>
                <p>4. Immobi Tracker</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Sebuah web untuk memantau dan melakukan optimalisasi pada jaringan berdasarkan indikator yang terdapat dalam modul - modul connecta.
                    </p>
                </td>
                <td> <p><a href="assets/Portofolio Connecta phase II.pdf">Flyer</a></p>
        </tr>

        <!-- <tr>
            <th scope="row">14</th> -->
            <!-- <td>15</td> -->
            <!-- <td><a href="">Artemis II Phase 2</a>
            <td><p>1. Adrian Hartanto</p>
                <p>2. Ivander Reyner Suryohadi</p>
                <p>3. Aditya Pradipta</p>
                <p>4. Muhammad Fardiansyah</p>


              <td><p>1. Visual Studio Code</p>
                <p>2. Immobi Tracker</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Mengerjakan task task terkait artemis yang diberikan oleh senior programmer</p> 

                </td>

        </tr> -->
<!-- 
        <tr>
            <th scope="row">14</th>
          
            <td><a href="">Panduan Haji & Umroh (Android)</a>
            <td><p>1. Stephanie Wilhelmina</p>
                <p>2. Martinus G B L Parera</p>
                <p>3. Aulia Prameswari Elyanto</p>
        
                

              <td><p>1. Visual Studio Code</p>
                <p>2. Android Studio</p>
                <p>3. Immobi Tracker</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi Panduan Haji & Umroh adalah aplikasi berbasis android yang memiliki fitur Al-Quran, panduan Haji dan Umroh.</p> 

                </td>
                <td><a href="">Flyer</a>
        </tr> -->

        <tr>
            <th scope="row">14</th>
            <!-- <td>17</td> -->
            <td>Ayo Nyoblos
            <td><p>1. Muhammad Akbar</p>
                <p>2. Aditya Pradipta</p>
              
              <td><p>1. Eclipse</p>
                <p>2. Postman</p>
                <p>3. Navicat</p>
                <p>4. GitLab/GitHub</p>
                <p>5. Visual Studio Code</p>
                <p>6. Terminal</p>
                <p>7. Immobi Tracker</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Aplikasi ini berbasis web yang bertujuan sebagai wujud kepedulian untuk membantu Indonesia melaksanakan Pilpres dan Pileg yang lancar
                   dan minim golput. </p>
                </td>
                <td> <p><a href="assets/Portofolio Yoaynyoblos .pdf">Flyer</a></p>
        </tr>

        
        <tr>
            <th scope="row">15</th>
            <!-- <td>18</td> -->
            <td>Cellcom Malaysia
            <td><p>1. Muhammad Fadel</p>
                <p>2. Chalvin Surya Dinata</p>
                <p>3. Kevin Munandar</p>
                <p>4. Maykel Adhitia Wongkar</p>
                <p>5. Aditya Pradipta</p>

              <td><p>1. Filezilla</p>
                <p>2. Navicat</p>
                <p>3. Immobi Tracker</p>
                <p>4. Google Drive</p>

                <td><p>hardware</p>
                </td>
                <td> <p>Mengumpulkan dan memproses data yang diambil dari Ookla dan OpenSignal di region Malaysia menggunakan data Cellcom.
</p> 
                </td>
                <td> <p><a href="assets/Portfolio cellcom malaysia.pdf">Flyer</a></p>
        </tr>

        <tr>
            <th scope="row">16</th>
            <!-- <td>19</td> -->
            <td>Incubator : Angel Investment
            <td><p>1. Justin Tanner</p>
                <p>2. Adlez Devha Bernandez Rakinaung</p>
       
                <td style="white-space:nowrap;" ><p>1. Google Drive</p>
                
              <td><p>hardware</p>
                </td>
                <td> <p>Melakukan inkubasi perusahaan yang berfokus pada produk atau perusahaan digital startup. Yang dimana, explorasi dan analisis dilakukan terhadap perusahaan atau produk yang memiliki potensi untuk dilakukannya investasi oleh P.T Immobi.</p>
                </td>
                <td> <p><a href="assets/Portfolio Inkubasi perusahaan.pdf">Flyer</a></p>
        </tr> 

        
        <tr>
            <th scope="row">17</th>
            <!-- <td>13</td> -->
            <td>OSS Project
            <td><p>1. Kevin Munandar</p>
                <p>2. Muhamad Fadel</p>
                <p>3. Chalvin Surya Dinata</p>
                <p>4. Maykel Wongkar</p>
                <p>5. Aulia Prameswari Elyanto</p>

                <td style="white-space:nowrap;" ><p>1. Apache Airflow</p>
                <p>2. Navicat</p>
                  <p>3. Google Drive</p>
                  <p>4. Visual Studio Code</p>
                  <p>5. Filezilla</p>
                  <p>6. Immobi Tracker</p>
                  <td><p>hardware</p>
                </td>
                <td> <p>OSS adalah projek integrasi data dimana data-data yang dibutuhkan diambil secara otomatis</p> 
                </td>
                <td> <p><a href="assets/Porfolio OSS.PDF">Flyer</a></p>

        </tr>

        </tbody>
        </div>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script  src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


<script type="text/javascript">
$('.mytable').dataTable( {

"responsive" : true
} );
</script>

    
    
    </table>
</html>