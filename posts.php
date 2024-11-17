<div class="post-card bg-white rounded p-3 mb-3">
                    <!-- Post Header -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <img src="./assets/ahsan.png" alt="User" class="profile-img rounded-circle me-2" style="width: 40px; height: 40px;">
                            <div>
                                <h5 class="mb-0">Ahsan Raheem</h5>
                                <small class="text-muted">2 hours ago · <i class="fas fa-globe-americas"></i></small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i>Save post</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit post</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt me-2"></i>Delete post</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Post Content -->
                    <p>Just had an amazing day at the beach! 🌊</p>
                    <img src="./assets/amazing-stone-path-in-forest-free-image.webp" alt="Post image" class="img-fluid rounded mb-3">

                    <!-- Reactions Summary -->
                    <div class="d-flex justify-content-between align-items-center mb-2 px-2">
                        <div class="reactions">
                            <span class="reaction-icons">
                                <span class="text-primary me-1"><i class="fas fa-thumbs-up"></i></span>
                                <span class="text-danger me-1">❤️</span>
                                <span class="text-warning">😆</span>
                                <span class="ms-2 text-muted">2.5K</span>
                            </span>
                        </div>
                        <div class="text-muted">
                            <span>324 Comments</span> · <span>89 Shares</span>
                        </div>
                    </div>

                    <hr class="my-2">

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-light flex-grow-1 me-2">
                            <i class="far fa-thumbs-up me-2"></i>Like
                        </button>
                        <button class="btn btn-light flex-grow-1 me-2 toggle-comments" onclick="toggleComments()">
                            <i class="far fa-comment me-2"></i>Comment
                        </button>
                        <button class="btn btn-light flex-grow-1">
                            <i class="far fa-share-square me-2"></i>Share
                        </button>
                    </div>

                    <!-- Comments Section (Hidden by Default) -->
                    <div class="comments-section" id="comments-section" style="display: none;">
                        <!-- Write Comment -->
                        <div class="d-flex mb-3">
                            <img src="./assets/anas.jpg" alt="Your Profile" class="rounded-circle me-2" style="width: 32px; height: 32px;">
                            <div class="flex-grow-1">
                                <input type="text" class="form-control rounded-pill bg-light" placeholder="Write a comment...">
                            </div>
                        </div>

                        <!-- Dummy Comments -->
                        <div class="comments-list">
                            <div class="comment mb-3">
                                <div class="d-flex">
                                    <img src="./assets/pf1.jpeg" alt="Commenter" class="rounded-circle me-2" style="width: 32px; height: 32px;">
                                    <div class="flex-grow-1">
                                        <div class="bg-light p-2 rounded">
                                            <h6 class="mb-1">Ibrahim</h6>
                                            <p class="mb-1">Looks amazing! Where is this place? 😍</p>
                                        </div>
                                        <div class="comment-actions mt-1">
                                            <small class="text-primary">Like</small> ·
                                            <small class="text-primary">Reply</small> ·
                                            <small class="text-muted">15m</small> ·
                                            <small class="text-muted">23 likes</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-light btn-sm w-100">View more comments</button>
                        </div>
                    </div>
                </div>
