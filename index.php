<?php
    $conn =mysqli_connect('localhost','root','','contact_db') or die('connection failed');
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string(
            $conn, $_POST['name']);
        $email = mysqli_real_escape_string(
            $conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn,"INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');
            
            if($insert){
                $message[] = 'appointment made successfully';
            } else {
                $message[] = 'appointment failed';
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayfield Medical Services</title>
    <link rel="stylesheet" href="style.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    
</head>
<body>
    

<!-- header section starts here -->


    <header class="header fixed-top">


        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="#Home" class="logo" id="logo"><img src="img/rayfieldlogo.jpeg" alt=""></a>

                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Our Service</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#gallery">Gallery</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>


            </div>

        </div>

    </header>


<!-- header section ends here -->

<!-- home section starts here -->

<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items center">
            <div class="content text-center text-md-left">
                <h3>Welcome to rayfield medical services</h3>
                <p>The trusted provider of high quality diagnostic services that provide timely, accurate and reliable diagnostic services in line with International best practices.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>


<!-- home section ends here -->

<!-- about section starts here -->

<section class="about" id="about">
<div class="section">
    <div class="heading">
         <h1>About Us</h1>
    </div>
    <div class="content-section">
        <div class="content">
            <h3>RAYFIELD MEDICAL SERVICES</h3>
            <p>Is a healthcare centre in Jos-South LGA, rendering broad range of care to patients from various parts of the country. <br> It is a 16-bed Multi-specialty primary & secondary care hospital with limited tertiary care. It opened to the public on the 1st of November 2013. <br>
            The hospital baes its functionality upon the unique philosophy of providing preventive, Curative and Holistic care to all individuals from every strata of society.</p>
            <div class="button">
                <a href="#services">Read more</a>
            </div>
        </div>
        <div class="social">
            <a href=""><i class="fas fa-facebook"></i></a>
            <a href=""><i class="fas fa-twitter"></i></a>
            <a href=""><i class="fas fa-instagram"></i></a>
        </div>
    </div>
    <div class="image-section">
        <img src="img/about.JPG" alt="">
    </div>
</div>

</section>

<!-- about section ends here -->

<!-- our serivice section starts here -->

<section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="img/222.png" alt="">
            <h3>Anaesthetic Services</h3>
            <p>Excellent support of major surgeries as well as acute pain management; Labour pain (epidural) pain care</p>
        </div>
        <div class="box">
            <img src="img/555.png" alt="">
            <h3>Delivery Services</h3>
            <p>The Maternity services are all-inclusive for expecting & breastfeeding Mothers, as well as those in recovery. Services for Emergency deliveries and Management of complications are also available.</p>
        </div>
        <div class="box">
            <img src="img/444.png" alt="">
            <h3>Endoscopic Services</h3>
            <p>The Endoscopy unit offers high quality diagnostic and therapeutic Gastrointestinal services; Biopsies, banding of varices, sclerosant injections, haemostasis, ballon dilation and polypectomy</p>
        </div>
        <div class="box">
            <img src="img/333.png" alt="">
            <h3>Immunology Services</h3>
            <p>Rayfield Medical Diagnostic Centre is equipped with the rugged and ever reliable Cobas E41 fully automated immunology analyser. It boasts of the following test menus: Cardiac muscle, Endocrine reproductive, Endocrine parathyroid/thyroid etc.</p>
        </div>
        <div class="box">
            <img src="img/222.png" alt="">
            <h3>Microbiology Services</h3>
            <p>Rayfield Medical Diagnostic Centre microbiology unit is equipped with the following machines: Bactec FX40 automated blood culture machine and Zeis fluorescent microscope. we offer the following services: CSF m/c/s, HVS m/c/s, seminal fluid analysis + m/c/s, Aspirate m/c/s, Blood culture and much more.</p>
        </div>
        <div class="box">
            <img src="img/555.png" alt="">
            <h3>Pharmaceutical Services</h3>
            <p>The pharmaceutical department is patient-centered, drug-focused and outcome-oriented, manned by professionals offering excellent patient medication experience</p>
        </div>
        <div class="box">
            <img src="img/444.png" alt="">
            <h3>Radiology Services</h3>
            <p>The radiology unit is equipped with modern high-tech radiology equipments which includes: Computerised Tomographic scan (CT Scan), Ultrasound Scan, Digital Radiography and Flouroscopy and Mammography.</p>
        </div>
        <div class="box">
            <img src="img/333.png" alt="">
            <h3>Immunization/Family Planning</h3>
            <p>All major vaccines are available on specific days with family planning services to promote sustained health of newborns and mothers</p>
        </div>
        <div class="box">
            <img src="img/222.png" alt="">
            <h3>Specialist Clinics</h3>
            <p>We offer specialist clinics such as Paediatrics, Internal Medicine Clinics, Rheumatology, Nephrology, Cardiology, Psychiatry, Orthopaedic & Trauma Surgery, Paediatric Surgery, Urology, Ophthalmology and much more</p>
        </div>
    </div>
</section>


<!-- our service section ends here -->

<!-- process section starts here -->

<section class="process" id="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="img/222.png" alt="">
            <h3>Rheumatology</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
        <div class="box">
            <img src="img/333.png" alt="">
            <h3>Trauma Surgery</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
        <div class="box">
            <img src="img/444.png" alt="">
            <h3>Gynaecology</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
        <div class="box">
            <img src="img/555.png" alt="">
            <h3>Paediatric Surgery</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
        <div class="box">
            <img src="img/222.png" alt="">
            <h3>Ophthamalmology</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
        <div class="box">
            <img src="img/333.png" alt="">
            <h3>Urology</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quis doloribus, ad laudantium dolore corrupti beatae expedita quam cupiditate earum rerum voluptatibus iusto illo dolores quod facere incidunt aspernatur numquam.</p>
        </div>
    </div>
</section>

<!-- process section ends here -->

<!-- gallery section starts here -->
<section class="gallery" id="gallery">
    <h1>GALLERY</h1>
    <div class="main-gallery">
        <div class="inner-gallery">
            <img src="img/12.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/13.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/4.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/14.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/home.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/15.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/15.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/16.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/17.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/3.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/4.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/5.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/6.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/7.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/8.JPG" alt="">
        </div>
        <div class="inner-gallery">
            <img src="img/9.JPG" alt="">
        </div>
    </div>
</section>

<!-- gallery section ends here -->


<!-- reviews section starts here -->

<section class="reviews" id="reviews">
    <h1 class="heading">Satified Clients</h1>
    <div class="box-container container">
        <div class="box">
            <img src="img/reviews-1 (1).jpg" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae recusandae in quos voluptatem nostrum facilis, placeat accusantium ab quia vitae eum, consequuntur sit quas aperiam labore natus omnis, laboriosam dignissimos!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <h3>Felicia Achiloko</h3>
            <span>Satified Client</span>
        </div>
        <div class="box">
            <img src="img/reviews-1 (2).jpg" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae recusandae in quos voluptatem nostrum facilis, placeat accusantium ab quia vitae eum, consequuntur sit quas aperiam labore natus omnis, laboriosam dignissimos!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <h3>Gloria Achiloko</h3>
            <span>Satified Client</span>
        </div>
        <div class="box">
            <img src="img/reviews-1 (3).jpg" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae recusandae in quos voluptatem nostrum facilis, placeat accusantium ab quia vitae eum, consequuntur sit quas aperiam labore natus omnis, laboriosam dignissimos!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <h3>Blessing Achiloko</h3>
            <span>Satified Client</span>
        </div>
    </div>
</section>

<!-- reviews section ends here -->



<!-- Contact section starts here -->

<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
            }
        }
    ?>
    <span>Enter Name</span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>
    <span>Enter Email</span>
    <input type="email" name="email" placeholder="enter your email" class="box" required>
    <span>Enter Phone number</span>
    <input type="number" name="number" placeholder="enter your phone number" class="box" required>
    <span>Enter Appointment Date</span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appointment" name="submit" class="link-btn">

    </form>
</section>


<!-- Contact section ends here -->






<!-- footer section starts here -->

<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <p>+237044445504</p>
        </div>
        <div class="box">
            <i class="fas fa-map"></i>
            <h3>Our address</h3>
            <p>30 Rapheal Davou Street, Fwavwei Rayfield, Jos Pateau State, Nideria</p>
        </div>
        <div class="box">
            <i class="fas fa-envelop"></i>
            <h3>Email address</h3>
            <p>rayfieldmedicals@gmail.com</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening hours</h3>
            <p>00:01 AM to 11:59 PM</p>
        </div>
    </div>
    <div class="credit">&copy; Copyright@<?php echo date('Y');?><span>Designed By Achiloko</span></div>
</section>

<!-- footer section ends here -->

<!--custom js file link -->

<script src="script.js"></script>

</body>
</html>
