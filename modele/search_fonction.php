<?php $DATABASE = new PDO('mysql:host=localhost;dbname=app info g1a', 'root', '');

        //recover the user infos
        
    function userPhoto($id)
    {
        global $connect;
        global $id;
        global $user_photo_url;
        $user_photo_url=$DATABASE->query($connect,"SELECT photo FROM user WHERE user.id="+$id);
    }
    
    function userDescription($id)
    {
        global $connect;
        global $id;
        global $user_description;
        $user_description=mysqli_query($connect,"SELECT description FROM user WHERE user.id="+$id);
    }
    
    function userRating($id)
    {
        global $connect;
        global $id;
        global $user_rating;
        $user_rating=mysqli_query($connect,"SELECT description FROM user WHERE user.id="+$id);
    }
    function userLogin($id)
    {
        global $connect;
        global $id;
        global $user_login;
        $user_login=mysqli_query($connect,"SELECT login FROM user WHERE user.id"+$id);
    }
    function userComments($id)
    {
        global $connect;
        global $id;
        global $user_comments;
        $user_comments=mysqli_query($connect,"SELECT comment_user.text FROM comment_user,user WHERE user.id=comment_user.id_target AND id.target="+$id);
    }
    
    //and the one of the house
        
    function houseTitle($id)
    {
        global $connect;
        global $id;
        global $house_title;
        $house_title=mysqli_query($connect,"SELECT house.title FROM house WHERE house.id="+$id);
    }
    function houseDescription($id)
    {
        global $connect;
        global $id;
        global $house_description;
        $house_description=mysqli_query($connect,"SELECT house.description FROM house WHERE house.id="+$id);
    }
    function houseRating($id)
    {
        global $connect;
        global $id;
        global $house_rating;
        $house_rating=mysqli_query($connect,"SELECT house.rating FROM house WHERE house.id="+$id);
    }
    function houseCreation($id)
    {
        global $connect;
        global $id;
        global $house_creation;
        $house_creation=mysqli_query($connect,"SELECT house.date_creation FROM house WHERE house.id="+$id);
    }
    
    //and the ads
    
    function adDateBegin($id)
    {
        global $connect;
        global $id;
        global $ad_date_begin;
        $ad_date_begin=mysqli($connect,"SELECT ad.date_begin FROM ad WHERE ad.id=" + $id);
    }
    function adDateEnd($id)
    {
        global $connect;
        global $id;
        global $ad_date_end;
        $ad_date_end=mysqli($connect,"SELECT ad.date_end FROM ad WHERE ad.id=" + $id);
    }
    function adTitle($id)
    {
        global $connect;
        global $id;
        global $ad_title;
        $ad_title=mysqli($connect,"SELECT ad.title FROM ad WHERE ad.id=" + $id);
    }
    
    //and user comments
    
    function commentUserTitle($id)
    {
        global $connect;
        global $id;
        global $comment_user_title;
        $comment_user_title=mysqli($connect,"SELECT comment_user.title FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserText($id)
    {
        global $connect;
        global $id;
        global $comment_user_text;
        $comment_user_text=mysqli($connect,"SELECT comment_user.text FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserAuthor($id)
    {
        global $connect;
        global $id;
        global $comment_user_author;
        $comment_user_author=mysqli($connect,"SELECT comment_user.id_author FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserRating($id)
    {
        global $connect;
        global $id;
        global $comment_user_rating;
        $comment_user_rating=mysqli($connect,"SELECT comment_user.rating FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserAvgRating($id)
    {
        global $connect;
        global $id;
        global $comment_user_avg_rating;
        $comment_user_avg_rating=mysqli($connect,"SELECT SUM comment_user.rating FROM comment_user WHERE comment_user.id=" + $id);
    }
    
    // and comment house
    
    function comment_house_title($id)
    {
        global $connect;
        global $id;
        global $comment_house_title;
        $comment_house_title=mysqli($connect,"SELECT comment_house.title FROM comment_house WHERE comment_house_title.id=" + $id);
    }
    function comment_house_text($id)
    {
        global $connect;
        global $id;
        global $comment_house_text;
        $comment_house_text=mysqli($connect,"SELECT comment_house.text FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_author($id)
    {
        global $connect;
        global $id;
        global $comment_house_author;
        $comment_house_author=mysqli($connect,"SELECT comment_house.id_author FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_rating($id)
    {
        global $connect;
        global $id;
        global $comment_house_rating;
        $comment_house_rating=mysqli($connect,"SELECT comment_house.rating FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_avg_rating($id)
    {
        global $connect;
        global $id;
        global $comment_house_avg_rating;
        $comment_house_avg_rating=mysqli($connect,"SELECT SUM comment_house.rating FROM comment_house WHERE comment_house.id=" + $id);
    }