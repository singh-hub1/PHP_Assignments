<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <center>
        <form action="Action_3.php" method="POST">
        <label >Teacher Code :: </label>
        <br>
        <input type="text" name="code" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Name :: </label>
        <br>
        <input type="text" name="name" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Qualification :: </label>
        <br>
        <input type="text" name="qual" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Acc_nos :: </label>
        <br>
        <input type="text" name="Acc_nos" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Joining date :: </label>
        <br>
        <input type="date" name="date" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Basic pay :: </label>
        <br>
        <input type="text" name="basic_pay" placeholder="comma separated values">
        <br><br><br>
        <label >Teacher Earning :: </label>
        <br>
        <input type="text" name="earn" placeholder="comma separated values">

        <br><br><br>
        <label >Teacher deducation :: </label>
        <br>
        <input type="text" name="dedu" placeholder="comma separated values">
        <br><br><br>
        <label >Your Choice :: </label>
       <br><br>

        <input type="radio" name="op" value=1>For Master table <br><br>

        <label >To sort an entry :: </label><br>

        <br>
        <input type="radio" name="op" value=2>Sort <br><br>

        <label >To search an entry :: </label><br>

        <input type="text" name="search" ><br>

        <input type="radio" name="op" value=3>Search an entry <br><br>

        <input type="radio" name="op" value=4>Display salary of all 

        teachers <br><br>

        <input type="submit" value="SUBMIT">
        <input type="reset" value="RESET"><br>
        </form>
    </center>
    </body>

</html>