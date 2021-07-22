<?php

        class teacher
        {
            protected $t_code;
            protected $t_name;
            protected $t_qualification;
        
            
            function __construct($a,$b,$c)
            {
                $this->t_code = $a;
                $this->t_name = $b;
                $this->t_qualification = $c;
            }
            
            function __destruct()
            {}
            
            function display()
            {
                echo "Code : ".$this->t_code."<br>";
                echo "Name : ".$this->t_name."<br>";
                echo "Qualification : ".$this->t_qualification."<br>";
            }
            
        }


        class teach_acc extends teacher
        {
            protected $acc_cno;
            protected $j_date;
            
            function __construct($a,$b,$c,$d,$e)
            {
                parent::__construct($a,$b,$c);
                $this->acc_no = $d;
                $this->j_date = $e;
            }
            
            function __destruct()
            {}
            
            function display()
            {
                parent::display();
                echo "accno : ".$this->acc_no."<br>";
                echo "join date : ".$this->j_date."<br>";
            }
        }


        class teach_sal extends teach_acc
        {
            private $basic;
            private $earning;
            private $deducation;
            
            
            function __construct($a,$b,$c,$d,$e,$f,$g)
            {
                parent::__construct($a,$b,$c,$d,$e);
                $this->basic = $f;
                $this->earning = $g;
                
            }
            
            function __destruct()
            {}
                       
            function display()
            {
                parent::display();
                echo "basic : ".$this->basic."<br>";
                echo "earning : ".$this->earning."<br>";
                echo "deducation : ".$this->deducation."<br>";
            
            }
            function getsal()
            {
                $salary = $this->basic + $this->earning - $this->deduction;
                return $salary;
            }
            
            
        }

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
                $code = $_POST['code'];
                $name = $_POST['name'];
                $qual = $_POST['qual'];
                $accno = $_POST['Acc_nos'];
                $joindate = $_POST['date'];
                $basic = $_POST['basic_pay'];
                $earning = $_POST['earn'];
                $deducation = $_POST['dedu'];
            

  
                $codearr = explode(',',$code);
                $namearr = explode(',',$name);
                $qualarr = explode(',',$qual);
                $accnoarr = explode(',',$accno);
                $joindatearr = explode(',',$joindate);
                $basicarr = explode(',',$basic);                 
                $earningarr = explode(',',$earning);
                $deducationarr = explode(',',$deducation);
            


                $teacher = array();

                $size = sizeof($codearr);
                
                for($i=0;$i<$size;$i++)
                {
                    $teacher[$i] = new teach_sal($codearr[$i], $namearr[$i], $qualarr[$i], $accnoarr[$i], $joindatearr[$i], $basicarr[$i], $earningarr[$i],$deducationarr[$i]);
                }

                $ch=$_POST['op'];
               
              
                switch($ch)
                {
                        case 1:                        
                                    echo" <table border=1 cellpadding =10>";
                    
                                    echo"<tr>";
                    
                                    echo "<th>CODE</th>";
                    
                                    echo"<th>NAME</th>";
                    
                                    echo"<th>Qualification</th>";
                    
                                    echo"<th>A_no</th>";
                    
                                    echo"<th>Join_Date</th>";
                    
                                    echo"<th>Basic_pay</th>";
                    
                                    echo"<th>earinng</th>";
                    
                                    echo"<th>deduction</th>";
                                    echo "</tr>";

                                  for($i=0;$i<$size;$i++)
                                  {
                                    echo  "<tr>";

                                   $teacher[$i]->display();
                                   echo  "</tr>";
                                  }
                                echo"</table>";
                                break;
                            
                        case 2:echo "After the sorting of the data<br>";
                               $temp=new teacher();
                               for($i=0;$i<$size;$i++)
                               {
                                   for($j+1;$j<$size;$j++)
                                   {
                                       if($teacher[$i]->$t_code>$teacher[$j]->$t_code)
                                       {
                                           $temp=$obj[$i];
                                           $obj[$i]=$obj[$j];
                                           $teacher[$j]=$temp;
                                       }
                                   }
                               }
                               break;

                        case 3:echo "To Search an entry";
                               
                               break;

                        case 4:echo "Display salary of all teachers";

                               break;


                }

            }    
        ?>