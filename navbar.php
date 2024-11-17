<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img width="40" height="40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3L3V2LntCTub1zEYZEJfWf8_zPxXFXo6IBg&s" alt="" srcset="" class="rounded-circle">
            <span class="ms-2 fw-bold">Airogram</span>
        </a>

        <!-- Search Bar -->
        <div class="d-none d-md-flex position-relative">
            <div class="input-group" style="min-width: 300px;">
                <span class="input-group-text bg-light border-0">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control bg-light border-0 rounded-end"
                    placeholder="Search Airogram" aria-label="Search">
                <!-- Search Results Dropdown -->
                <div class="position-absolute bg-white rounded shadow-sm w-100 d-none"
                    style="top: 100%; z-index: 1000;">
                    <!-- Search results will be dynamically populated here -->
                </div>
            </div>
        </div>

        <!-- Navigation Icons -->
        <div class="d-flex align-items-center gap-1">
            <!-- Main Navigation -->
            <div class="d-flex">
                <a class="nav-link px-3 active position-relative" href="http://localhost/airogram/home.php" data-bs-toggle="tooltip" title="Home">
                    <i class="fas fa-home fa-lg"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </a>
                <a class="nav-link px-3" href="#" data-bs-toggle="tooltip" title="Friends">
                    <i class="fas fa-user-friends fa-lg"></i>
                </a>
                <a class="nav-link px-3" href="#" data-bs-toggle="tooltip" title="Watch">
                    <i class="fas fa-play-circle fa-lg"></i>
                </a>
                <a class="nav-link px-3" href="#" data-bs-toggle="tooltip" title="Marketplace">
                    <i class="fas fa-store fa-lg"></i>
                </a>
                <a class="nav-link px-3" href="#" data-bs-toggle="tooltip" title="Groups">
                    <i class="fas fa-users fa-lg"></i>
                </a>
            </div>

            <!-- Quick Actions -->
            <div class="d-flex align-items-center ms-2">
                <!-- Menu Dropdown -->
                <!-- Menu Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-light rounded-circle p-2" data-bs-toggle="dropdown">
                        <i class="fas fa-th"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end shadow-sm p-0" style="width: 600px;">
                        <div class="row g-0">
                            <!-- Left Column - Navigation -->
                            <div class="col-7 border-end">
                                <div class="p-3">
                                    <h5 class="mb-3">Menu</h5>
                                    <!-- Search -->
                                    <div class="position-relative mb-3">
                                        <input type="text" class="form-control bg-light border-0 rounded-pill" placeholder="      Search menu">
                                        <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                    </div>

                                    <div class="fs-6 fw-bold mb-2">Social</div>
                                    <!-- Menu Items -->
                                    <div class="menu-items" style="max-height: 500px; overflow-y: auto;">
                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fa fa-calendar text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Events</div>
                                                <small class="text-muted">Organize or find events and other things to do online and nearby.</small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fas fa-user-friends text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Friends</div>
                                                <small class="text-muted">Search for friends or people you may know.</small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fas fa-users text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Groups</div>
                                                <small class="text-muted">Connect with people who share your interests.</small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fas fa-newspaper text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">News Feed</div>
                                                <small class="text-muted">See relevant posts from people and Pages that you follow.</small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fas fa-rss text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Feeds</div>
                                                <small class="text-muted">See the most recent posts from your friends, groups, Pages and more.</small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
                                                <i class="fas fa-flag text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Pages</div>
                                                <small class="text-muted">Discover and connect with businesses on Facebook.</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column - Create -->
                            <div class="col-5">
                                <div class="p-3">
                                    <h5 class="mb-3">Create</h5>
                                    <div class="create-items">
                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-edit"></i>
                                            </div>
                                            <div class="fw-semibold">Post</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-book-open"></i>
                                            </div>
                                            <div class="fw-semibold">Story</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-film"></i>
                                            </div>
                                            <div class="fw-semibold">Reel</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="fw-semibold">Life Event</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-flag"></i>
                                            </div>
                                            <div class="fw-semibold">Page</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-ad"></i>
                                            </div>
                                            <div class="fw-semibold">Ad</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="fw-semibold">Group</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                            <div class="fw-semibold">Event</div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark rounded hover-bg-light">
                                            <div class="rounded-circle bg-light p-2 me-2">
                                                <i class="fas fa-store"></i>
                                            </div>
                                            <div class="fw-semibold">Marketplace Listing</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Messenger -->
                <div class="dropdown">
                    <button class="btn btn-light rounded-circle p-2 ms-2 position-relative" data-bs-toggle="dropdown">
                        <i class="fab fa-facebook-messenger"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            2
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end shadow-sm p-0" style="width: 360px;">
                        <!-- Header -->
                        <div class="p-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Chats</h5>
                                <div>
                                    <button class="btn btn-light btn-sm rounded-circle me-1">
                                        <i class="fas fa-expand-arrows-alt"></i>
                                    </button>
                                    <button class="btn btn-light btn-sm rounded-circle me-1">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Search -->
                            <div class="mt-2 position-relative">
                                <i class="fas fa-search position-absolute right-10 top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" class="form-control bg-light border-0 rounded-pill" placeholder="       Search Messenger">

                            </div>
                        </div>

                        <!-- Messages List -->
                        <div class="messages-list" style="max-height: 400px; overflow-y: auto;">
                            <!-- Message Item -->
                            <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark hover-bg-light">
                                <div class="position-relative">
                                    <img src="./assets/dumy.jpg" class="rounded-circle" width="50" height="50" alt="Profile">
                                    <span class="position-absolute bottom-0 end-0 bg-success rounded-circle" style="width: 12px; height: 12px; border: 2px solid white;"></span>
                                </div>
                                <div class="ms-2 flex-grow-1">
                                    <h6 class="mb-0">AbdulRaheem Khan</h6>
                                    <small class="text-muted d-flex justify-content-between">
                                        <span>You are now connected on Messenger</span>
                                        <span>4d</span>
                                    </small>
                                </div>
                            </a>

                            <!-- Message Item -->
                            <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark hover-bg-light">
                                <div class="position-relative">
                                    <img src="./assets/dumy.jpg" class="rounded-circle" width="50" height="50" alt="Profile">
                                    <span class="position-absolute bottom-0 end-0 bg-success rounded-circle" style="width: 12px; height: 12px; border: 2px solid white;"></span>
                                </div>
                                <div class="ms-2 flex-grow-1">
                                    <h6 class="mb-0">Chaudhary Arsal</h6>
                                    <small class="text-muted d-flex justify-content-between">
                                        <span>You are now connected on Messenger</span>
                                        <span>3w</span>
                                    </small>
                                </div>
                            </a>

                            <!-- Message Item -->
                            <a href="#" class="d-flex align-items-center p-2 text-decoration-none text-dark hover-bg-light">
                                <div class="position-relative">
                                    <img src="./assets/dumy.jpg" class="rounded-circle" width="50" height="50" alt="Profile">
                                    <span class="position-absolute bottom-0 end-0 bg-secondary rounded-circle" style="width: 12px; height: 12px; border: 2px solid white;"></span>
                                </div>
                                <div class="ms-2 flex-grow-1">
                                    <h6 class="mb-0">Rehan Abid</h6>
                                    <small class="text-muted d-flex justify-content-between">
                                        <span>You are now connected on Messenger</span>
                                        <span>7w</span>
                                    </small>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>

                <!-- Messages List -->

                <!-- Notifications -->
                <div class="dropdown">
                    <button class="btn btn-light rounded-circle p-2 ms-2 position-relative" data-bs-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            5
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end shadow-sm p-3" style="width: 300px;">
                        <h6 class="mb-3">Notifications</h6>
                        <div class="notification-list">
                            <!-- Notifications will go here -->
                        </div>
                    </div>
                </div>

                <!-- Profile -->
                <div class="dropdown ms-2">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2"
                        type="button" data-bs-toggle="dropdown">
                        <?php if ($_SESSION['image'] == null) { ?>
                            <img src="./assets/dumy.avif" alt="Profile"
                                class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                        <?php } else { ?>
                            <img src="<?php echo $_SESSION['image'] ?>" alt="Profile"
                                class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                        <?php  }
                        ?>
                        <span class="d-none d-lg-block text-capitalize"><?php echo $_SESSION['username'] ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" style="width: 300px;">
                        <li class="px-3 py-2">
                            <div class="d-flex align-items-center">

                                <?php if ($_SESSION['image'] == null) { ?>
                                    <img src="./assets/dumy.avif" alt="Profile"
                                        class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                                <?php } else { ?>
                                    <img src="<?php echo $_SESSION['image'] ?>" alt="Profile"
                                        class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                                <?php  }
                                ?>


                                <div>
                                    <strong class="d-block text-capitalize"><?php echo $_SESSION['username'] ?></strong>
                                    <a href="http://localhost/airogram/user-profile.php" class="text-decoration-none">View your profile</a>
                                </div>
                            </div>
                        </li>
                        <hr class="dropdown-divider">
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <i class="fas fa-cog me-2"></i> Settings & Privacy
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <i class="fas fa-question-circle me-2"></i> Help & Support
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <i class="fas fa-moon me-2"></i> Display & Accessibility
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="#">
                                <i class="fas fa-comment-alt me-2"></i> Give Feedback
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 text-danger" href="https://localhost/airogram/logout.php">
                                <i class="fas fa-sign-out-alt me-2"></i> Log Out
                            </a>
                        </li>
                        <hr class="dropdown-divider">
                        <li class="px-3 py-1">
                            <small class="text-muted">
                                Privacy · Terms · Advertising · Ad Choices · Cookies · More · Airogram © 2024
                            </small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


<script>


let r_nav = document.querySelector(".r-nav");
        let profile_icon = document.querySelector(".profile-icon");

        profile_icon.addEventListener("click", () => {
            r_nav.style = "display:block";
            r_nav.style = "position: absolute; top:50px; right:10px; border:2px solid white; padding:20px; display:block; background-color: azure;";
        })
        window.addEventListener("click", (e) => {
            if (e.target.classList.contains('fa-user')) {
                r_nav.style = "position: absolute; top:50px; right:10px; border:2px solid white; padding:20px; display:none; background-color: azure;";
            }
        })





</script>