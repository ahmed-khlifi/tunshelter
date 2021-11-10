<form class="report-form" method='POST' action='index.php?controller=report&action=edited'>
    <h1 class="title">Edite report</h1>
    <div class="form-grp">
        <div>
            <p>Full name</p>
            <input type="text" name="full_name"  value=<?php echo $report->getFull_name(); ?> required>
        </div>
        <div>
            <p>Email</p>
            <input type="text" name="email" value=<?php echo $report->getEmail(); ?> required>
        </div>
    </div>
    <div class="form-grp">
        <div>
            <p>Mobile</p>
            <input type="text" name="mobile" value=<?php echo $report->getMobile(); ?> required>
        </div>
        <div>
            <p>Type of aniaml</p>
            <input type="text" name="type_animal" value=<?php echo $report->getType_animal(); ?> required>
        </div>
    </div>
    <div class="form-grp">
        <div>
            <p>Is the animal friendly or aggressive</p>
            <input type="text" name="animal_mental" value=<?php echo $report->getAnimal_mental(); ?> required>
        </div>
        <div>
            <p>Does the animal eats/drinks water?</p>
            <input type="text" name="animal_body" value=<?php echo $report->getAnimal_body(); ?> required>
        </div>
    </div>
    <button class="btn" type="submit">Submit</button>
</form>