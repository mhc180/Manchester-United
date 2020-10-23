<?php session_start(); ?>
<div class="header">
    <h1 class="title">Manchester United</h1>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="index.php">MUFC</a>
        <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Players</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown">
                        <a class="dropdown-item" href="current.php">Current</a>
                        <a class="dropdown-item" href="former.php">Former</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="managers.php">Managers</a></li>
                <li class="nav-item"><a class="nav-link" href="titles.php">Titles</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stats</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown2">
                        <a class="dropdown-item" href="overall.php">Overall</a>
                        <a class="dropdown-item" href="bySeason.php">By Season</a>
                    </div>
                </li>
            </ul>
            
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                            <button class="btn btn-warning" type="submit" name="logout-submit">Logout</button>
                            </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="emailuid" placeholder="Username or Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <button class="btn btn-warning" type="submit" name="login-submit">Login</button>
                            <a href="signup.php" class="btn btn-warning" role="button" aria-disabled="true">Signup</a>
                            </form>';
                }
             ?>
        </div>
    </nav>
</div>
