           <?php 
                if(isset($_POST['login']))
                    {
                        include "../view/co_bloc/co_bloc_loop.php";
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
			include "../view/co_bloc/encart_case1.php";
                        break;
                    
                        case 2:
                        include "../view/co_bloc/encart_case2.php";
                        break;
                    
                        case 3:
                        include "../view/co_bloc/encart_case3.php";
                        echo $_SESSION['login'];
			break;			
                    }
                   
            ?>
