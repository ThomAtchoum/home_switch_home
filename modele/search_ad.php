<?php $DB = new PDO("mysql:host=localhost;dbname=home_switch_home", "root", "");
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
$req='';
   
//creation of the query based on the existence of the criterias    
    
    
     
   //dates
   
    if (isset($_POST['dateBegin']) AND ($_POST['dateBegin']!='')) 
        {
        $dateBegin=$_POST['dateBegin'];
        $req=$req.' AND ad.date_begin>='.$dateBegin;
        }
    
    
    if (isset($_POST['adLength']) && ($_POST['adLength']!='')) 
        {
        $adLength=$_POST['adLength'];
        $req=$req.' AND ad.length='.$adLength;  
        }
    
    //area
    
    function fctArea($area)
    {
        global $req;
                        
        if (isset($area) AND $area!='') 
        {
            $req=$req.' AND area.name='.$area;   
        }
    }
    fctArea($_POST['area']);
    
    
    //type of house
        
    if (isset($_POST['houseType']) && ($_POST['houseType']!='')) 
        {
        $houseType=$_POST['houseType'];
        $req=$req.' AND house.house_type='.$houseType;   
        }   
        
    //number of people
        
    if (isset($_POST['nbrPeople']) AND $_POST['nbrPeople'] != '') 
        {
        $nbrPeople=$_POST['nbrPeople'];
        $req=$req.' AND house.nbrPeople='.$nbrPeople;   
        }
   
    
    //number of rooms
    
    if (isset($_POST['nbrRooms']) AND $_POST['nbrRooms'] != '') 
        {
        $nbrRooms=$_POST['nbrRooms'];
        $req=$req.' AND house.nbrRooms='.$nbrRooms;
        }
    
    
    
    
    //layouts
    function fctLayout($name)
    {
        global $req;
                        
        if (isset($_POST[$name]) AND $_POST[$name] === 'on') 
        {
            $req=$req.' AND criteria.name='.$name;   
        }
    }
    
    
    fctLayout('garden');
    
    fctLayout('cour');
    
    fctLayout('uncoveredPool');
     
    fctLayout('coveredPool');
   
    fctLayout('garage');
    
    fctLayout('wifi');
    
    fctLayout('allowedSmoker');
    
    fctLayout('disabledAccess');
    
    if (isset($_POST['allowedAnimals']) AND $_POST['allowedAnimals']==='on')
        {
            $req=$req.' AND criteria.name=allowed_animals';
            
            if (isset($_POST['dog']) AND $_POST['dog']==='on')
            {
                $req=$req.' AND criteria.name=allowed_dog';    
            }
            if (isset($_POST['cat']) AND $_POST['cat']==='on')
            {
                $req=$req.' AND criteria.name=allowed_cat';    
            }
            if (isset($_POST['rats']) AND $_POST['rats']==='on')
            {
                $req=$req.' AND criteria.name=allowed_rats';    
            }
            if (isset($_POST['other']) AND $_POST['other']==='on')
            {
                $req=$req.' AND criteria.name=allowed_other';    
            }
        
        }
    
    
    echo $req;
    //writing the query adding the result of the previous tests
    
    try{
        $askResearch = $DB->prepare('SELECT DISTINCT ad.title, ad.date_begin, ad.date_end, house.pictures, house.rating, user.id 
                                     FROM ad, house, house_area, area, ad_criteria, criteria, user 
                                     WHERE ad.id_house= house.id 
                                     AND house.id_user=user.id 
                                     AND house.id=house_area.id_house 
                                     AND area.id=house_area.id_area 
                                     AND ad.id=ad_criteria.id_ad 
                                     AND criteria.id=ad_criteria.id_criteria '.$req);
        
        $askResearch->execute();
    } catch (PDOException $e){
        $e->getMessage();
    }
    while($resResult = $askResearch->fetch())
    {
            echo $resResult['title']."<br/>";
    
    }
    
    

?>