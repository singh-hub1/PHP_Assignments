<html>
    <body >
    <center>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                
               ID : <br><input type="text" name="id" placeholder=" comma separated values"><br><br>
               Name : <br><input type="text" name="name" placeholder="comma separated values"><br><br>
               Department : <br><input type="text" name="department" placeholder="comma separated values"><br><br>
               Salary : <br> <input type="text" name="salary" placeholder="comma separated values"><br><br>
               Bonus : <br><input type="text" name="bonus" placeholder="comma separated values"><br><br>
                <input type="submit" name="submit">
                <input type="reset" name="reset">
            
            </form>
            </center>


    <?php
        class Employee
        {
            protected $id;
            protected $name;
            protected $department;
            protected $salary;
            
            function __construct($id,$name,$department,$salary)
            {
                $this->id = $id;
                $this->name = $name;
                $this->department = $department;
                $this->salary = $salary;
            }
            
            function __destruct()
            {
               // echo "Object is detsroyed!!!";
            }
            
            function display()
            {
                echo "ID : ".$this->id."<br>";
                echo "Name : ".$this->name."<br>";
                echo "Department : ".$this->department."<br>";
                echo "Salary : ".$this->salary."<br>";
            }
            
        }


        class Manager extends Employee
        {
            private $bonus;

            function __construct($id,$name,$department,$salary,$bonus)
            {
                parent::__construct($id,$name,$department,$salary);
                $this->bonus = $bonus;
            }
            
            function __destruct()
            {
               // echo "Object is detsroyed!!!";
            }
            
            function display()
            {
                parent::display();
                echo "Bonus : ".$this->bonus."<br>";
            }

            function gettotalsalary()
            {
                return $this->bonus + $this->salary;
            }
        }



        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $id = explode(' , ',$_POST['id']);
            $name = explode(' , ',$_POST['name']);
            $department = explode(' , ',$_POST['department']);
            $salary = explode(' , ',$_POST['salary']);
            $bonus = explode(' , ',$_POST['bonus']);

            $emp = array();//empty array
            
 

            for($i=0;$i<6;$i++)
            {
                $emp[$i] = new Manager($id[$i],$name[$i],$department[$i],$salary[$i],$bonus[$i]);
            }

            $maxsalary = $emp[0]->gettotalsalary();
            $index = 0;
            $temp = 0;

            for($i=1;$i<6;$i++)
            {
                $temp = $emp[$i]->gettotalsalary();
                if($temp > $maxsalary)
                {
                    $maxsalary = $temp;
                    $index = $i; 
                }
            }

            $emp[$index]->display();
        }
    ?>

    </body>
</html>
