<html>
    <body>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

                Code : <input type="text" name="code" placeholder="comma separated values"><br><br>

                Name : <input type="text" name="name" placeholder="comma separated values"><br><br>

                Designation : <input type="text" name="designation" placeholder="comma separated values"><br><br>

                Account Number : <input type="text" name="accno" placeholder="comma separated values"><br><br>

                Join Date : <input type="text" name="joindate" placeholder="comma separated values"><br><br>

                Basic : <input type="text" name="basic" placeholder="comma separated values"><br><br>

                Earning : <input type="text" name="earning" placeholder="comma separated values"><br><br>

                Deduction : <input type="text" name="deduction" placeholder="comma separated values"><br><br>

                <input type="submit" name="submit">

            </form>



        <?php
        class employee
        {
            protected $ecode;
            protected $ename;
            protected $edesignation;
            
            function __construct($ecode,$ename,$edesignation)
            {
                $this->ecode = $ecode;
                $this->ename = $ename;
                $this->edesignation = $edesignation;
            }
            
            function __destruct(){}
            
            function display()
            {
                echo "Code : ".$this->ecode."<br>";
                echo "Name : ".$this->ename."<br>";
                echo "designation : ".$this->edesignation."<br>";
            }
            
        }


        class emp_acc extends employee
        {
            protected $acccno;
            protected $jdate;
            
            function __construct($ecode,$ename,$edesignation,$accno,$jdate)
            {
                parent::__construct($ecode,$ename,$edesignation);
                $this->accno = $accno;
                $this->jdate = $jdate;
            }
            
            function __destruct(){}
            
            function display()
            {
                parent::display();
                echo "accno : ".$this->accno."<br>";
                echo "join date : ".$this->jdate."<br>";
            }
        }


        class emp_sal extends emp_acc
        {
            private $basic;
            private $earning;
            private $deduction;
            
            function __construct($ecode,$ename,$edesignation,$accno,$jdate,$basic,$earning,$deduction)
            {
                parent::__construct($ecode,$ename,$edesignation,$accno,$jdate);
                $this->basic = $basic;
                $this->earning = $earning;
                $this->deduction = $deduction;
            }
            
            function __destruct(){}
            
            function getsal()
            {
                $salary = $this->basic + $this->earning - $this->deduction;
                return $salary;
            }
            
            function display()
            {
                parent::display();
                echo "basic : ".$this->basic."<br>";
                echo "earning : ".$this->earning."<br>";
                echo "deduction : ".$this->deduction."<br>";
            }
            
            
        }

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
                $code = $_POST['code'];
                $name = $_POST['name'];
                $designation = $_POST['designation'];
                $accno = $_POST['accno'];
                $joindate = $_POST['joindate'];
                $basic = $_POST['basic'];
                $earning = $_POST['earning'];
                $deduction = $_POST['deduction'];

  
                $codearr = explode(',',$code);
                $namearr = explode(',',$name);
                $designationarr = explode(',',$designation);
                $accnoarr = explode(',',$accno);
                $joindatearr = explode(',',$joindate);
                $basicarr = explode(',',$basic);                 
                $earningarr = explode(',',$earning);
                $deductionarr = explode(',',$deduction);


                $emp = array();

                $size = sizeof($codearr);
                
                for($i=0;$i<$size;$i++)
                {
                    $emp[$i] = new emp_sal($codearr[$i], $namearr[$i], $designationarr[$i], $accnoarr[$i], $joindatearr[$i], $basicarr[$i], $earningarr[$i], $deductionarr[$i]);
                }

               
                $maxsal = $emp[0]->getsal();
                $temp = 0;
                $maxindex = 0;
                for($i=1;$i<$size;$i++)
                {
                    $temp = $emp[$i]->getsal();
                    if($temp > $maxsal)
                    {
                        $maxsal = $temp;
                        $maxindex = $i;
                    }
                }

                echo "<br>Employee having maximum salary : <br>";
                echo $emp[$maxindex]->display();

                $minsal = $emp[0]->getsal();;
                $temp = 0;
                $minindex = 0;
                for($i=1;$i<$size;$i++)
                {
                    $temp = $emp[$i]->getsal();
                    if($temp < $minsal)
                    {
                        $minsal = $temp;
                        $minindex = $i;
                    }
                }

                echo "<br><br>Employee having minimum salary : <br>";
                echo $emp[$minindex]->display();
        }
        ?>

    </body>
</html>
