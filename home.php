<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./homestyle.css">
</head>

<body>

    <?php
    session_start();

    // check whether the session is started or not
    if (isset($_SESSION['username'])) {
    } else {
        header("Location: http://localhost/airogram/");
    }
    ?>

    <?php include "./navbar.php" ?>

    <div class="container my-5" style="padding-top:20px !important">
        <div class="row">
            <div class="col-lg-3">
                <!-- Main Menu Section -->
                <div class="sidebar bg-white rounded p-3 mb-3">
                    <ul class="list-unstyled menu-items">
                        <!-- Profile Item -->
                        <a class="d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer text-decoration-none" href="http://localhost/airogram/user-profile.php">
                            <?php if ($_SESSION['image'] == null) { ?>
                                <img src="./assets/dumy.avif" alt="Profile"
                                    class="rounded-circle me-2" style="width: 36px; height: 36px; object-fit: cover;">
                            <?php } else { ?>
                                <img src="<?php echo $_SESSION['image'] ?>" alt="Profile"
                                    class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover;">
                            <?php  }
                            ?>
                            <span class="fw-medium"><?php echo "{$_SESSION['username']}"; ?></span>
                        </a>

                        <!-- Main Menu Items -->
                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <div class="menu-icon bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-user-friends text-primary"></i>
                            </div>
                            <span>Friends</span>
                            <span class="badge bg-danger rounded-pill ms-auto">3</span>
                        </li>

                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <div class="menu-icon bg-purple bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-users text-white"></i>

                            </div>
                            <span>Groups</span>
                            <span class="badge bg-primary rounded-pill ms-auto">2</span>
                        </li>

                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <div class="menu-icon bg-info bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-store text-info"></i>
                            </div>
                            <span>Marketplace</span>
                        </li>

                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <div class="menu-icon bg-danger bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-tv text-danger"></i>
                            </div>
                            <span>Watch</span>
                            <span class="badge bg-danger rounded-pill ms-auto">12</span>
                        </li>

                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <div class="menu-icon bg-warning bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-clock text-warning"></i>
                            </div>
                            <span>Memories</span>
                        </li>

                        <!-- See More Button -->
                        <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer"
                            data-bs-toggle="collapse" data-bs-target="#moreOptions">
                            <div class="menu-icon bg-secondary bg-opacity-10 p-2 rounded-circle me-3">
                                <i class="fas fa-chevron-down text-secondary"></i>
                            </div>
                            <span>See More</span>
                        </li>

                        <!-- Collapsed Items -->
                        <div class="collapse" id="moreOptions">
                            <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                                <div class="menu-icon bg-success bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="fas fa-bookmark text-success"></i>
                                </div>
                                <span>Saved</span>
                            </li>

                            <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                                <div class="menu-icon bg-info bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="fas fa-flag text-info"></i>
                                </div>
                                <span>Pages</span>
                            </li>

                            <li class="menu-item d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                                <div class="menu-icon bg-warning bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="fas fa-calendar text-warning"></i>
                                </div>
                                <span>Events</span>
                            </li>
                        </div>
                    </ul>
                </div>

                <!-- Shortcuts Section -->
                <div class="sidebar bg-white rounded p-3 mb-3">
                    <h5 class="text-muted mb-3 px-2" style="font-size: 17px;">Your Shortcuts</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <img src="https://cdn-1.webcatalog.io/catalog/web-dev/web-dev-icon-filled-256.png?v=1714776433339" alt="Group" class="rounded me-3" style="width: 36px; height: 36px; object-fit: cover;">
                            <span>Web Development Group</span>
                        </li>
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img/https://daninstitute.com/wp-content/uploads/2020/10/aspira-design-online-course-provider-logo.jpg" alt="Group" class="rounded me-3" style="width: 36px; height: 36px; object-fit: cover;">
                            <span>UI/UX Designer Group</span>
                        </li>
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light mb-2 cursor-pointer">
                            <img src="https://i.playboard.app/p/AAUvwnht3DpREdv6fUykoYAbEmERNdRLEX7sR8OVaM4xEg/default.jpg" alt="Game" class="rounded me-3" style="width: 36px; height: 36px; object-fit: cover;">
                            <span>Gaming Community</span>
                        </li>
                    </ul>
                </div>

                <!-- Footer Links -->
                <div class="footer-links px-3 mb-3">
                    <small class="text-muted">
                        <a href="#" class="text-muted text-decoration-none">Privacy</a> ·
                        <a href="#" class="text-muted text-decoration-none">Terms</a> ·
                        <a href="#" class="text-muted text-decoration-none">Advertising</a> ·
                        <a href="#" class="text-muted text-decoration-none">Ad Choices</a> ·
                        <a href="#" class="text-muted text-decoration-none">Cookies</a> ·
                        <a href="#" class="text-muted text-decoration-none">More</a> ·
                        Airogram © 2024
                    </small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stories bg-white rounded p-2" style="overflow-x: auto; -ms-overflow-style: none; scrollbar-width: none;">
                    <div class="d-flex gap-3">
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/ahsan.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/The_Future_of_Robotics.jpg" alt="Story 1" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Create Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="https://www.imec-int.com/sites/default/files/2021-06/Robotics-technology-for-Industry.jpg" alt="Story 1" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Lence's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="https://www.merconnet.com/media/magefan_blog/What_is_Robotics_Education.jpg" alt="Story 1" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Shams's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="https://cdn1.expresscomputer.in/wp-content/uploads/2023/11/07152640/technology-illustration-hd.jpg" alt="Story 1" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Ali's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="./assets/pf4.avif" alt="Story 2" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Ahsan's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="./assets/story 2.avif" alt="Story 3" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Mike's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="./assets/story4.jpg" alt="Story 4" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Mike's Story</div>
                        </div>
                        <div class="story position-relative rounded overflow-hidden" style="min-width:120px; height:200px; flex-shrink: 0; position: relative;">
                            <img src="./assets/anas bhi.png"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                                style="width: 45px; height: 45px; position: absolute; ">
                            <img src="./assets/story5.jpg" alt="Story 5" class="w-100 h-100 object-fit-cover">
                            <div class="story-title position-absolute bottom-0 left-0 text-white fs-6 p-2">Mike's Story</div>
                        </div>
                    </div>
                </div>






                <!-- <div class="create-post bg-white rounded p-3 mb-3">
                    <div class="d-flex align-items-center border-bottom pb-3">
                        <img src="./assets/anas.jpg" alt="Profile" class="profile-img rounded-circle me-2">
                        <input type="text" class="form-control bg-light border-0" placeholder="What's on your mind?">
                    </div>
                    <div class="d-flex justify-content-around pt-3">
                        <button class="btn btn-light"><i class="fas fa-video text-danger"></i> Live Video</button>
                        <button class="btn btn-light"><i class="fas fa-images text-success"></i> Photo/Video</button>
                        <button class="btn btn-light"><i class="fas fa-smile text-warning"></i> Feeling/Activity</button>
                    </div>
                </div> -->














                <?php include "./creat-post.php" ?>










                <?php include "./posts.php" ?>









            </div>
            <div class="col-lg-3">
                <!-- Sponsored Section -->
                <div class="sidebar bg-white rounded p-3 mb-3">
                    <h5 class="mb-3 text-muted fw-bold" style="font-size: 17px;">Sponsored</h5>
                    <div class="sponsored-item d-flex align-items-center mb-3 cursor-pointer">
                        <img src="https://miro.medium.com/v2/resize:fit:1200/1*V-Jp13LvtVc2IiY2fp4qYw.jpeg" alt="Ad" class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1">Learn Web Development</h6>
                            <small class="text-muted">udemy.com</small>
                        </div>
                    </div>
                    <div class="sponsored-item d-flex align-items-center cursor-pointer">
                        <img src="https://www.schott.com/-/media/project/onex/shared/teasers/consumer-electronics/consumer-electronics_01-displays_00_720x450.jpg?rev=fe6df7a508644a7d8e294e6c294a317b" alt="Ad" class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1">30% Off Electronics</h6>
                            <small class="text-muted">amazon.com</small>
                        </div>
                    </div>
                </div>

                <!-- Birthdays Section -->
                <div class="sidebar bg-white rounded p-3 mb-3">
                    <h5 class="mb-3 text-muted fw-bold" style="font-size: 17px;">
                        <i class="fas fa-gift me-2 text-primary"></i>Birthdays
                    </h5>
                    <div class="birthday-item d-flex align-items-center mb-2">
                        <img src="https://media.istockphoto.com/id/1345275833/photo/cropped-shot-of-a-handsome-young-man-posing-against-a-white-background.jpg?b=1&s=612x612&w=0&k=20&c=0dKGj0bAVkDu0x6nuyAcFGi2f24Ah98mpPb-k-yfuJI=" alt="Gift" class="me-2" style="width: 30px; height: 30px;">
                        <p class="mb-0"><strong>Ibrahim</strong> and <strong>2 others</strong> have birthdays today.</p>
                    </div>
                </div>

                <!-- Contacts Section -->
                <div class="sidebar bg-white rounded p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-muted fw-bold" style="font-size: 17px;">Contacts</h5>
                        <div class="contact-actions">
                            <i class="fas fa-video me-3 text-muted"></i>
                            <i class="fas fa-search me-3 text-muted"></i>
                            <i class="fas fa-ellipsis-h text-muted"></i>
                        </div>
                    </div>
                    <ul class="list-unstyled contacts-list">
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light cursor-pointer mb-2">
                            <div class="position-relative">
                                <img src="./assets/pf1.jpeg" alt="Friend" class="profile-img rounded-circle me-2" style="width: 35px; height: 35px;">
                                <span class="position-absolute bottom-0 end-0 bg-success rounded-circle" style="width: 8px; height: 8px;"></span>
                            </div>
                            <span class="ms-2">Ibrahim</span>
                        </li>
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light cursor-pointer mb-2">
                            <div class="position-relative">
                                <img src="./assets/pf2.webp" alt="Friend" class="profile-img rounded-circle me-2" style="width: 35px; height: 35px;">
                                <span class="position-absolute bottom-0 end-0 bg-success rounded-circle" style="width: 8px; height: 8px;"></span>
                            </div>
                            <span class="ms-2">Abu Bakr</span>
                        </li>
                        <li class="d-flex align-items-center p-2 rounded hover-bg-light cursor-pointer mb-2">
                            <div class="position-relative">
                                <img src="./assets/pf4.avif" alt="Friend" class="profile-img rounded-circle me-2" style="width: 35px; height: 35px;">
                                <span class="position-absolute bottom-0 end-0 bg-success rounded-circle" style="width: 8px; height: 8px;"></span>
                            </div>
                            <span class="ms-2">Najaf</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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







        function toggleComments() {
            const commentsSection = document.getElementById('comments-section');
            commentsSection.style.display = commentsSection.style.display === 'none' ? 'block' : 'none';
        }

















        // Image Upload And Preview











        // Image Upload And Preview
    </script>

</body>

</html>