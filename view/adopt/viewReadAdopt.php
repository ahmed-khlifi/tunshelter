<div class="container">
<div id="reserve-box">
    <h1>Details of <?php echo $adopt->getFull_name().' appointement'; ?></h1>
    <?php 
        echo '
        <h4>Email : '.$adopt->getEmail().'</h4>
        <h4>Mobile : '.$adopt->getMobile().'</h4>
        <h4>appointement date  : '.$adopt->getDate().' at '.$adopt->getTime().'</h4>
        ';
    ?>
    <a href="index.php?controller=adopt&action=readAll" class="btn">Go back</a>
</div>
</div>
</div>