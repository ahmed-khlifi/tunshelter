<div class="container">
<div id="reserve-box">
    <h1>Details of <?php echo $report->getFull_name().' rescure report'; ?></h1>
    <?php 
        echo '
        <h4>Email : '.$report->getEmail().'</h4>
        <h4>Mobile : '.$report->getMobile().'</h4>
        <h4>Reported pet  : '.$report->getType_animal().'</h4>
        <h4>Pet behaviour  : '.$report->getAnimal_mental().'</h4>
        <h4>Pet nutrition  : '.$report->getType_animal().'</h4>
        ';
    ?>
    <a href="index.php?controller=report&action=readAll" class="btn">Go back</a>
</div>
</div>
</div>