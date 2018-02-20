<?php

require('../../../wp-load.php');

global $wpdb;

//query for insert data into tables
if ($_POST['submit'] == 'insert') {
    $userid = $_POST['userid'];
    $categoryid = $_POST['categoryid'];
    $flag = $_POST['updateflag'];
//$sql = "INSERT INTO wp_follow_category (userid, categoryid, flag) VALUES ($userid, $categoryid, $flag )";
    $follow_table = 'wp_follow_category';
    $updated = $wpdb->insert(
            $follow_table, array(
        'userid' => $userid,
        'categoryid' => $categoryid,
        'flag' => $flag
    ));
    if (false === $updated) {
        $msg = "There was an error.";
    } else {
        $msg = "You have subscribed " . get_the_category_by_ID($categoryid) . " category successfully";
    }
//Followed section append
    $fetchresult = $wpdb->get_results("SELECT *from wp_follow_category where userid=" . $userid . " and flag=1 ORDER BY date DESC");
    $rowresult = $wpdb->num_rows;
    $followedCatappend = '<div id="followedSubcat" class="follow-innercont vc_col-md-12"><ul>';
    foreach ($fetchresult as $results) {
        if ($results->categoryid > 0) {
            $followedCatappend .= ' <li class="vc_col-md-2 vc_col-sm-6 vc_col-xs-12 hide-bullets">

                <div class="followedcheck">
                    <input type="checkbox" class="followedsubcates" name="followedcategories[]" value="' . $results->categoryid . '" id="' . get_the_category_by_ID($results->categoryid) . '">
                    <label for="' . get_the_category_by_ID($results->categoryid) . '"><span></span>' . get_the_category_by_ID($results->categoryid) . '</label>                                                      
                </div>
            </li>';
        }
    }

    if ($rowresult == 0) {

        $followedCatappend = '<li class="vc_col-md-8">No Record found.</li>';
    }
    $followedCatappend .='</ul></div>';
    $followedCatappend .= '<div class="btn_flw-cont"><input type = "hidden" name = "submit" id = "submitvalue" value = "delete">';
    $followedCatappend .= '<input type = "hidden" name = "userid" value = "' . $userid . '">';
    $followedCatappend .='<button type = "button" value = "Unfollow" id = "unfollow_button" name = "unfollow" class = "unfollow_button">Unfollow</button><div id="unfollowed-msg"></div></div>';


//Followed section End

    $jsonInput = array(
        "msg" => $msg,
        "followCatappend" => $followedCatappend
    );
    echo $followedCatappend;
}
if ($_POST['submit'] == 'delete') {
    $userid = $_POST['userid'];
    $categoryid = $_POST['followedcategories'];
    $categoryidList = implode(",", $categoryid);
//Fetching primary id to delete the record
    $getQuery = "SELECT id FROM wp_follow_category where userid=" . $userid . " AND categoryid IN (" . $categoryidList . ") ORDER BY date DESC";
    $fetchQuery = $wpdb->get_results("SELECT id FROM wp_follow_category where userid=" . $userid . " AND categoryid IN (" . $categoryidList . ") ORDER BY date DESC");
    foreach ($fetchQuery as $fetchQueryval) {
        $followedCategoryid .= $fetchQueryval->id . ',';
    }
    $followedCatidList = rtrim($followedCategoryid, ',');
    $getoutput = $wpdb->query("DELETE FROM wp_follow_category WHERE ID IN($followedCatidList)");

    $msg = "You have unfollowed successfully";

    //Followed section append
    $fetchresult = $wpdb->get_results("SELECT *from wp_follow_category where userid=" . $userid . " and flag=1 ORDER BY date DESC");
    $rowresult = $wpdb->num_rows;
    $followedCatappend = '<div id="followedSubcat" class="follow-innercont vc_col-md-12"><ul class="hide-bullets">';
    foreach ($fetchresult as $results) {
        if ($results->categoryid > 0) {
            $followedCatappend .= ' <li class="vc_col-md-2 vc_col-sm-6 vc_col-xs-12">

                <div class="followedcheck">
                    <input type="checkbox" class="followedsubcates" name="followedcategories[]" value="' . $results->categoryid . '" id="' . get_the_category_by_ID($results->categoryid) . '">
                    <label for="' . get_the_category_by_ID($results->categoryid) . '"><span></span>' . get_the_category_by_ID($results->categoryid) . '</label>                                                      
                </div>
            </li>';
        }
    }



    if ($rowresult == 0) {

        $followedCatappend = '<li class="vc_col-md-8 hide-bullets">No Record found.</li>';
    }
    $followedCatappend .='</ul></div>';
    $followedCatappend .= '<div class="btn_flw-cont"><input type="hidden" name="submit" id="submitvalue" value="delete">';
    $followedCatappend .= '<input type="hidden" name="userid" value="' . $userid . '">';
    $followedCatappend .='<button type="button" value="Unfollow" id="unfollow_button" name="unfollow" class="unfollow_button">Unfollow</button><div id="unfollowed-msg"></div></div>';


//Followed section End


    $jsonInput = array(
        "msg" => $msg,
        "followCatappend" => $followedCatappend
    );
    echo $followedCatappend;
}

//unfollow functionality from sub-category banner part

if ($_POST['submit'] == 'deletebannercat') {
    $userid = $_POST['userid'];
    $categoryid = $_POST['followedcategories'];
    $categoryidList = implode(",", $categoryid);
    //Fetching primary id to delete the record
    $getQuery = "SELECT id FROM wp_follow_category where userid=" . $userid . " AND categoryid=" . $categoryid . " ORDER BY date DESC";
    $fetchQuery = $wpdb->get_results("SELECT id FROM wp_follow_category where userid=" . $userid . " AND categoryid=" . $categoryid . " ORDER BY date DESC");
    foreach ($fetchQuery as $fetchQueryval) {
        $fetchedID = $fetchQueryval->id;
    }

    $getoutput = $wpdb->query("DELETE FROM wp_follow_category WHERE id=" . $fetchedID . "");
    if ($getoutput == 1) {
        $msg = "You have unfollowed successfully";
        $sucess = 1;
    } else {
        $msg = "There was an error.";
        $sucess = 0;
    }

    echo $sucess;
}
?>