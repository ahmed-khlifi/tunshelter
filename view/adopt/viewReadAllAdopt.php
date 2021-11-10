<?php
            if(!$_SESSION['user'] == 'admin'){
                header('location: index.php?controller=user&action=loginPage');
            }
?>
<div>
        <h1 class="title" style="text-align: center;">Rescue adopts</h1>
        <table class="table-admin">
            <thead>
                <td>Full Name</td>
                <td>Phone</td>
                <td>Appointment date</td>
                <td>Details</td>
                <td>Edite</td>
                <td>Delete</td>
            </thead>
            <?php
                    foreach($adopts as $adopt){
                        echo '<tbody>
                            <td>'.$adopt->getFull_name().'</td>
                            <td>'.$adopt->getMobile().'</td>
                            <td>'.$adopt->getDate().'</td>
                            <td><a href="index.php?controller=adopt&action=read&email='.$adopt->getEmail().'"><button class="btn">Details</button></a></td>
                            <td><a href="index.php?controller=adopt&action=edite&email='.$adopt->getEmail().'"><button class="btn">Edite</button></a></td>
                            <td><a href="index.php?controller=adopt&action=delete&email='.$adopt->getEmail().'"><button class="btn">Delete</button></a></td>
                        </tbody>';
                    }
                ?>
        </table>
    </div>

    