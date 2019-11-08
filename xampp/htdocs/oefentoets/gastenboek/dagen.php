<?php

function geefdag($day) {

    $dag["Monday"] = "maandag";

    $dag["Tuesday"] = "dinsdag";

    $dag["Wednesday"] = "woensdag";

    $dag["Thursday"] = "donderdag";

    $dag["Friday"] = "vrijdag";

    $dag["Saturday"] = "zaterdag";

    $dag["Sunday"] = "zondag";

    return $dag[$day];

} // geefdag()

function geefmaand($month){

    $maand["January"] = "januari";

    $maand["February"] = "februari";

    $maand["March"] = "maart";

    $maand["April"] = "april";

    $maand["May"] = "mei";

    $maand["June"] = "juni";

    $maand["July"] = "juli";

    $maand["August"] = "augustus";

    $maand["September"] = "september";

    $maand["October"] = "oktober";

    $maand["November"] = "november";

    $maand["December"] = "december";

    return $maand[$month];

} // geefmaand()

$now=getdate();

echo "Het is vandaag " . geefdag($now["weekday"]);

echo " " . $now["mday"] . " " . geefmaand($now["month"]);

?>