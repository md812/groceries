<?php

global $condition;
global $rows_user;

/* Set condition parameter for user study by balanced latin square algorithm, see https://cs.uwaterloo.ca/~dmasson/tools/latin_square/
    A: No Scores
    B: Nutri- & Eco-Score
    C: "Scale-Score"
*/
$condition = $_SESSION['condition1'];
setcookie("currentcondition", 1, time() + (86400 * 30), "/");
if ($_COOKIE['currentcondition'] == 1) {
    $condition = $_SESSION['condition1'];
    setcookie("currentcondition", 2, time() + (86400 * 30), "/");
} else if ($_COOKIE['currentcondition'] == 2) {
    $condition = $_SESSION['condition2'];
    setcookie("currentcondition", 3, time() + (86400 * 30), "/");
} else if ($_COOKIE['currentcondition'] == 3) {
    $condition = $_SESSION['condition3'];
    setcookie("currentcondition", 4, time() + (86400 * 30), "/");
} // logout and delete cookie, if all conditions were used
else if ($_COOKIE['currentcondition'] == 4) {
    setcookie("currentcondition", "", time() - 3600);
    echo '<script>',
    'deleteCookie();',
    '</script>';
    header('Location: logout.php');
}

// choose the correct picture for Nutri-Score of product
function printNutriscore($nutri, $rows)
{
    if ($rows[$nutri]['nutriscore_grade'] == 'a') {
        return "../images/scores/nutriscore-a.svg";
    } else if ($rows[$nutri]['nutriscore_grade'] == 'b') {
        return "../images/scores/nutriscore-b.svg";
    } else if ($rows[$nutri]['nutriscore_grade'] == 'c') {
        return "../images/scores/nutriscore-c.svg";
    } else if ($rows[$nutri]['nutriscore_grade'] == 'd') {
        return "../images/scores/nutriscore-d.svg";
    } else if ($rows[$nutri]['nutriscore_grade'] == 'e') {
        return "../images/scores/nutriscore-e.svg";
    } else if ($rows[$nutri]['nutriscore_grade'] == NULL) {
        return "../images/scores/nutriscore-unknown.svg";
    }
}

// choose the correct picture for Eco-Score of product
function printEcoscore($eco, $rows)
{
    if ($rows[$eco]['ecoscore_grade'] == 'a') {
        return "../images/scores/ecoscore-a.svg";
    } else if ($rows[$eco]['ecoscore_grade'] == 'b') {
        return "../images/scores/ecoscore-b.svg";
    } else if ($rows[$eco]['ecoscore_grade'] == 'c') {
        return "../images/scores/ecoscore-c.svg";
    } else if ($rows[$eco]['ecoscore_grade'] == 'd') {
        return "../images/scores/ecoscore-d.svg";
    } else if ($rows[$eco]['ecoscore_grade'] == 'e') {
        return "../images/scores/ecoscore-e.svg";
    } else if ($rows[$eco]['ecoscore_grade'] == NULL) {
        return "../images/scores/ecoscore-unknown.svg";
    }
}

// choose the correct picture for Scale-Score of product
function printScalescore($scale, $rows)
{
    if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-a_nutri-a_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-a_nutri-a_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-b_nutri-a_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-b_nutri-a_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-c_nutri-a_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-b_nutri-a_eco-unknown.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-b_nutri-b_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-b_nutri-b_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-b_nutri-b_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-c_nutri-b_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-c_nutri-b_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-c_nutri-b_eco-unknown.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-b_nutri-c_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-c_nutri-c_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-c_nutri-c_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-c_nutri-c_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-d_nutri-c_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-d_nutri-c_eco-unknown.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-c_nutri-d_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-c_nutri-d_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-d_nutri-d_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-d_nutri-d_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-d_nutri-d_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-e_nutri-d_eco-unknown.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-c_nutri-e_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-d_nutri-e_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-d_nutri-e_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-e_nutri-e_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-e_nutri-e_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-e_nutri-e_eco-unknown.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'a') {
        return "../images/scores/scalescore-b_nutri-unknown_eco-a.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'b') {
        return "../images/scores/scalescore-c_nutri-unknown_eco-b.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'c') {
        return "../images/scores/scalescore-d_nutri-unknown_eco-c.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'd') {
        return "../images/scores/scalescore-e_nutri-unknown_eco-d.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'e') {
        return "../images/scores/scalescore-e_nutri-unknown_eco-e.svg";
    } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == NULL) {
        return "../images/scores/scalescore-unknown_nutri-unknown_eco-unknown.svg";
    }
}
