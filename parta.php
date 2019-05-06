<?php
    $id;
    $name;
    $prgm;
    
    if ($_REQUEST['act'] == 'studentID') {
        if ( strlen ($_REQUEST['studentID']) == 0 ) {
            echo "1";
        }
        else if (( (strlen($_REQUEST['studentID']) == 9 ) && ( preg_match("/([0-9])\\1{8}/", $_REQUEST['studentID']))  )) {
            echo "2";
        }
        else if ( !(ctype_digit ($_REQUEST['studentID']))) {
            echo "3";
        }
        else {
            echo "4";
        }
    }
    else if ( $_REQUEST['act'] == 'studentName' ) {
        if ( strlen ($_REQUEST['studentName']) == 0 ) {
            echo "1";
        }
        else if ( (($_REQUEST['studentName']) == "Harry Potter" ) || (($_REQUEST['studentName']) == "Hermione Granger")) {
            echo "2";
        }
        else if ( !(preg_match("/^[ A-Za-z]+$/", ($_REQUEST['studentName'])))) {
            echo "3";
        }
        else {
            echo "4";
        }
    }
    else if ( $_REQUEST['act'] == 'studentProgram' ) {
        if ( strlen ( $_REQUEST['studentProgram']) == 0 ) {
            echo "1";
        }
        else if ((($_REQUEST['studentProgram'] == "Basket Weaving") || (($_REQUEST['studentProgram']) == "Beanstalk Climbing"))) {
            echo "2";
        }
        else if (( $_REQUEST['studentProgram'] == "Geology" || (($_REQUEST['studentProgram']) == "Microbiology" )) ) {
            echo "3";
        }
        else {
            echo "4";
        }
    } 
?> 