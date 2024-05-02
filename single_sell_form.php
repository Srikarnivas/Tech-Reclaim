<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (your existing head content) ... -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-Reclaim
    </title>
    <link rel="stylesheet" href="single_sell_form.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="single_home_page.html">Tech-Reclaim</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="single_home_page.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="common_home_page.html">logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="container_1">
        <div id="container_2">
            <form action="./single_form.php" method="post" class="registration-form" id="registration-form-1">

                <div class="form-group">
                    <label for="fullname" id="hello">Full Name:</label>
                    <input type="text" id="fullname" name="name" class="input" required>
                </div>
                <div class="form-group">
                    <label for="collection name">Collection Center Name:</label>
                    <input type="text" id="collection_name" name="collection_center" class="input" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="input" required>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" id="state" name="state" class="input" required>
                </div>
                <div class="form-group">
                    <label for="district">District:</label>
                    <input type="text" id="district" name="district" class="input" required>
                </div>
                <div class="form-group">
                    <label for="town">Town:</label>
                    <input type="text" id="town" name="town" class="input" required>
                </div>
                <div class="form-group" id="form-group-address">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" class="input" rows="4" required></textarea>
                </div>
                <div class="choice-box" id="choice-box_1">
                    <label for="typeof_ewaste">Select type of E-Waste:</label>
                    <select id="choices" name="choices">
                        <option value="mobiles">Mobiles or Tablets</option>
                        <option value="laptops">Laptops</option>
                        <option value="tv">TV</option>
                        <option value="computers">Computers</option>
                        <option value="Refidgerators">Refidgerators</option>
                        <option value="Printers">Printers</option> 
                        <option value="others">Other Electronics</option>
                    </select>
                </div>
                <button type="submit" class="submit-button form-group" id="submitButton">Submit</button>
            </form>
            
        </div>
    </div>
    <footer id="footer1">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        <p>Copyright &copy; 2024 | All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>

