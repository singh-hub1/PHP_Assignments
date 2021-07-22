<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Vishal Singh</title>
    <style>
      body
      {
        /* background: #caf7e3; */
        /* background-image:url('https://images.pexels.com/photos/268966/pexels-photo-268966.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'); */
        background-image:url('https://images.pexels.com/photos/673648/pexels-photo-673648.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
       

      }
      .Vishal
      {
        font-size: 30px;;
        font-weight: 500;
        font-family:Arial, Helvetica, sans-serif ;
        font-style: oblique;
        /* color:cyan; */
        color:black;
      }

      #anchor
      {
     
      margin-bottom: 10px;
        margin-left: 450px;
     }
     #set
     {
      /* margin-top: 50px; */
      margin-left: 100px;
     }

     #sent
     {
      margin-right: 200px;
     }
    </style>
  </head>

  <body>
    <center>
      <h1 style="color:hotpink;" class="Vishal" >Please Fill the Complete Form.</h1>
      <br>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <form class="row g-3">
          <div class="col-md-3">
            <label for="validationDefault01" class="form-label Vishal" >First name</label>
            <input type="text" class="form-control" id="validationDefault01" name="fname" required>
          </div>
          <br>
          <div class="col-md-3">
            <label for="validationDefault02" class="form-label Vishal" >Last name</label>
            <input type="text" class="form-control" id="validationDefault02" name="lname" required>
          </div>
          <br>
          <div class="col-md-3">
            <label for="validationDefaultUsername" class="form-label Vishal" >Email</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"></span>
              <input type="text" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <br>
          <div class="col-md-3">
            <label for="validationDefault03" class="form-label Vishal">City</label>
            <input type="text" class="form-control" id="validationDefault03" name="city" required>
          </div>
          <br>
          <div class="col-md-3">
            <label for="validationDefault04" class="form-label Vishal" >State</label>
            <select class="form-select" id="validationDefault04" name="state" required>
              <option selected disabled value="">Choose...</option>
              <option>Bihar</option>
              <option>Goa</option>
              <option>Maharashtra</option>
              <option>Kerala</option>
              <option>Chennai</option>
              <option>Bangalore</option>
            </select>
          </div>
          <br>
          <div class="col-md-3">
            <label for="validationDefault05" class="form-label Vishal">Zip</label>
            <input type="text" class="form-control" id="validationDefault05" name="zip" required>
          </div>
          <br>
          <br>
             <div class="col-md-3">
              <label for="validationDefault05" class="form-label Vishal" >Photo</label>
               <input type="file" name="pic" class="form-control" name="pic" required>
             </div>
          <br>
          <div class="col-12">
            <button class="btn btn-primary" name="send"
            type="submit" id="sent">Submit form</button>
          </div>

          <br>
          <br>
         
          <div class="col-12">
            <button class="btn btn-primary" type="reset" id="set">Reset form</button>
          </div>
          <br>
          <br>
          <a href="display.php" class="btn btn-primary" id="anchor">Check Data</a>
        </form>
    </center>
    



    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>