<?php
            if(!$_SESSION['user'] == 'admin'){
                header('location: index.php?controller=user&action=loginPage');
            }
?>
<div>
        <h1 class="title" style="text-align: center;">Rescue Reports</h1>

        <table class="table-admin">
            <thead>
                <td>Full Name</td>
                <td>Phone</td>
                <td>Pet</td>
                <td>Status</td>
                <td>Nutrition</td>
                <td>Details</td>
                <td>Edite</td>
                <td>Delete</td>
            </thead>
            <?php
                    foreach($reports as $report){
                        echo '<tbody>
                            <td>'.$report->getFull_name().'</td>
                            <td>'.$report->getMobile().'</td>
                            <td>'.$report->getType_animal().'</td>
                            <td>'.$report->getAnimal_mental().'</td>
                            <td>'.$report->getAnimal_body().'</td>
                            <td><a href="index.php?controller=report&action=read&email='.$report->getEmail().'"><button class="btn">Details</button></a></td>
                            <td><a href="index.php?controller=report&action=edite&email='.$report->getEmail().'"><button class="btn">Edite</button></a></td>
                            <td><a href="index.php?controller=report&action=delete&email='.$report->getEmail().'"><button class="btn">Delete</button></a></td>
                        </tbody>';
                    }
                ?>
        </table>
    </div>

    