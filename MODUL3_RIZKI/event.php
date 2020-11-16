<!doctype html>

<html lang="en">

<head>
    <title> Buat Halaman Event</title>
    <style>
        .card {
            margin: 100px;
            padding: 50px;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" >EAD EVENTS</a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active text-light" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <form class="form-inline">
                <li class="nav-item"><a class="nav-link btn btn-outline-light" href="event.php">BUAT EVENT</li></a>
                </form>
            </li>
        </ul>
    </nav>
    <br>
    <P class="text-center text-primary">WELCOME TO EAD REGISTRATION EVENT!</P>
    </nav>

<body>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header bg-primary">
      </div>
      <div class="card-body ">


      
      <form action="HOME.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label>Nama </label>
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
  <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
</svg>
        <br>
    <input type="text" class="form-control" placeholder="Lengkapi Nama " name="nama" required="required">
   </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
   <div class="form-group">
    <label>Unduh Gambar
    </label>
        <br>
    <input type="file" class="form-control" name="foto" required="required">
   </div> 
      <label>Kategori</label>  
      <br>
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Online</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Offline</label>
</div>
  </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card ">
    <div class="card-header bg-danger">
      </div>
      <div class="card-body">
            <form action="HOME.php" method="post" enctype="multipart/form-data">
    <div class="form-group ">
            <label for="example-date-input" class=" col-form-label">Date</label>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
  <path fill-rule="evenodd" d="M8 8a.5.5 0 0 1 .5.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 8 8z"/>
</svg>
            <br>
            <input name="date" class="form-control" type="date" value="dd/mm/yy" id="example-date-input">
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
      <label for="inputState">Jam mulai </label>
      <select id="inputState" class="form-control">
        <option selected>18.00</option>
        <option>20.00</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Jam Berakhir </label>
      <select id="inputState" class="form-control">
        <option selected>19.00</option>
        <option>22.00</option>
      </select>
      </div>
      </div>
     <div class="form-group">
    <label>Venue </label>
        <br>
    <input type="text" class="form-control"  name="Lokasi" required="required">
   </div>
      <div class="form-group">
    <label>Harga </label>
        <br>
    <input type="text" class="form-control" placeholder="Rp..." name="harga" required="required">
   </div>
      <label>Benefit </label>
        <br>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1[]" value="Konsumsi">
  <label class="form-check-label" for="inlineCheckbox1">Konsumsi</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2[]" value="Sertifikat">
  <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3[]" value="Souvenir">
  <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
</div>
<br>
<br>
<p style="text-align:right">
<button class="btn btn-primary" type="submit">Kirim</button>
<button class="btn btn-danger" type="submit">Batal</button>
</p>
  </form>
      </div>
    </div>
  </div>
</div

<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>