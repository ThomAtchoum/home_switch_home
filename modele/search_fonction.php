<?php 

        //recover the user infos
        
    function userPhoto($id)
    {
        global $DB;
        global $id;
        global $user_photo_url;
        $user_photo_url=$DB->query("SELECT photo FROM user WHERE user.id="+$id);
    }
    
    function userDescription($id)
    {
        global $DB;
        global $id;
        global $user_description;
        $user_description=$DB->query("SELECT description FROM user WHERE user.id="+$id);
    }
    
    function userRating($id)
    {
        global $DB;
        global $id;
        global $user_rating;
        $user_rating=$DB->query("SELECT description FROM user WHERE user.id="+$id);
    }
    function userLogin($id)
    {
        global $DB;
        global $id;
        global $user_login;
        $user_login=$DB->query("SELECT login FROM user WHERE user.id"+$id);
    }
    function userComments($id)
    {
        global $DB;
        global $id;
        global $user_comments;
        $user_comments=$DB->query("SELECT comment_user.text FROM comment_user,user WHERE user.id=comment_user.id_target AND id.target="+$id);
    }
    
    //and the one of the house
        
    function houseTitle($id)
    {
        global $DB;
        global $id;
        global $house_title;
        $house_title=$DB->query("SELECT house.title FROM house WHERE house.id="+$id);
    }
    function houseDescription($id)
    {
        global $DB;
        global $id;
        global $house_description;
        $house_description=$DB->query("SELECT house.description FROM house WHERE house.id="+$id);
    }
    function houseRating($id)
    {
        global $DB;
        global $id;
        global $house_rating;
        $house_rating=$DB->query("SELECT house.rating FROM house WHERE house.id="+$id);
    }
    function houseCreation($id)
    {
        global $DB;
        global $id;
        global $house_creation;
        $house_creation=$DB->query("SELECT house.date_creation FROM house WHERE house.id="+$id);
    }
    
    //and the ads
    
    function adDateBegin($id)
    {
        global $DB;
        global $id;
        global $ad_date_begin;
        $ad_date_begin=$DB->query("SELECT ad.date_begin FROM ad WHERE ad.id=" + $id);
    }
    function adDateEnd($id)
    {
        global $DB;
        global $id;
        global $ad_date_end;
        $ad_date_end=$DB->query("SELECT ad.date_end FROM ad WHERE ad.id=" + $id);
    }
    function adTitle($id)
    {
        global $DB;
        global $id;
        global $ad_title;
        $ad_title=$DB->query("SELECT ad.title FROM ad WHERE ad.id=" + $id);
    }
    
    //and user comments
    
    function commentUserTitle($id)
    {
        global $DB;
        global $id;
        global $comment_user_title;
        $comment_user_title=$DB->query("SELECT comment_user.title FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserText($id)
    {
        global $DB;
        global $id;
        global $comment_user_text;
        $comment_user_text=$DB->query("SELECT comment_user.text FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserAuthor($id)
    {
        global $DB;
        global $id;
        global $comment_user_author;
        $comment_user_author=$DB->query("SELECT comment_user.id_author FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserRating($id)
    {
        global $DB;
        global $id;
        global $comment_user_rating;
        $comment_user_rating=$DB->query("SELECT comment_user.rating FROM comment_user WHERE comment_user.id=" + $id);
    }
    function commentUserAvgRating($id)
    {
        global $DB;
        global $id;
        global $comment_user_avg_rating;
        $comment_user_avg_rating=$DB->query("SELECT SUM comment_user.rating FROM comment_user WHERE comment_user.id=" + $id);
    }
    
    // and comment house
    
    function comment_house_title($id)
    {
        global $DB;
        global $id;
        global $comment_house_title;
        $comment_house_title=$DB->query("SELECT comment_house.title FROM comment_house WHERE comment_house_title.id=" + $id);
    }
    function comment_house_text($id)
    {
        global $DB;
        global $id;
        global $comment_house_text;
        $comment_house_text=$DB->query("SELECT comment_house.text FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_author($id)
    {
        global $DB;
        global $id;
        global $comment_house_author;
        $comment_house_author=$DB->query("SELECT comment_house.id_author FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_rating($id)
    {
        global $DB;
        global $id;
        global $comment_house_rating;
        $comment_house_rating=$DB->query("SELECT comment_house.rating FROM comment_house WHERE comment_house.id=" + $id);
    }
    function comment_house_avg_rating($id)
    {
        global $DB;
        global $id;
        global $comment_house_avg_rating;
        $comment_house_avg_rating=$DB->query("SELECT SUM comment_house.rating FROM comment_house WHERE comment_house.id=" + $id);
    }