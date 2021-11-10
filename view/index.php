<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tunshelter</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/903aff947f.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once($ROOT.$DS."view".$DS."header.php"); ?>

    <div id="hero">
        REGISTER YOUR <br> <span style="color: #EFCB68;">PET</span>
    </div>
    <div class="container">
        <div id="reserve-box">
            <h1>Reserve an Appointment to Adopt</h1>
            <h5>
                Due to COVID-19, we are currently accepting adoption requests through appointments. Kindly reserve the
                adoption appointment via <a href="index.php?controller=adopt&action=create">link</a>.
            </h5>
        </div>
        <div class="more-box">
            <img src="./images/dog1.png" alt="dog">
            <div>
                <h1 class="title">Adopt</h1>
                <p>
                    It’s not just the right thing to do; adoption is a reward.

                    All animals at our shelter are in need of a second chance. They have been lost, 
                    abused, given up or abandoned. They are all unwanted and helpless. You are 
                    giving them a new life in a loving home.
                </p>
                <button class="btn">Read more</button>
            </div>
        </div>
        <div class="more-box">
            <div>
                <h1 class="title">Adopt</h1>
                <p>
                    It’s not just the right thing to do; adoption is a reward.

                    All animals at our shelter are in need of a second chance. They have been lost, 
                    abused, given up or abandoned. They are all unwanted and helpless. You are 
                    giving them a new life in a loving home.
                </p>
                <button class="btn">Read more</button>
            </div>
            <img src="./images/dog2.png" alt="dog">
        </div>
    </div>
    <h1 class="title" style="text-align: center;">Pets (and their humans)</h1>
    <div class="owners-preview">
        <div>
            <img src="./images/owner.png" alt="owner">
            <h2 class="title">IYED</h2>
            <p>AEFEALorem Ipsum is simply dummy text</p>
        </div>
        <div>
            <img src="./images/owner2.png" alt="owner">
            <h2 class="title">OMAIMA</h2>
            <p>AEFEALorem Ipsum is simply dummy text</p>
        </div>
    </div>
<?php require_once($ROOT.$DS."view".$DS."footer.php"); ?>
<script src='./javascript/script.js'></script>
</body>
</html>