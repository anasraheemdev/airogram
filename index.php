<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username']))
{
  header("Location: http://localhost/airogram/home.php");
}
else{ 
}
?>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="assets/sign-bg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Welcome to Air University <br> Community App</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="assets/sinup-bg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="login.php" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input name="email_lg" type="text" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input name="pass_lg" type="password" placeholder="Enter your password" required>
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <form action="register-user.php" method="POST" enctype="multipart/form-data" id="registrationForm">
                        <div class="input-boxes">
                            <div class="profile-pic-wrapper">
                                <div class="profile-pic-container" onclick="document.getElementById('profile_picture').click()">
                                    <div class="profile-pic" id="profilePicPreview">
                                        <img src="assets/default-avatar.png" alt="Profile Picture" id="previewImage">
                                    </div>
                                </div>
                                <div class="profile-pic-text">Click to choose profile picture</div>
                                <input type="file" name="ppf" id="profile_picture" accept="image/*">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input name="name" type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input name="email" type="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input name="phone" type="text" placeholder="Enter your Phone Number" required>
                            </div>
                            <div class="input-box">
                                <i class="fa fa-calendar"></i>
                                <input name="dob" type="date" placeholder="Enter your DOB" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input name="password" type="password" placeholder="Enter your password" required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        position: fixed;
        top: 20px;
        right: 20px;
        max-width: 300px;
        z-index: 1000;
    }
    
    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
    
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
    
    .profile-pic-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .profile-pic-container {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #4070f4;
        position: relative;
        cursor: pointer;
        margin-bottom: 10px;
    }
    
    .profile-pic {
        width: 100%;
        height: 100%;
        object-fit: cover;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .profile-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .profile-pic-text {
        font-size: 14px;
        color: #4070f4;
        text-align: center;
        margin-top: 5px;
    }
    
    .profile-pic-container:hover::before {
        content: "Choose Image";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }
    
    #profile_picture {
        display: none;
    }
    
    .highlight {
        border-color: #4070f4;
        background-color: rgba(64, 112, 244, 0.1);
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image preview functionality
        const profilePicInput = document.getElementById('profile_picture');
        const previewImage = document.getElementById('previewImage');
        const dropZone = document.querySelector('.profile-pic-container');
        
        // Preview function
        function previewProfilePic(file) {
            if (file) {
                // Validate file size
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    profilePicInput.value = '';
                    return;
                }
                
                // Validate file type
                if (!file.type.match('image.*')) {
                    alert('Please select an image file');
                    profilePicInput.value = '';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
        
        // File input change handler
        profilePicInput.addEventListener('change', function(e) {
            previewProfilePic(this.files[0]);
        });
        
        // Drag and drop handlers
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight(e) {
            dropZone.classList.add('highlight');
        }
        
        function unhighlight(e) {
            dropZone.classList.remove('highlight');
        }
        
        dropZone.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            if (files.length > 0) {
                profilePicInput.files = files;
                previewProfilePic(files[0]);
            }
        }
        
        // Auto-hide alerts after 5 seconds
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        });
    });
    </script>
</body>
</html>