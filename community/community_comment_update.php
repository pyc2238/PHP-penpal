<?php
    require_once("C:/xampp/htdocs/TermProject/tools.php");
    require_once("./CommunityDao.php");
    session_start_if_none();
    $id = requestValue('id');
    $page = requestValue('page');
    $comment = requestValue('comment');
    $boardNum = sessionVar('boardNum'); 
    $dao = new CommunityDao();
    $dao->updateComment($id,$comment);
    goNow(bdUrl('community_view.php',$boardNum,$page,0,0));


?>