<html>
  <head>
    <style>
      body
      {
        background:#f4a9a8;
      }
    </style>
  </head>
  <body>
    <form action="Action_2.php" method="POST">
      <center>
        <h2>Select any one shape below</h2>
        <label>Enter the height of triangle::</label><br><br>
        <input type="text" name="h1" id="h1"><br>
        <br>
        <label>Enter the base of triangle::</label><br><br>
        <input type="text" name="b1" id="b1"><br>

        <br><br>
        <label>Enter the side of square::</label><br><br>
        <input type="text" name="a1" id="a1"><br>

        <br><br>
        <label>Enter the length of rectangle::</label><br><br>
        <input type="text" name="l1" id="l1"><br>
       <br><br>
        <label>Enter the breadth of rectangle::</label><br><br>
        <input type="text" name="b2" id="b2"><br>

        <br><br>
        <label>Enter the radius of circle::</label><br><br>
        <input type="text" name="r1" id="r1"><br>
<br><br><br>

        <label ><h2>Select a shape for doing operation::</h2> </label><br><br>
        <input type="radio" name="op" value=1>TRIANGLE <br><br>
        <input type="radio" name="op" value=2>SQUARE <br><br>
        <input type="radio" name="op" value=3>RECTANGLE <br><br>
        <input type="radio" name="op" value=4>CIRCLE <br><br>
       
        <br><br><br>

        <input type="submit" value="submit">
        <input type="reset" value="reset">
