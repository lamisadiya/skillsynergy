<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

  <link rel="stylesheet" href="style.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <title>skill-Synergy</title>
</head>

<style>
  @media only screen and (max-width: 985px) {


    #media_1 {
      margin-top: 100px;
    }

    #media_2 {
      margin-top: 100px;
      margin-bottom: 100px;
    }

    h3 {
      text-align: center;
    }

    a {
      text-decoration: none;
    }
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
      <img src="skill-Synergy.png" alt="" class="nav__logo" />

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="officer_dashboard.php" class="nav__link">Dashboard</a>
          </li>

          <li class="nav__item">
            <a href="data_entry.php" class="nav__link">Data Entry</a>
          </li>

          <li class="nav__item">
            <a href="data_view.php" class="nav__link">Data View</a>
          </li>

          <li class="nav__item">
            <a href="notice_review_and_post.php" class="nav__link">Notice Review and Post</a>
          </li>


          <!-- <li class="nav__item">
            <a href="#" class="nav__link">Featured</a>
          </li>

          <li class="nav__item">
            <a href="#" class="nav__link">Contact Me</a>
          </li> -->
        </ul>

        <!-- Close button
        <div class="nav__close" id="nav-close">
          <i class="ri-close-line"></i>
        </div> -->
      </div>

      <div class="nav__actions">
        <!-- Logout button -->
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line"></i>
        </div>
        <!-- Logout button -->
        <a href="homepage.php">
          <i class="ri-logout-box-r-line" id="login-btn"></i>
        </a>
      </div>
    </nav>
  </header>

  <!-- <img src="IUB tech 360 logo-01.png" alt="" id="img-logo"> -->

  <section>
    <div>
      <div class="row" style="width: 100%; margin: 150px auto 0 auto; justify-content:center;">
        <div class="col-lg-6 mb-3 mb-sm-0">
          <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h3 class="card-title">User Entry</h3>
              <form class="row g-3" action="user_connect.php" method="post">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault01" name="f_name" required />
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationDefault02" name="l_name" required />
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Contact Number</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="contact" required />
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault03" class="form-label">Age</label>
                  <input type="text" class="form-control" id="validationDefault03" name="age" required />
                </div>
                <div class="col-md-3">
                  <label for="validationDefault04" class="form-label">Gender</label>
                  <select class="form-select" id="validationDefault04" name="gender" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault05" class="form-label">Type of user</label>
                  <select class="form-select" id="validationDefault04" name="type" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Student</option>
                    <option>Mentor</option>
                    <option>Trainer</option>
                    <option>Officer</option>
                    <option>Director</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault06" class="form-label">Password</label>
                  <input type="text" class="form-control" id="validationDefault05" name="password" required />
                </div>

                <div class="col-12" style="margin-top: 42px;">
                  <button class="btn btn-primary" type="submit">
                    Submit form
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6" id="media_1">
          <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h3 class="card-title">Notice Board Data Entry</h3>
              <form class="row g-3" action="officer_notice_board_connect.php" method="post">
                <div class="col-md-4">
                  <label for="validationDefault06" class="form-label">Title</label>
                  <input type="text" class="form-control" id="validationDefault06" name="title" required />
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">Priority lecvel</label>
                  <select class="form-select" id="validationDefault04" name="priority_level" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="high">High</option>
                    <option value="mid">Mid</option>
                    <option value="low">Low</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Posted By</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="posted_by" placeholder="ID MUST EXIST IN DB" required />
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationDefault07" class="form-label">Content</label>
                  <textarea type="text" class="form-control" id="validationDefault07" name="content" required>
                  </textarea>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">
                    Submit form
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="row" style="width: 100%; margin: 100px auto 80px auto; justify-content:center;">
        <div class="col-lg-6 mb-3 mb-sm-0">
          <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h3 class="card-title">Project data Entry</h3>
              <form class="row g-3" action="project_connect.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                  <label for="validationDefault06" class="form-label">Project Title</label>
                  <input type="text" class="form-control" id="validationDefault06" name="project_title" required />
                </div>

                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Mentor ID</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="mentor_id" placeholder="ID MUST EXIST IN DB" required />
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault03" class="form-label">Student 1</label>
                  <input type="text" class="form-control" id="validationDefault03" name="student_id1" placeholder="ID MUST EXIST IN DB" required />
                </div>
                <div class="col-md-3">
                  <label for="validationDefault03" class="form-label">Student 2</label>
                  <input type="text" class="form-control" id="validationDefault03" name="student_id2" placeholder="ID MUST EXIST IN DB" />
                </div>
                <div class="col-md-3">
                  <label for="validationDefault03" class="form-label">Student 3</label>
                  <input type="text" class="form-control" id="validationDefault03" name="student_id3" placeholder="ID MUST EXIST IN DB" />
                </div>
                <div class="col-md-3">
                  <label for="validationDefault03" class="form-label">Student 4</label>
                  <input type="text" class="form-control" id="validationDefault03" name="student_id4" placeholder="ID MUST EXIST IN DB" />
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">Status</label>
                  <select class="form-select" id="validationDefault04" name="status" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Approved">Approved</option>
                    <option value="pending">Pending</option>
                    <option value="Reviewed">Reviewed</option>
                  </select>
                </div>
                <div class="col md-4">
                  <label for="validationDefault04" class="form-label">Upload pdf </label>
                  <input type="file" class="form-control" name="pdf" id="pdf">

                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="submit">
                    Submit form
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6" id="media_2">
          <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h3 class="card-title">Notice Board Data Request Entry</h3>
              <form class="row g-3" action="officer_notice_review_connect_1.php" method="post">
                <div class="col-md-4">
                  <label for="validationDefault06" class="form-label">Title</label>
                  <input type="text" class="form-control" id="validationDefault06" name="title" required />
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">Priority lecvel</label>
                  <select class="form-select" id="validationDefault04" name="priority_level" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="high">High</option>
                    <option value="mid">Mid</option>
                    <option value="low">Low</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Posted By </label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="posted_by" placeholder="ID MUST EXIST IN DB" required />
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationDefault07" class="form-label">Content</label>
                  <textarea type="text" class="form-control" id="validationDefault07" name="content" required>
                  </textarea>
                </div>

                <div class="col-12" style="margin-top: 82px;">
                  <button class="btn btn-primary" type="submit">
                    Submit form
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <script src="homepage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>