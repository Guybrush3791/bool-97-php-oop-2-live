<?php

require_once("./models/User.php");
require_once("./models/Membership.php");
require_once("./models/PremiumUser.php");

$membership1 = new Membership("Sconto giovini", 15);
$premiumUser = new PremiumUser("Mario", "mario_pws", "mario@mail.com", 
    false, 55, $membership1);

$premiumUser2 = new PremiumUser("Francesca", "fra_pws", "francesca@mail.com", 
    false, 100, $membership1);

// echo "Actual price for user '" 
//     . $premiumUser -> getUsername() 
//     . "' is: " . $premiumUser -> getActualPrice() . "E"
// ;