<?php
include 'db.php';

session_start();
$id = $_SESSION['ID'];
$type = $_SESSION['userType'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>IUB Tech 360</title>
</head>
<style>
    a {
        text-decoration: none;
    }

    .card-header {
        text-align: center;
    }

    /* #card_1 {
        text-align: center;
        justify-content: center;

    } */
    /* #card_1 {
        text-align: center;
        display: flex;
        justify-content: center;
    } */
    .card_1 {
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
        margin-top: 50px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
        /* text-align: center; */
    }

    .h13 {
        /* margin-top: 10px;
        margin-bottom: 10px; */
        text-align: center;
        color: black;
        font-weight: bold;
    }


    #card_2 {
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
        margin-top: 50px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
        /* text-align: center; */
    }

    .profile-details {
        margin-top: 150px;
    }

    #img-logo {
        position: fixed;
        top: 150px;
        left: 0;
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        opacity: .8;
    }
</style>

<body>
    <header class="header" id="header">
        <nav class="navbar_custom nav-container">
            <img src="skill-Synergy.png" alt="" class="nav__logo">

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="std_dashboard.php" class="nav__link">Dashboard</a>
                    </li>

                    <li class="nav__item">
                        <a href="std_project_submission.php" class="nav__link">Project Submission</a>
                    </li>

                    <li class="nav__item">
                        <a href="std_status.php" class="nav__link">Project Status</a>
                    </li>
                </ul>
            </div>

            <div class="nav__actions">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
                <!-- Logout button -->
                <a href="homepage.php"><i class="ri-logout-box-r-line" id="login-btn"></i></a>

                <!-- Toggle button -->

            </div>
        </nav>
    </header>
    <!-- 
    <img src="IUB tech 360 logo-01.png" alt="" id="img-logo"> -->

    <div>
        <div class="profile-details">
            <?php
            include 'db.php';

            $sql = "SELECT f_name,l_name,type FROM user where user_id = '$id'";
            $query = mysqli_query($conn, $sql);

            $info = mysqli_fetch_array($query);
            $f_name = $info['f_name'];
            $l_name = $info['l_name'];
            $type = $info['type'];
            ?>
            <div class="card" style="width: 18rem;" id="card_2">
                <div class="card-header">
                    Profile Details
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID : <?= $id ?></li>
                    <li class="list-group-item">Name : <?= $f_name ?> <?= $l_name ?></li>
                    <li class="list-group-item">User Type : <?= $type ?></li>
                </ul>
            </div>
        </div>

        <div class="card card_1 col-sm-6 mb-3 mb-sm-0">
            <div class="card-body ">
                <h1 class="h13">Notice Board</h1>
            </div>
        </div>
        <?php
        include 'db.php';

        $sql = "SELECT notice_id, title, content, posted_by, priority_level FROM  notice_board";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {
        ?>

            <?php
            $i = 1;
            while ($info = mysqli_fetch_array($query)) {
                $notice_review_id = $info['notice_id'];
                $title = $info['title'];
                $content = $info['content'];
                $posted_by = $info['posted_by'];
                $pririty_level = $info['priority_level'];

            ?>
                <div class="card card_1 col-sm-6 mb-3 mb-sm-0">
                    <h5 class="card-header"><?= $pririty_level ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <p class="card-text"><?= $content ?></p>
                        <p class="card-text">Posted By ID <?= $posted_by ?></p>
                        <!-- <a href="#" class="btn btn-primary"></a> -->
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>
    </div>
    </div>
    <script src="homepage.js"></script>
</body>

</html>