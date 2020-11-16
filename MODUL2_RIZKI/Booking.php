<!DOCTYPE html>
<html>

<head>
  <title>LIBURAN BOOKING .COM</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="HOME.php">HOME<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Booking.php">Booking</a>
        </li>
      </ul>
    </div>
    </div>
    </div>
  </nav>



  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="col-md-4">
          <form>
            <div class="container">
              <div class="row">
                <div class="col text-center">
                  <h3></h3>
                </div>
              </div>

              <div class="form-group row">
                <label for="ststicNama" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="Insert Name" value="">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputNomor" class="col-sm-4 col-form-label">Check-in</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="check" placeholder="Insert Code" value="">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputAlamat" class="col-sm-4 col-form-label">Duration</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="duration" placeholder="dd/mm/yyyy" value="">
                </div>
              </div>


              <div class="form-group row">
                <label for="inputAlamat" class="col-sm-4 col-form-label">Room Type</label>
                <div class="col-sm-8 pt-2">
                  <select class="form-control">
                    <option>Standard</option>
                    <option>Superior</option>
                    <option>Luxury</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputAlamat" class="col-sm-4 col-form-label">Add Services(s)</label>
                <div class="col-sm-8 pt-2">
                  <input type="checkbox" name="bayar"> Room Service
                  <input type="checkbox" name="bayar"> Breakfast
                </div>
              </div>

              <div class="form-group row">
                <label for="inputAlamat" class="col-sm-4 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="duration" placeholder="Fill your number" value="">
                </div>
              </div>


              <div class="form-group row">
                <label for="inputAlamat" class="col-sm-8 col-form-label"></label>
                <div class="col-sm-8">
                <div class="card-footer text-muted"> <a href="MY Booking.php" class="btn btn-primary">Book Now</a></div>

                  <img src="2.jpg" class="card-img-top" alt="">
                </div>
              </div>

            </div>
        </div>
      </div>
    </div>
  </div>
  </from>
</body>

</html>