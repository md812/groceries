<?php

    // Choose the correct picture for Nutri-Score of product
    function printNutriscore($nutri) {
        global $rows;
        if ($rows[$nutri]['nutriscore_grade'] == 'a') {
            print "<img src='../images/scores/nutriscore-a.svg' class='score' alt='nutri-score-a'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'b') {
            print "<img src='../images/scores/nutriscore-b.svg' class='score' alt='nutri-score-b'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'c') {
            print "<img src='../images/scores/nutriscore-c.svg' class='score' alt='nutri-score-c'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'd') {
            print "<img src='../images/scores/nutriscore-d.svg' class='score' alt='nutri-score-d'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'e') {
            print "<img src='../images/scores/nutriscore-e.svg' class='score' alt='nutri-score-e'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == NULL) {
            print "<img src='../images/scores/nutriscore-unknown.svg' class='score' alt='nutri-score-unknown'>";
        }
    }

    // Choose the correct picture for Eco-Score of product
    function printEcoscore($eco) {
        global $rows;
        if ($rows[$eco]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/ecoscore-a.svg' class='score' alt='eco-score-a'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/ecoscore-b.svg' class='score' alt='eco-score-b'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/ecoscore-c.svg' class='score' alt='eco-score-c'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/ecoscore-d.svg' class='score' alt='eco-score-d'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/ecoscore-e.svg' class='score' alt='eco-score-e'>";
        } else if ($rows[$eco]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/ecoscore-unknown.svg' class='score' alt='eco-score-unknown'>";
        }
    }

    // Choose the correct picture for Scale-Score of product
    function printScalescore($scale) {
        global $rows;
        if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-a_nutri-a_eco-a.png' class='score' alt='scalescore-a-nutriscore-a-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-a_nutri-a_eco-b.png' class='score' alt='scalescore-a-nutriscore-a-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-b_nutri-a_eco-c.png' class='score' alt='scalescore-b-nutriscore-a-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-b_nutri-a_eco-d.png' class='score' alt='scalescore-b-nutriscore-a-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-c_nutri-a_eco-e.png' class='score' alt='scalescore-c-nutriscore-a-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-b_nutri-a_eco-unknown.png' class='score' alt='scalescore-b-nutriscore-a-ecoscore-unknown'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-b_nutri-b_eco-a.png' class='score' alt='scalescore-b-nutriscore-b-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-b_nutri-b_eco-b.png' class='score' alt='scalescore-b-nutriscore-b-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-b_nutri-b_eco-c.png' class='score' alt='scalescore-b-nutriscore-b-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-c_nutri-b_eco-d.png' class='score' alt='scalescore-c-nutriscore-b-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-c_nutri-b_eco-e.png' class='score' alt='scalescore-c-nutriscore-b-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-c_nutri-b_eco-unknown.png' class='score' alt='scalescore-c-nutriscore-b-ecoscore-unknown'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-b_nutri-c_eco-a.png' class='score' alt='scalescore-b-nutriscore-c-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-c_nutri-c_eco-b.png' class='score' alt='scalescore-c-nutriscore-c-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-c_nutri-c_eco-c.png' class='score' alt='scalescore-c-nutriscore-c-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-c_nutri-c_eco-d.png' class='score' alt='scalescore-c-nutriscore-c-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-d_nutri-c_eco-e.png' class='score' alt='scalescore-d-nutriscore-c-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-d_nutri-c_eco-unknown.png' class='score' alt='scalescore-c-nutriscore-a-ecoscore-unknown'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-c_nutri-d_eco-a.png' class='score' alt='scalescore-c-nutriscore-d-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-c_nutri-d_eco-b.png' class='score' alt='scalescore-c-nutriscore-d-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-d_nutri-d_eco-c.png' class='score' alt='scalescore-d-nutriscore-d-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-d_nutri-d_eco-d.png' class='score' alt='scalescore-d-nutriscore-d-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-d_nutri-d_eco-e.png' class='score' alt='scalescore-d-nutriscore-d-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-e_nutri-d_eco-unknown.png' class='score' alt='scalescore-e-nutriscore-d-ecoscore-unknown'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-c_nutri-e_eco-a.png' class='score' alt='scalescore-c-nutriscore-e-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-d_nutri-e_eco-b.png' class='score' alt='scalescore-d-nutriscore-e-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-d_nutri-e_eco-c.png' class='score' alt='scalescore-d-nutriscore-e-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-e_nutri-e_eco-d.png' class='score' alt='scalescore-e-nutriscore-e-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-e_nutri-e_eco-e.png' class='score' alt='scalescore-e-nutriscore-e-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-e_nutri-e_eco-unknown.png' class='score' alt='scalescore-e-nutriscore-e-ecoscore-unknown'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img src='../images/scores/scalescore-b_nutri-unknown_eco-a.png' class='score' alt='scalescore-b-nutriscore-unknown-ecoscore-a'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img src='../images/scores/scalescore-c_nutri-unknown_eco-b.png' class='score' alt='scalescore-c-nutriscore-unknown-ecoscore-b'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img src='../images/scores/scalescore-d_nutri-unknown_eco-c.png' class='score' alt='scalescore-d-nutriscore-unknown-ecoscore-c'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img src='../images/scores/scalescore-e_nutri-unknown_eco-d.png' class='score' alt='scalescore-e-nutriscore-unknown-ecoscore-d'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img src='../images/scores/scalescore-e_nutri-unknown_eco-e.png' class='score' alt='scalescore-e-nutriscore-unknown-ecoscore-e'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img src='../images/scores/scalescore-unknown_nutri-unknown_eco-unknown.png' class='score' alt='scalescore-unknown-nutriscore-unknown-ecoscore-unknown'>";
        }
    }

    // Show correct score, depending on current condition $condition
    function showConditionscore($score) {
        global $condition;
        if ($condition == "A") {
            // Do nothing here
        } else if ($condition == "B") {
            printNutriscore($score); 
            printEcoscore($score);
        } else if ($condition == "C") {
            printScalescore($score);
        }
    }
