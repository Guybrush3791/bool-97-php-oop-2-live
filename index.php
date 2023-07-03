<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 

        require_once("./data/db.php");

    ?>

    <title>User: <?php echo $premiumUser -> getUsername(); ?></title>
</head>
<body>
    <div>
        <h1>
            <?php echo $premiumUser -> getUsername(); ?>
        </h1>
        <div><b>Mail:</b> <?php echo $premiumUser -> getEmail(); ?></div>
        <div><b>Mail verified:</b> <?php echo $premiumUser -> getVerifiedMail() ? "YES" : "NO"; ?></div>
        <div><b>Price:</b> <?php echo $premiumUser -> getPrice(); ?>E</div>
        <div>
            <div>
                <b>Membership:</b> <?php echo $premiumUser -> getMembership() -> getName(); ?>
            </div>
            <div>
                <b>Discount:</b> <?php echo $premiumUser -> getMembership() -> getDiscount(); ?>%
            </div>
        </div>
        -------------------------------------
        <div>
            <b>Actual price:</b> <?php echo $premiumUser -> getActualPrice(); ?>E
        </div>
    </div>
    <div>
        <h1>
            <?php echo $premiumUser2 -> getUsername(); ?>
        </h1>
        <div><b>Mail:</b> <?php echo $premiumUser2 -> getEmail(); ?></div>
        <div><b>Mail verified:</b> <?php echo $premiumUser2 -> getVerifiedMail() ? "YES" : "NO"; ?></div>
        <div><b>Price:</b> <?php echo $premiumUser2 -> getPrice(); ?>E</div>
        <div>
            <div>
                <b>Membership:</b> <?php echo $premiumUser2 -> getMembership() -> getName(); ?>
            </div>
            <div>
                <b>Discount:</b> <?php echo $premiumUser2 -> getMembership() -> getDiscount(); ?>%
            </div>
        </div>
        -------------------------------------
        <div>
            <b>Actual price:</b> <?php echo $premiumUser2 -> getActualPrice(); ?>E
        </div>
    </div>
</body>
</html>