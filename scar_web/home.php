<?php 
include 'header.php';
include 'config.php';
// session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <title>H o m e</title>
</head>
<body>
    
<section class="home" id="home">

<h3 data-speed="-2" class="home-parallax">find your car</h3>

<img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

<a data-speed="7" href="cars.php" class="btn home-parallax">explore cars</a>

</section>


<section class="icons-container">

<div class="icons">
    <i class="fas fa-home"></i>
    <div class="content">
        <h3>10+</h3>
        <p>branches</p>
    </div>
</div>

<div class="icons">
    <i class="fas fa-car"></i>
    <div class="content">
        <h3>10+</h3>
        <p>cars sold</p>
    </div>
</div>

<div class="icons">
    <i class="fas fa-users"></i>
    <div class="content">
        <h3>10+</h3>
        <p>happy clients</p>
    </div>
</div>

<div class="icons">
    <i class="fas fa-car"></i>
    <div class="content">
        <h3>10+</h3>
        <p>news cars</p>
    </div>
</div>

</section>

<!-- <section class="vehicles" id="vehicles">

<h1 class="heading"> popular <span>vehicles</span> </h1> -->

<!-- <div class="swiper vehicles-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="image/vehicle-1.webp" alt="">
            <div class="content">
                <h3>Toyota Fortuner</h3>
                <div class="price"> <span>price : </span> Rs 32.58 Lakhs /-</div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2022
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 201 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-2.webp" alt="">
            <div class="content">
                <h3>Mahindra Scorpio-N </h3>
                <div class="price"> <span>price : </span> Rs 11.99 Lakhs /-</div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 200 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-3.webp" alt="">
            <div class="content">
                <h3>Tata Nexon</h3>
                <div class="price"> <span>price : </span> Rs 7.59 Lakhs /-</div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 118 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-4.webp" alt="">
            <div class="content">
                <h3>Mahindra XUV700</h3>
                <div class="price"> <span>price : </span> Rs 13.45 Lakhs /-</div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 197 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-5.webp" alt="">
            <div class="content">
                <h3>Mahindra Thar</h3>
                <div class="price"> <span>price : </span> Rs 13.53 Lakhs /-</div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 150 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-6.webp" alt="">
            <div class="content">
                <h3>Toyota Urban Cruiser Hyryder</h3>
                <div class="price"> <span>price : </span> Rs 10.48 Lakhs /- </div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 102 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-7.webp" alt="">
            <div class="content">
                <h3>Maruti S-Cross</h3>
                <div class="price"> <span>price : </span> Rs 11.29 Lakhs /- </div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 102 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-8.webp" alt="">
            <div class="content">
                <h3>Maruti Brezza</h3>
                <div class="price"> <span>price : </span> Rs 7.99 Lakhs /- </div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 102 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/vehicle-9.webp" alt="">
            <div class="content">
                <h3>Hyundai Creta</h3>
                <div class="price"> <span>price : </span> Rs 10.44 Lakhs /- </div>
                <p>
                    <span class="fas fa-circle"></span> new
                    <span class="fas fa-circle"></span> 2021
                    <span class="fas fa-circle"></span> automatic
                    <span class="fas fa-circle"></span> petrol <br>
                    <span class="fas fa-circle"></span> 138 bhp
                </p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>
    </div> --> 

    <!-- <div class="swiper-pagination"></div>

</div> -->

</section>

<!-- <section class="services" id="services">

<h1 class="heading"> our <span>services</span> </h1> -->

<!-- <div class="box-container">

    <div class="box">
        <i class="fas fa-car"></i>
        <h3>car selling</h3>
        <p>jabjuhijq3enq dqmojejeqjejoqwwkd cjdidjqikdodkqkdmc</p>
        <a href="#" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-tools"></i>
        <h3>parts repair</h3>
        <p>dscmfkfkomfqd owmfmfojo3k mkdeojo3kqmqe asoojowwkeoomeld </p>
        <a href="#" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-car-crash"></i>
        <h3>car insurance</h3>
        <p>dm dnfidkmkmkeefdmqwkf vkmifiewkofvojf omdkdkdnd cdfwfw</p>
        <a href="#" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-car-battery"></i>
        <h3>battery replacement</h3>
        <p>cscn adujqqdiqw sasdjaadsaksd qw wasmdadmmasdasda sdjsandjajdk</p>
        <a href="#" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-gas-pump"></i>
        <h3>oil change</h3>
        <p>jdgywd cljiashdad assddaisbbdabdbdas nnxkoknasajbashbjasdkasa n acjijdjabjdjn</p>
        <a href="#" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-headset"></i>
        <h3>24/7 support</h3>
        <p>hbhcucuc hduhd uajacnjcjnewfjadm cijdfdhudhdijadc jsdc n hdkdnm sdsc</p>
        <a href="#" class="btn"> read more</a>
    </div>

