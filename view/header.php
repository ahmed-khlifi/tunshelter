<nav>
    <img src="./images/logo.png" alt="logo" id="logo">
    <div id="nav">

    
    <?php
            if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
                echo '
                <div>
                    <button class="btn"><a href="index.php?controller=user">User</a></button>
                    <button class="btn"><a href="index.php?controller=adopt">Adpot appointment</a></button>
                    <button class="btn"><a href="index.php?controller=report">Rescue reports</a></button>
                </div>
                ';
            }
        ?>
    
        <ul>
            <li class="nav-li">
                <a href=".">Home</a>
            </li>
            <li class="nav-li">
                <a href="index.php?controller=adopt&action=create">Adopt</a>
            </li>
            <li class="nav-li">
                <a href="view/autre/clinic.php">The clinic</a>
            </li>
            <li class="nav-li">
                <a href="index.php?controller=report&action=create">Report a rescue</a>
            </li>
            
            <?php
                if((!isset($_SESSION['user'])) || (empty($_SESSION['user']))){
                    echo '
                    <li class="nav-li">
                    <button class="btn"><a href="index.php?controller=user&action=loginPage">Sign in</a></button>
                    </li>';
                }
                if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
                    echo '
                    <li class="nav-li">
                    <button class="btn"><a href="index.php?controller=user&action=logout">Logout</a></button>
                    </li>
                    
                    ';
                }
                
                ?>
            </li>
        </ul>
    </div>
    <div class="nav-icon" onclick='toggle()'>
        <i class="fas fa-bars"></i>
    </div>
</nav>