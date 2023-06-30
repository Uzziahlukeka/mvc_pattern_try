<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/icons/Main Logo.svg">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/main.css">
    <title>uzhlkk-conctact</title>
</head>

<body>

    <!-- ....................................Here starts navbar........................................ -->


    <section id="header">
        <a href="main.html"><img class="image" src="/icons/Nextbid.svg" alt=""></a>
        <div class="navbar-links">
            <ul class="navbar">
                <li><a href="loggedin.php">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
        <div class="navbar-icons">
            <a href="user-profile.html"><img class="user-profile-icon" src="/icons/user-circle.svg" alt=""></a>
        </div>

        <div class="toggle-btn">
            <i class="fa-solid fa-bars fa-lg"></i>
        </div>
        <div class="dropdown-menu">
            <li><a href="loggedin.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
        </div>
    </section>




    <!-- ....................................Here starts contact section........................................ -->

    <section id="contact" class="about">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="#" onsubmit="sendMessage(); return false;">
                <label class="one-label" for="name">Your Full Name*</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                <div class="form-name-email">
                    <div class="form-group">
                        <label class="one-label" for="email">Your Email*</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="one-label" for="name">Phone Number*</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="+48 123 456 789">
                    </div>
                </div>
                <label class="one-label" for="subjet">Subject*</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">

                <label class="one-label" for="button">Message*</label>
                <textarea name="message" class="form-control" id="message" rows="5"
                    placeholder="Your message here.."></textarea>
                <input type="submit" class="btn" value="Send Request">
            </form>
        </div>
    </section>


    <!-- ....................................Here starts footer........................................ -->


    <footer class="footer">
        <div class="container-1">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul class="footer-ul">
                        <li><a href="#">about us</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div> 
                <div class="footer-col">
                <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/uzziah.lukeka?__cft__[0]=AZWH6J5XOSXgvsKZ4_bAfuY0zW1ZxMkzzOhvPYo4OSo5drpQ-yY9zY_8h-4gt8gzSgWEOkxEOhS_U8KU4Kuwr_u3B2A6ImbHu4pj9Bls2XVzkBDy5yValgYhQIwuStckFynGjKfWW-hvoNPSwB0iamrlYBlVsz6njcqBHn5eZxigXQ&__tn__=-UC%2CP-R"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fuzziah_lukeka%3Ffbclid%3DIwAR1CGQ0NjKCRKmUzU0LuN-fxHEVUHx8EsnLHBNiJ7j480oXLoFF7i-BJF2g&h=AT0P6iEFuT7x02YryMas9__MOpTur-8jxsoW8arT7djLpFztT8BDg-HV2IjAEmrdGD67wrWoc-QnGiZUf__4DFU8cpywGRMVp4k5p39AeYKh8nUIQdNsMLMSMEXd3MROk7jv"><i class="fab fa-twitter"></i></a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2FUzziah_lukeka%3Ffbclid%3DIwAR140t0QwY1ifIMDydnobWMq53horkj1fuAo6piwqdpThvl8_VFSyGfQHWE&h=AT3Ca5P2sxUthBIb0W_WnQsyCD3hCU00PiiaPtZtjwQaN77SxX-pkSPbL6R9noSg0PljzEydTBlzL27Nnjs0v6t4i7ngEzH3PBz70HQWPJp4lTavbGlZI2MDEsWGYYVdVR8J"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/uzziah-lukeka-33a4791b8?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BTogSKlXfSZi4mwlcdg57dw%3D%3D"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="last-div">
        <p>&copy; 2023 Uzhlkk. All rights reserved.</p>
    </div>

    <!--*************************************Here starts top-to button***************************************-->

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="/icons/to-top-button.svg" alt="Back to Top">
    </button>

    <!--*************************************Here starts js links***************************************-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/top-to-scroll.js"></script>
    <script src="/js/toggle-btn.js"></script>
    <script src="/js/contact.js"></script>

</body>

</html>