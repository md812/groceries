<?php

    // Choose the correct picture for Nutri-Score of product
    function printNutriscore($nutri) {
        global $rows;
        $nutridescr = 'Der Nutri-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nährwerte von Produkten einer Kategorie vergleichbar machen soll.';
        
        if ($rows[$nutri]['nutriscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-a.svg' class='score' alt='nutri-score-a' title='$nutridescr'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-b.svg' class='score' alt='nutri-score-b' title='$nutridescr'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-c.svg' class='score' alt='nutri-score-c' title='$nutridescr'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-d.svg' class='score' alt='nutri-score-d' title='$nutridescr'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-e.svg' class='score' alt='nutri-score-e' title='$nutridescr'>";
        } else if ($rows[$nutri]['nutriscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/nutriscore-unknown.svg' class='score' alt='nutri-score-unknown' title='$nutridescr'>";
        }
    }

    // Choose the correct picture for Eco-Score of product
    function printEcoscore($eco) {
        global $rows;
        $ecodescr = 'Der Eco-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nachhaltigkeit von Produkten bewerten soll.';

        if ($rows[$eco]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-a.svg' class='score' alt='eco-score-a' title='$ecodescr'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-b.svg' class='score' alt='eco-score-b' title='$ecodescr'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-c.svg' class='score' alt='eco-score-c' title='$ecodescr'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-d.svg' class='score' alt='eco-score-d' title='$ecodescr'>";
        } else if ($rows[$eco]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-e.svg' class='score' alt='eco-score-e' title='$ecodescr'>";
        } else if ($rows[$eco]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/ecoscore-unknown.svg' class='score' alt='eco-score-unknown' title='$ecodescr'>";
        }
    }

    // Choose the correct picture for Scale-Score of product
    function printScalescore($scale) {
        global $rows;
        $scaledescr = 'Der Scale-Score ist eine Lebensmittelkennzeichnung, welche die Nutri- und Eco-Score-Bewertung von Produkten betrachtet und zu einer kombinierenden Bewertung zusammenfügt. Der Nutri-Score wird dabei etwas höher gewertet als der Eco-Score.';

        if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-a_nutri-a_eco-a.svg' class='score' alt='scalescore-a-nutriscore-a-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-a_nutri-a_eco-b.svg' class='score' alt='scalescore-a-nutriscore-a-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-a_eco-c.svg' class='score' alt='scalescore-b-nutriscore-a-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-a_eco-d.svg' class='score' alt='scalescore-b-nutriscore-a-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-a_eco-e.svg' class='score' alt='scalescore-c-nutriscore-a-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'a' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-a_eco-unknown.svg' class='score' alt='scalescore-b-nutriscore-a-ecoscore-unknown' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-b_eco-a.svg' class='score' alt='scalescore-b-nutriscore-b-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-b_eco-b.svg' class='score' alt='scalescore-b-nutriscore-b-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-b_eco-c.svg' class='score' alt='scalescore-b-nutriscore-b-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-b_eco-d.svg' class='score' alt='scalescore-c-nutriscore-b-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-b_eco-e.svg' class='score' alt='scalescore-c-nutriscore-b-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'b' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-b_eco-unknown.svg' class='score' alt='scalescore-c-nutriscore-b-ecoscore-unknown' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-c_eco-a.svg' class='score' alt='scalescore-b-nutriscore-c-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-c_eco-b.svg' class='score' alt='scalescore-c-nutriscore-c-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-c_eco-c.svg' class='score' alt='scalescore-c-nutriscore-c-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-c_eco-d.svg' class='score' alt='scalescore-c-nutriscore-c-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-c_eco-e.svg' class='score' alt='scalescore-d-nutriscore-c-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'c' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-c_eco-unknown.svg' class='score' alt='scalescore-c-nutriscore-a-ecoscore-unknown' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-d_eco-a.svg' class='score' alt='scalescore-c-nutriscore-d-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-d_eco-b.svg' class='score' alt='scalescore-c-nutriscore-d-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-d_eco-c.svg' class='score' alt='scalescore-d-nutriscore-d-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-d_eco-d.svg' class='score' alt='scalescore-d-nutriscore-d-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-d_eco-e.svg' class='score' alt='scalescore-d-nutriscore-d-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'd' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-d_eco-unknown.svg' class='score' alt='scalescore-e-nutriscore-d-ecoscore-unknown' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-e_eco-a.svg' class='score' alt='scalescore-c-nutriscore-e-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-e_eco-b.svg' class='score' alt='scalescore-d-nutriscore-e-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-e_eco-c.svg' class='score' alt='scalescore-d-nutriscore-e-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-e_eco-d.svg' class='score' alt='scalescore-e-nutriscore-e-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-e_eco-e.svg' class='score' alt='scalescore-e-nutriscore-e-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == 'e' && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-e_eco-unknown.svg' class='score' alt='scalescore-e-nutriscore-e-ecoscore-unknown' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'a') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-b_nutri-unknown_eco-a.svg' class='score' alt='scalescore-b-nutriscore-unknown-ecoscore-a' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'b') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-c_nutri-unknown_eco-b.svg' class='score' alt='scalescore-c-nutriscore-unknown-ecoscore-b' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'c') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-d_nutri-unknown_eco-c.svg' class='score' alt='scalescore-d-nutriscore-unknown-ecoscore-c' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'd') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-unknown_eco-d.svg' class='score' alt='scalescore-e-nutriscore-unknown-ecoscore-d' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == 'e') {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-e_nutri-unknown_eco-e.svg' class='score' alt='scalescore-e-nutriscore-unknown-ecoscore-e' title='$scaledescr'>";
        } else if ($rows[$scale]['nutriscore_grade'] == NULL && $rows[$scale]['ecoscore_grade'] == NULL) {
            print "<img class='productImg scoreImg' src='../images/scores/scalescore-unknown_nutri-unknown_eco-unknown.svg' class='score' alt='scalescore-unknown-nutriscore-unknown-ecoscore-unknown' title='$scaledescr'>";
        }
    }

    // Show correct score, depending on current condition $condition
    function showConditionscore($score) {
        global $condition;
        if ($condition == "A") {
            // Do nothing here
        } else if ($condition == "B") {
            printNutriscore($score);
            print "<br>";
            printEcoscore($score);
            print "<br>";
        } else if ($condition == "C") {
            printScalescore($score);
            print "<br>";
        }
    }
