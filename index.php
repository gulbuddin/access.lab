<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pengisian Jadwal Mahasiswa </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.png">
    <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</head>
  </head>
       <body>
         <nav class="navbar navbar-default" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
               <img alt="Brand" src="">
                </a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="hasil_jadwal.php">Jadwal Mata Kuliah</a>
                  </li>
                 
                <li><a role="menuitem" tabindex="-1" href="zakathasil.php">Input Mata Kuliah</a></li>
                
                
                        
                </div>
          </nav>
          <div class="container">
            <div class= "row clearfix">
              <div class="col-md-2 column">
              </div>
              
                <center><h3>Pengisian Jadwal Mahasiswa</h3></center><br>
                    <form class="form-horizontal" role="form" name="daftar" method="post" action="prosesreg.php">
                       <div class="form-group">
                         <label class="col-sm-offset-1 control-label">Form Pengisian</label>
                        <div class="col-sm-4">
                        </div>
                      </div>
                      <div class="form-group">
                         <label for="username" class="col-sm-5 control-label">Nama</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama">
                      </div>
                     </div>
                     <div class="form-group">
                         <label for="password" class="col-sm-5 control-label">NIM</label>
                       <div class="col-sm-4">
                       <input type="text" class="form-control" name="nim">
                      </div>
                   </div>
                    <div class="form-group">
                         <label for="email" class="col-sm-5 control-label">Jurusan</label>
                       <div class="col-sm-4">
                       <input type="text" class="form-control" name="jurusan">
                      </div>
                  </div>
                 
              <div class="container">
                <p>Silahkan Input Mata kuliah Anda</p>
                <table class="table table-hover">
                  <thread>
                    <tr>
                      <th>Jam</th>
                      <th><center>Senin</center></th>
                      <th><center>Selasa</center></th>
                      <th><center>Rabu</center></th>
                      <th><center>kamis</center></th>
                      <th><center>Jumat</center></th>
                      <th><center>Sabtu</center></th>
                    </tr>
                  </thread>
                  <tbody>
                    <tr>
                      <td>06:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>08:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                      
                    </tr>
                    <tr>
                      <td>10:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                     
                    </tr>
                    <tr>
                      <td>12:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                     
                    </tr>
                    <tr>
                      <td>14:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                     
                    </tr>
                    <tr>
                      <td>16:30</td>
                      <td>
                         <input type="text" class="formcontrol" name="senin">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="selasa">
                      </td>
                      <td>

                         <input type="text" class="formcontrol" name="rabu">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="kamis">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="jumat">
                      </td>
                      <td>
                         <input type="text" class="formcontrol" name="sabtu">
                      </td>
                      
                    </tr>
                  </tbody>
                  </table>
                  </div>

              <div class="form-group">
                <div class="col-sm-offset-10 col-sm-5">
                  <button type="submit" class="btn btn-success">Simpan Jadwal</button>
                </div>
              </div>




     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>