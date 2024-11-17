<style>
    .profile-img {
        width: 40px;
        height: 40px;
        object-fit: cover;
    }

    .preview-image {
        max-height: 300px;
        object-fit: contain;
    }

    .preview-container {
        position: relative;
        display: inline-block;
    }

    .remove-preview {
        position: absolute;
        top: 10px;
        right: 10px;
        background: white;
        border-radius: 50%;
        padding: 5px 8px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .post-button {
        transition: background-color 0.2s;
    }

    .post-button:hover {
        background-color: #f8f9fa;
    }

    .custom-file-upload {
        cursor: pointer;
    }

    .modal-content {
        border-radius: 15px;
    }
</style>

<div class="container mt-4">
    <div class="create-post bg-white rounded shadow-sm p-3 mb-3">
        <div class="d-flex align-items-center border-bottom pb-3">
            <?php if ($_SESSION['image'] == null) { ?>
                <img src="./assets/dumy.avif" class="rounded-circle me-2" width="36px" height="36px" alt="User">
            <?php } else { ?>
                <img src="<?php echo $_SESSION['image'] ?>" class="rounded-circle me-2" alt="User">
            <?php  }
            ?>
            <button class="form-control bg-light border-0 text-start"
                data-bs-toggle="modal"
                data-bs-target="#createPostModal">
                What's on your mind?
            </button>
        </div>
        <div class="d-flex justify-content-between pt-3">
            <button class="btn post-button flex-grow-1 d-flex align-items-center justify-content-center">
                <i class="fas fa-video text-danger me-2"></i> Live Video
            </button>
            <button class="btn post-button flex-grow-1 d-flex align-items-center justify-content-center"
                data-bs-toggle="modal"
                data-bs-target="#createPostModal">
                <i class="fas fa-images text-success me-2"></i> Photo/Video
            </button>
            <button class="btn post-button flex-grow-1 d-flex align-items-center justify-content-center">
                <i class="fas fa-smile text-warning me-2"></i> Feeling/Activity
            </button>
        </div>
    </div>
</div>

<!-- Create Post Modal -->
<div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPostModalLabel">Create Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="posts-form.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input class="form-control border-0"
                            id="postCaption"
                            rows="3"
                            placeholder="What's on your mind?"
                            style="resize: none;" name="capion">
                    </div>

                    <div class="mb-3">
                        <label class="custom-file-upload w-100">
                            <div class="btn btn-light w-100">
                                <i class="fas fa-image me-2"></i>Add Photo/Video
                            </div>
                            <input type="file"
                                id="postImage"
                                accept="image/*"
                                style="display: none;" name="post_img">
                        </label>
                    </div>

                    <div id="previewContainer" class="mb-3 d-none">
                        <div class="preview-container w-100">
                            <img id="imagePreview" class="preview-image w-100 rounded">
                            <button type="button" class="btn remove-preview" id="removePreview">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Post
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const postForm = document.getElementById('postForm');
        const postImage = document.getElementById('postImage');
        const imagePreview = document.getElementById('imagePreview');
        const previewContainer = document.getElementById('previewContainer');
        const removePreview = document.getElementById('removePreview');
        const modal = document.getElementById('createPostModal');

        // Handle file selection and preview
        postImage.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    previewContainer.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        });

        // Remove preview image
        removePreview.addEventListener('click', function() {
            imagePreview.src = '';
            postImage.value = '';
            previewContainer.classList.add('d-none');
        });

        // Handle form submission
        postForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData();
            formData.append('caption', document.getElementById('postCaption').value);
            if (postImage.files[0]) {
                formData.append('image', postImage.files[0]);
            }

            // Here you would typically send the formData to your server
            console.log('Form submitted:', {
                caption: formData.get('caption'),
                image: formData.get('image')
            });

            // Reset form and close modal
            postForm.reset();
            previewContainer.classList.add('d-none');
            bootstrap.Modal.getInstance(modal).hide();
        });

        // Reset form when modal is closed
        modal.addEventListener('hidden.bs.modal', function() {
            postForm.reset();
            previewContainer.classList.add('d-none');
        });
    });
</script>