<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->

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

<div class="table-responsive-xl">

<table id="example" class="table table-striped table-bordered mytable" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Projek</th>
                <th>Software</th>
                <th>Link CV(PDF)</th>
            </tr>
        </thead>
        <tbody>

    <!-- <h2 align="center">Daftar CV Karyawan Magang 2019</h2> -->
    <title>Daftar CV</title>   

        <div class="topnav navbar navbar-expand-md navbar-dark bg-dark">
        <a href="/cv">LIST CV</a>
        <a href="/portfolio">LIST PORTFOLIO</a>
        <a href="/signout">SIGN OUT</a>
    </div>
           
            <!-- <td>1</td> -->
            <th scope="row">1</th>
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
            <td><a href="/assets/Kevin's Resume.pdf"><p>Resume</p> </a>
            <a href="/assets/CV Immobi Format Kevin Munandar.pdf"><p>Resume(Immobi Format)</p></a></td>
            
            </tr>

            <tr>
            <!-- <td>2</td> -->
            <th scope="row">2</th>
            <td>Muhamad Fadel</td>
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
            <td><a href="/assets/Muhamad Fadel - cv.pdf">Resume</a>
            <a href="/assets/CV Immobi Format Fadel.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>
        
        
        <tr>
            <!-- <td>3</td> -->
            <th scope="row">3</th>
            <td>Maykel Wongkar</td>
            <td><p>1. Big Data Exploration</p>
                <p>2. Rekonsiliasi Payment Muslim Pocket</p>
                <p>3. OSS Project</p>
                <p>4. Connecta Database</p>
                <p>5. IT Support : LogicalDOC</p>
                <p>6. Cellcom Malaysia</p>

            <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Immobi Tracker (QdPM)</p>
                <p>4. Pycharm</p>
                <p>5. Hadoop Hortonworks</p>
                <p>6. Postman</p>

            <td><a href="/assets/Maykel's Resume(1).pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Maykel.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>

            <th scope="row">4</th>
            <!-- <td>4</td> -->
            <td>Chalvin Dinata</td>
            <td><p>1. Big Data Exploration</p>
                <p>2. Rekonsiliasi Payment Muslim Pocket</p>
                <p>3. OSS Project</p>
                <p>4. Connecta Database</p>
                <p>5. Cellcom Malaysia</p>

            <td><p>1. Visual Studio Code</p>
                <p>2. Navicat</p>
                <p>3. Immobi Tracker (QdPM)</p>
                <p>4. Pycharm</p>
                <p>5. Hadoop Hortonworks</p>
                <p>6. Postman</p>

            <td><a href="/assets/Chalvin's Resume.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Chalvin.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <!-- <td>5</td> -->
            <td>Stephanie Wilhelmina</td>
            <td><p>1. Muslim Pocket (Android)</p>
                <p>2. Panduan Haji & Umroh (Android)</p>
                <p>3. Immobi Tracker (Web)</p>
                <p>4. Jaring Laut Application</p>

            <td><p>1. Visual Studio Code</p>
                <p>2. Postman</p>
                <p>3. Android Studio</p>
                <p>4. Trello Scrum</p>
                <p>5. Navicat</p>   
                <p>6. Immobi Tracker (QdPM)</p>

            <td><a href="/assets/Stephanie_Wilhelmina_CV.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Stephanie.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>


        <tr>
        
            <th scope="row">6</th>
            <!-- <td>6</td> -->
            <td>Inez Christiani</td>
            <td><p>1. MuslimPocket(iOS)</p>
                <p>2. Jaring Laut Application</p>
                <p>2. Incubator : Muslim Pocket</p>
            <td><p>1. Trello Scrum</p>
                <p>2. Immobi Tracker</p>
                <p>3. Google Drive</p>

            <td><a href="/assets/CV - Inez Christiani.pdf">Resume</a></td>
        </tr>

        <tr>
            <th scope="row">7</th>
            <!-- <td>7</td> -->
            <td>Muhammad Fardiansyah</td>
            <td><p>1. Incubator : Muslim Pocket</p>
                <p>2. Muslim Pocket (Android)</p>
                <p>3. Ookla Malaysia</p>
                <p>4. Artemis II Phase 2</p>
                <p>5. CMS : Muslim Pocket</p>
                <p>6. Rating Karyawan (Android)</p>

            <td><p>1. Trello Scrum</p>
                <p>2. PostgreSQL</p>
                <p>3. Draw.io</p>
                <p>4. Sublime</p>
                <p>5. Visual Studio Code</p>
                <p>6. Immobi Tracker (QdPM)</p>
                <p>7. Google Drive</p>

            <td><a href="/assets/MuhammadFardiansyahCV.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Fardiansyah.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">8</th>
            <!-- <td>8</td> -->
            <td>Adlez Devha Bernandez Rakinaung</td>
            <td><p>1. Redsite Project</p>
                <p>2. CRM App (Sales and Marketing App)</p>
                <p>3. Incubator : Angel Investment</p>
                <p>4. Muslim Pocket</p>
            <td><p>1. Trello Scrum</p>
                <p>2. Google Drive</p>
                <p>3. Immobi Tracker</p>
            <td><a href="/assets/CV (Adlez D.B Rakinaung) (3).pdf">Resume</a></td>
        </tr>

        <tr>
            <th scope="row">9</th>
            <!-- <td>9</td> -->
            <td>Justin Tanner</td>
            <td><p>1. Rating Karyawan(iOS)</p>
                <p>2. CRM App (Sales and Marketing App)</p>
                <p>3. Incubator : Angel Investment</p>
            <td><p>1. Xcode</p>
                <p>2. Google Drive</p>
                <p>3. Immobi Tracker</p>
            <td><a href="/assets/Justin's Resume.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Justin.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">10</th>
            <!-- <td>10</td> -->
            <td>Martinus G B L Parera</td>
            <td><p>1. Muslim Pocket(Android)</p>
                <p>2. Jaring Laut Application</p>
            <td><p>1. Xcode</p>
                <p>2. Google Drive</p>
                <p>3. Immobi Tracker</p>
            <td><a href="/assets/Martinus's Resume.pdf">Resume</a>
            <a href="/assets/CV Immobi Format Martinus.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">11</th>
            <!-- <td>11</td> -->
            <td>Mohammad Akbar</td>
            <td><p>1. Immobi Tracker (Web)</p>
                <p>2. Nominatif Entertaint</p>
                <p>3. Rekonsiliasi Payment Muslim Pocket</p>
                <p>4. Muslim Pocket</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
            <td> <a href="/assets/Cv_akbar2019.pdf">Resume</a> </td>
        </tr>

        <tr>
            <th scope="row">12</th>
            <!-- <td>12</td> -->
            <td>Aditya Pradipta</td>
            <td><p>1. Immobi Tracker (Web)</p>
                <p>2. Nominatif Entertaint</p>
                <p>3. Rekonsiliasi Payment Muslim Pocket</p>
            <td><p>1. Trello Scrum</p>
                <p>2. Immobi Tracker</p>
                <p>3. Google Drive</p>
            <td> <a href="/assets/CV-Aditya Pradipta.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Aditya.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">13</th>
            <!-- <td>13</td> -->
            <td>Bob Harwin</td>
            <td><p>1. Immobi Tracker (Web)</p>
                <p>2. Nominatif Entertaint</p>
                <p>3. Rekonsiliasi Payment Muslim Pocket</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
            <td> <a href="/assets/Bob's Resume.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Bob Harwin.pdf"><p>Resume(Immobi Format)</p> </a></td>
        </tr>

        <tr>
            <th scope="row">14</th>
            <!-- <td>14</td> -->
            <td>Bagas Kuncoro</td>
            <td><p>1. Rekonsiliasi Payment Muslim Pocket</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
            <td> <a href="/assets/CV BAGAS.pdf">Resume</a>
            <a href="/assets/CV Immobi Format Bagas.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">15</th>
            <!-- <td>15</td> -->
            <td>Hestiara Agatha </td>
            <td><p>1. CRM App(Sales and Marketing App)</p>
                <p>2. Immobi Tracker(Web)</p>
            <td><p>1. Android Studio</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
            <td> <a href="/assets/hestiara-agatha-cv-resized.pdf">Resume</a> </td>
        </tr>

        <tr>
            <th scope="row">16</th>
            <!-- <td>16</td> -->
            <td>Mohammad Alhafidz Permana Baskoro</td>
            <td><p>1. Immobi Tracker (iOS)</p>
                <p>4. Muslim Pocket(iOS)</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
                <p>6. Xcode</p>
            <td> <a href="/assets/Cv_Mohammad_Alhafidz_Permana_Baskoro.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Afi.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">17</th>
            <!-- <td>17</td> -->
            <td>Andri Yanto</td>
            <td><p>1. CRM App(Sales and Marketing App)</p>
                <p>2. Rating Karyawan(Android)</p></p>
            <td><p>1. Android Studio</p>
                <p>2. Visual Studio Code</p>
            <td> <a href="/assets/Andri's Resume (1).pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Andri Yanto.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">18</th>
            <!-- <td>18</td> -->
            <td>Adrian Hartanto</td>
            <td><p>1. Immobi Tracker(Web)</p>
                <p>2. Rating Karyawan(Web)</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
            <td> <a href="/assets/CV Adrian Hartanto.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Adrian.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">19</th>
            <!-- <td>19</td> -->
            <td>Ivander Reyner</td>
            <td><p>1. Immobi Tracker(Web)</p>
                <p>2. Rating Karyawan(Web)</p>
            <td><p>1. Postman</p>
                <p>2. Visual Studio Code</p>
                <p>3. Navicat</p>
                <p>4. Terminal</p>
                <p>5. GitLab / GitHub</p>
            <td> <a href="/assets/Ivander's Resume.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Ivander Reyner.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">20</th>
            <!-- <td>20</td> -->
            <td>Aulia Prameswari</td>
            <td><p>1. Muslim Pocket</p>
                <p>2. Rating Karyawan(Web)</p>
                <p>3. Redsite Project</p>
            <td><p>1. Trello Scrum</p>
                <p>2. Immobi Tracker</p>
                <p>3. Google Drive</p>
            <td> <a href="/assets/Aulia's Resume.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Aulia.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">21</th>
            <!-- <td>21</td> -->
            <td>Samuel Sanjaya</td>
            <td><p>1. Rating Karyawan</p>
                <p>2. CRM App(Sales and Marketing App)</p>
                <p>3. Connecta Phase 2</p>

            <td><p>1. Android Studio</p>
                <p>2. Visual Studio Code</p>
                <p>3. Immobi Tracker (QdPM)</p>
                <p>4. Trello Scrum</p>
            <td> <a href="/assets/Samuel Sanjaya CV.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Samuel Sanjaya.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">22</th>
            <!-- <td>22</td> -->
            <td>Aprilia Dwi Lestari</td>
            <td><p>1. Muslim Pocket</p>
                <p>2. Data Analysis</p>
            <td><p>1. Trello Scrum</p>
                <p>2. Immobi Tracker</p>
                <p>3. Google Drive</p>
            <td> <a href="/assets/Aprilia Dwi.L (3).pdf">Resume</a>
            <a href="/assets/CV Immobi Format April.pdf"><p>Resume(Immobi Format)</p></a></td>
        </tr>

        <tr>
            <th scope="row">23</th>
            <!-- <td>23</td> -->
            <td>Imanuel Ruben</td>
            <td><p>1. Data Analytics (PT Pupuk Indonesia)</p>
            <td><p>1. Anaconda</p>
                <p>2. Jupyter Notebook</p>
            <td> <a href="/assets/Imanuel Ruben.pdf">Resume</a> </td>
        </tr>

        <tr>
            <th scope="row">24</th>
            <!-- <td>24</td> -->
            <td>Hengky</td>
            <td><p>1. Data Analytics (PT Pupuk Indonesia)</p>
            <td><p>1. Anaconda</p>
                <p>2. Jupyter Notebook</p>
            <td> <a href="/assets/Hengky.pdf">Resume</a> </td>
        </tr>

        <tr>
            <th scope="row">25</th>
            <!-- <td>25</td> -->
            <td>Krisna Fernando</td>
            <td><p>1. Data Analytics (PT Pupuk Indonesia)</p>
            <td><p>1. Anaconda</p>
                <p>2. Jupyter Notebook</p>
            <td> <a href="/assets/Krisna Fernando.pdf"><p>Resume</p></a>
            <a href="/assets/CV Immobi Format Krisna.pdf"><p>Resume(Immobi Format)</p></a></td>
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
        </div>

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} ); -->

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


    
    </script>
    </table>