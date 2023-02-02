<!doctype html>
<html lang="en">
  <head>
  <title>Announcement</title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- external CSS-->
    <link rel='stylesheet' href="style.css">
    
  </head>
  <body>

    <section id ="nav">
    <h2>Digiboxx Hub<br>Welcome to the Announcement Portal</h2>
    </nav>

<section id="input">
    
        <h3>Please Enter the announcement details</h3>

        <form>

        <div class="d-flex justify-content-center">
  <div class="row mb-3 w-50 p-2" >
    <label for="ControlInput1" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="ControlInput1" placeholder="Title of Announcement">
        
    </div>
  </div></div>

  <div class="d-flex justify-content-center">
  <div class="row mb-5 w-50 p-2">
    <label for="ControlTextarea1" class="col-sm-2 col-form-label">Desciption</label>
    <div class="col-sm-10">
    
    <textarea type="text" name="text" class="form-control" id="ControlTextarea1" rows="3" placeholder="Description of the Announcement"></textarea>

    </div>
    </div></div>


    <div class="d-flex justify-content-center">
    <div class="row mb-3 w-50 p-1">
    <label for="DatelInput1" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-10">
        <input type="date" name="start" class="form-control" id="DateInput1">
    </div>
    </div></div>

    <div class="d-flex justify-content-center">
    <div class="row mb-3 w-50 p-1">
    <label for="DatelInput1" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-10">
        <input type="date" name="start" class="form-control" id="DateInput2">
    </div>
    </div></div>


    <div class="d-flex justify-content-center">
    <fieldset class="row mb-3 w-50 p-2">
    <legend class="col-form-label col-sm-2 pt-0">Status</legend>

    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Publish
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Enterred
        </label>
      </div>
  </fieldset>
</div>
</section>

<section id ="submit">
        <input class="submit "type="submit" value="Announce">
        <input class = "submit" type="reset" value="Reset">
</section>




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>