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

    // Choose the correct picture for Marco-Score of product
    function printMarcoscore($marco) {
        global $rows;
        if ($rows[$marco]['marcoscore_grade'] == 'a') {
            print "<img src='../images/scores/marcoscore-a.png' class='score' alt='marco-score-a'>";
        } else if ($rows[$marco]['marcoscore_grade'] == 'b') {
            print "<img src='../images/scores/marcoscore-b.png' class='score' alt='marco-score-b'>";
        } else if ($rows[$marco]['marcoscore_grade'] == 'c') {
            print "<img src='../images/scores/marcoscore-c.png' class='score' alt='marco-score-c'>";
        } else if ($rows[$marco]['marcoscore_grade'] == 'd') {
            print "<img src='../images/scores/marcoscore-d.png' class='score' alt='marco-score-d'>";
        } else if ($rows[$marco]['marcoscore_grade'] == 'e') {
            print "<img src='../images/scores/marcoscore-e.png' class='score' alt='marco-score-e'>";
        } else if ($rows[$marco]['marcoscore_grade'] == NULL) {
            print "<img src='../images/scores/marcoscore-unknown.png' class='score' alt='marco-score-unknown'>";
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
            printMarcoscore($score);
        }
    }

?>