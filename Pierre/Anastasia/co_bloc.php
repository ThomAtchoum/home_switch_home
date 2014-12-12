           <?php 
                if(isset($_POST['login']))
                    {
                        include "bloc_co_2.php";
                    }
                    ;
           
                if(isset($_SESSION['login']))
                    {
                        $blocConnexion=3;
                    }
                elseif(isset($blocConnexion))
                    {
                        $blocConnexion=$blocConnexion;
                    }
                elseif(isset($_POST['blocConnexion']))
                    {
                        $blocConnexion=$_POST['blocConnexion'];
                    }
                else
                    {
                        $blocConnexion=1;
                    }
                    
                    
                switch ($blocConnexion)
                    {
                        default:
                        case 1:
			include "encart_case1.php";
                        break;
                    
                        case 2:
                        include "encart_case2.php";
                        break;
                    
                        case 3:
                        include "encart_case3.php";
                        echo $_SESSION['login'];
			break;			
                    }
                   
            ?>