</div>

</section>  -->

<section class="services" id="services">

<h1 class="heading"> our <span>services</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-car"></i>
        <h3>Oil and Filter Change</h3>
        
        <a href="allservices.php" class="btn"> read more
        </a>
    </div>

    <div class="box">
        <i class="fas fa-tools"></i>
        <h3>Interim Service</h3>
        
        <a href="allservices.php" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-car-crash"></i>
        <h3>Full Service</h3>
        
        <a href="allservices.php" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-car-battery"></i>
        <h3>Major Service</h3>
        <a href="allservices.php" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-gas-pump"></i>
        <h3>Manufacturer Service</h3>
        
        <a href="allservices.php" class="btn"> read more</a>
    </div>

    <div class="box">
        <i class="fas fa-headset"></i>
        <h3>24/7 support</h3>
        <a href="allservices.php" class="btn"> read more</a>
    </div>

</div>
</section>

<section class="featured" id="featured">

<h1 class="heading"> <span>featured</span> cars </h1>

 <div class="swiper featured-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="image/car-1.webp" alt="">
            <div class="content">
                <h3>Mahindra Bolero</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 9.53 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-2.webp" alt="">
            <div class="content">
                <h3>Tata Altroz</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 6.29 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-3.webp" alt="">
            <div class="content">
                <h3>Tata Safari</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 15.35 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-4.webp" alt="">
            <div class="content">
                <h3>Tata Punch</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 5.93 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div> 
</div> 
<!-- 
<div class="swiper featured-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="image/car-5.webp" alt="">
            <div class="content">
                <h3>Tata Harrier</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 14.69 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-6.webp" alt="">
            <div class="content">
                <h3>Mahindra Scorpio Classic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 11.99 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-7.webp" alt="">
            <div class="content">
                <h3>Toyota Glanza</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 6.59 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-8.webp" alt="">
            <div class="content">
                <h3>Toyota Innova Crysta</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 18.08 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-12.webp" alt="">
            <div class="content">
                <h3>Maruti Baleno</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 6.42 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-13.webp" alt="">
            <div class="content">
                <h3>Maruti Ciaz</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 8.78 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-14.webp" alt="">
            <div class="content">
                <h3>Maruti Swift</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 5.91 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-17.webp" alt="">
            <div class="content">
                <h3>Hyundai Alcazar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 15.89 Lakhs /-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/car-18.webp" alt="">
            <div class="content">
                <h3>Hyundai i20</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs 7.07 Lakhs/-</div>
                <a href="#" class="btn">check out</a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div> 
</div>
</section> -->

<section class="newsletter">

<h3>subscribe for latest updates</h3>
<p>To Get Latest Update Please Subscribe To Our Website</p>

<form action="">
    <input type="email" placeholder="enter your email">
    <input type="submit" value="subscribe">
</form>

</section>

<!-- <section class="reviews" id="reviews">

<h1 class="heading"> client's <span> review </span> </h1> -->

<!-- <div class="swiper review-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide box">
            <img src="image/pic-1.jpeg" alt="">
            <div class="content">
                <p>Passionate In Full Stack Development</p>
                <h3>Het Kasundra</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/pic-2.jpeg" alt="">
            <div class="content">
                <p>Passionate In Full Stack Development</p>
                <h3>Jeet Satasiya</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/pic-3.jpg" alt="">
            <div class="content">
                <p>Passionate In Web Designning</p>
                <h3>Shrey Ankola</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="swiper-slide box">
            <img src="image/pic-4.jpg" alt="">
            <div class="content">
                <p>Passionate In Back - End Development</p>
                <h3>Dev Kardani</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

     <div class="swiper-pagination"></div>

</div> -->

<!-- </section> -->

<section class="contact" id="contact">

<h1 class="heading"><span>contact</span> us</h1>

<div class="row">

    <form method="post">
        <h3>get in touch</h3>
        <input type="text" placeholder="your name" class="box" name="fname">
        <input type="email" placeholder="your email" class="box" name="email">
        <input type="tel" placeholder="subject" class="box" name="sub">
        <textarea placeholder="your message" class="box" cols="30" rows="10" name="mess"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>
</div>
</section>

<section class="footer" id="footer">

<div class="box-container">

    <div class="box">
        <h3>our branches</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Mota Varachha </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Kamrej </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Sarthana JakatNaka </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> ShyamDham Mandir </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Adajan </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
        <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
        <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
        <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
        <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +91 9874125630</a>
        <a href="#"> <i class="fas fa-phone"></i> +91 6547893201 </a>
        <a href="#"> <i class="fas fa-envelope"></i> scar@gmail.com </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Surat, India - 395006 </a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

</div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="scriptproj.js"></script>

</body>
</html>