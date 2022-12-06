<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বাসা বরাদ্দ ব্যবস্থাপনা সিস্টেম | অভ্যন্তরীণ সম্পদ বিভাগ</title>
    <link rel="icon" href="images/govlogo.png">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/javascript.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <div class="container-login">
        <!--Header Region Starts-->
        <div class="login-header">
            <div class="login-header-image">
                <img src="images/govlogo.png" alt="গণপ্রজাতন্ত্রী বাংলাদেশ সরকার">
            </div> 
            <div class="login-header-title">
                <h1>অভ্যন্তরীণ সম্পদ বিভাগ</h1>
                <h2>অর্থ মন্ত্রণালয়</h2>
            </div>
        </div>
        <!--Header Region Ends-->
        <div class="login-content-name">
            <h2>অভ্যন্তরীণ সম্পদ বিভাগের বাসা বরাদ্দ ব্যবস্থাপনা সিস্টেম</h2>
        </div>
        <!--Login Box Starts-->
        <div class="login-footer">
            <div class="login-content-image">
            </div>
            <div class="login-box">
                <div class="login-box-logo">
                    <img src="images/loginlogo.gif" alt="বাসা বরাদ্দ">
                </div>
                <div class="login-box-text">
                    <h3>লগইন করুন</h3>
                </div>
                <form class="login-form" action="pages/home.php" method="post">
                    <div class="login-form-field" >
                        <span class="fa fa-user"></span>
                        <input type="text" name="userName" id="user-name" placeholder="ইউজার আইডি">
                    </div>
                    <div class="login-form-field">
                        <span class="fa fa-key"></span>
                        <input type="password" name="userPassword" id="user-password" placeholder="পাসওয়ার্ড">
                    </div> 
                    <div class="login-submit">
                        <button class="login-btn">প্রবেশ করুন</button>
                    </div>
                </form>
            </div>
            <div class="login-content-image">
            </div>
            <!--Footer Starts-->
            <div class="footer">
                <?php require 'phprqr/footer.php';
                ?>
            </div>
            <!--Footer Ends-->
        </div>
        <!--Login Box Ends-->
        
    </div>
</body>
</html>