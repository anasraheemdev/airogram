<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <?php include "./bootstrap.php" ?>
    <style>
        .cover-container {
            position: relative;
            height: 350px;
            background-color: #f0f2f5;
            overflow: hidden;
        }

        .profile-picture {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            border: 4px solid white;
            border-radius: 50%;
            overflow: hidden;
            width: 168px;
            height: 168px;
            background-color: #fff;
        }

        @media (min-width: 768px) {
            .profile-picture {
                left: 15%;
            }
        }

        .nav-link {
            color: #65676b;
            font-weight: 600;
        }

        .nav-link.active {
            color: #1877f2;
            border-bottom: 3px solid #1877f2;
        }

        .post-card {
            background: white;
            border-radius: 8px;
            margin-bottom: 16px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .profile-info-card {
            background: white;
            border-radius: 8px;
            margin-bottom: 16px;
            padding: 16px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-light">


    <?php include "./navbar.php" ?>


    <!-- Cover Photo & Profile Picture -->
    <div class="cover-container">
        <img src="./assets/story-b.jpg" alt="Cover Photo" class="w-100 h-100 object-fit-cover">
        <div class="profile-picture ">
            <?php if ($_SESSION['image'] == null) { ?>
                <img src="./assets/dumy.avif" alt="Profile Picture" class="w-100 h-100 object-fit-cover">
            <?php } else { ?>
                <img src="<?php echo $_SESSION['image'] ?>" alt="Profile Picture" class="w-100 h-100 object-fit-cover">
            <?php  }
            ?>

        </div>
    </div>

    <!-- Profile Info Section -->
    <div class="container mt-5 pt-4">
        <div class="text-center text-md-start">
            <h1 class="mb-0"><?php echo $_SESSION['username'] ?></h1>
            <p class="text-muted">1.5K Friends</p>
        </div>

        <!-- Navigation -->
        <nav class="mt-4 border-top border-bottom">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active py-3 px-4" href="#">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 px-4" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 px-4" href="#">Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3 px-4" href="#">Photos</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="row mt-4">
            <!-- Left Sidebar -->
            <div class="col-md-4">
                <!-- Intro Card -->
                <div class="profile-info-card">
                    <h5 class="mb-3">Intro</h5>
                    <p><i class="fas fa-briefcase me-2"></i>Works at Synovate LTD</p>
                    <p><i class="fas fa-graduation-cap me-2"></i>Studied at Air University</p>
                    <p><i class="fas fa-home me-2"></i>Lives in Islamad</p>
                    <p><i class="fas fa-heart me-2"></i>Single</p>
                    <p><i class="fas fa-clock me-2"></i>Joined January 2024</p>
                </div>

                <!-- Photos Card -->
                <div class="profile-info-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Photos</h5>
                        <a href="#" class="text-decoration-none">See All</a>
                    </div>
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="./assets/story5.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                        <div class="col-4">
                            <img src="./assets/sinup-bg.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                        <div class="col-4">
                            <img src="./assets/story-b.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                        <div class="col-4">
                            <img src="./assets/sign-bg.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                        <div class="col-4">
                            <img src="./assets/story-a.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                        <div class="col-4">
                            <img src="./assets/story 6.jpg" class="img-fluid rounded object-fit-cover" alt="Photo" width="150px" height="100px">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-8">
                <!-- Create Post Card -->
                <?php include "./creat-post.php" ?>

                <!-- Sample Posts -->
               <?php include "./posts.php" ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>



    <script>
        function toggleComments() {
            const commentsSection = document.getElementById('comments-section');
            commentsSection.style.display = commentsSection.style.display === 'none' ? 'block' : 'none';
        }


    </script>

</body>

</html>