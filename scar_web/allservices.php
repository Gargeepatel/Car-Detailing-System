<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header">
        <a href="#" class="logo"> <span>Services</span></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="#services">|</a>
                <a href="#services1">Oil & Filter Change</a>
                <a href="#services2">Interim Service</a>
                <a href="#services3">Full Service</a>
                <a href="#services4">Major Service</a>
                <a href="#services5">Manufacturer Service</a>
            </nav>
    </header>
    <section class="services" id="services">
        <h1 class="heading"> our <span>services</span> </h1>
            <div class="box-container">
            <div class="box">
                <h3>The Importance of Servicing a Car</ h3>
                <p>When people talk about servicing a vehicle, they often refer to a range of processes and procedures that adhere to the recommended maintenance schedule of the dealer or manufacturer. It can be very easy to get lost in the process of servicing. This is because there are so many components of a car that need routine maintenance.
                In general, servicing your car at regular intervals ensures that the vehicle is in good condition. It addresses potential problems before they start affecting the performance of the vehicle in a negative way. If you decide to sell your vehicle, one of the things that a potential buyer will want to look for is the service record of the car. There should be no problems if you have the automobile regularly serviced. It is a sign that you are taking good care of the car.
                Servicing your vehicle can also help keep it operating in an efficient manner. This translates to better fuel economy and better safety. It can also reduce the chance of breakdowns in the future.
                </p>
                </div>
            </div>
    </section>
    <section class="services1" id="services1">
    <div class="box-container">
            <div class="box">
                <h3>Oil and Filter Change</h3>
                <p>This is one of the most basic car services that shops can provide. It is also one of the cheapest. All types of car servicing also include a change of the motor oil and filter. This service helps make sure that your car's engine gets all the proper lubrication. It ensures a more efficient engine operation. The only problem with this type of service is that the garage personnel will only focus on the engine of the car.</p>
            </div>
        </div>
    </section>
    <section class="services2" id="services2">
    <div class="box-container">
            <div class="box">
                <h3>Interim Service</h3>
                <p>Different garages or auto shops have different items included in their interim service. In general, it can include the visual inspection of about 35 key automotive components. These components are critical to the optimal performance of the car. Examples of these are the ABS, timing belt interval, power steering, battery, steering and suspension, brake pads, fuel lines, and many more. These are in addition to an oil and filter change and the topping off or the replacement of fluids. It is ideal to have your car serviced in the interim after every 6 months or about 6,000 miles, whichever comes first.</p>
            </div>
    </div>
    </section>
    <section class="services3" id="services3">
    <div class="box-container">
            <div class="box">
                <h3>Full Service</h3>
                <p>The current recommendation for a full car service is once every 12 months or every 12,000 miles. So, what does an annual car service include? A full service adds about 15 to 30 different automotive checks on top of what you get from an interim car service. These can include checking the coolant system, throttle operation, distributor cap condition, and mounts for the gearbox and the engine. It can also include the condition of the wheels, the wheel bearings, and the starter motor.
                    The assessments are more extensive in a full car service. The garage can also check for additional items based on the guidelines and recommendations of the vehicle manufacturer. Do take note that there is an extra charge for any additional work to be done on your car.    </p>
            </div>
    </div>
    </section>
    <section class="services4" id="services4">
    <div class="box-container">
            <div class="box">
                <h3>Major Service</h3>
                <p>This is similar to a full car service. Some garages do not offer this kind of service as it is already covered by their full car service. For those that do, it includes those items on a full service, plus changing of the spark plug and other automotive components that are subject to wear.</p>
            </div>
            <div class="box-container">
    </section>
    <section class="services5" id="services5">
    <div class="box-container">
            <div class="box">
                <h3>Manufacturer Service</h3>
                <p>This type of car service is the most comprehensive. It is also the most expensive. A manufacturer service will include all the items in the maintenance checklist of your vehicle’s service manual. From the engine and transmission components to the electrical system, cooling system, and exhaust, everything is covered.</p>
            </div>
            <div class="box-container">
    </section>

    
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

            :root{
                --yellow:#f9d806;
                --light-yellow:#ffee80;
                --black:#130f40;
                --light-color:#666;
                --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
                --border:.1rem solid rgba(0,0,0,.1);
            }

            p{
            text-align: justify;
            text-justify: inter-word;
            }


            *{
                font-family: 'Poppins', sans-serif;
                margin:0; padding:0;
                box-sizing: border-box;
                outline: none; border:none;
                text-decoration: none;
                text-transform: capitalize;
                transition: .2s linear;
            }

            html{
                font-size: 62.5%;
                overflow-x: hidden;
                scroll-padding-top: 7rem;
                scroll-behavior: smooth;
            }

            section{
                padding:2rem 9%;
            }

            .heading{
                padding-bottom: 2rem;
                text-align: center;
                font-size: 4.5rem;
                color:var(--black);
            }

            .heading span{
                position: relative;
                z-index: 0;
            }


            .heading span::before{
                content: '';
                position: absolute;
                bottom:1rem; left:0;
                height: 100%;
                width: 100%;
                background: var(--light-yellow);
                z-index: -1;
                clip-path: polygon(0 90%, 100% 80%, 100% 100%, 0% 100%);
            }



            .header{
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: fixed;
                top:0; left:0; right:0;
                padding:3rem 9%;
                z-index: 1000;
                background: #fff;
            }

            .header .logo{
                font-size: 2.5rem;
                color:var(--black);
                font-weight: bold;
            }

            .header .logo span{
                color:var(--yellow);
            }

            .header .navbar a{
                margin:0 1rem;
                font-size: 1.7rem;
                color:var(--black);
            }

            .header .navbar a:hover{
                color:var(--yellow);
            }



            .header.active{
                padding:2rem 9%;
                box-shadow: var(--box-shadow);
            }


            .swiper-pagination-bullet-active{
                background: var(--yellow);
            }
            /* ------------------------------------------------------------- */
            .services .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services .box-container .box:hover{
                background: #C0C0C0;
            }
            .services .box-container .box:hover h3{
                color:#eee;
            }
            .services .box-container .box:hover p{
                color:#eee;
            }
            /* --------------------------------------------------------- */
            .services1 .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services1 .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services1 .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services1 .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services1 .box-container .box:hover{
                background: #C0C0C0;
            }
            .services1 .box-container .box:hover h3{
                color:#eee;
            }
            .services1 .box-container .box:hover p{
                color:#eee;
            }
            /* -------------------------------------------------------- */
            .services2 .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services2 .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services2 .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services2 .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services2 .box-container .box:hover{
                background: #C0C0C0;
            }
            .services2 .box-container .box:hover h3{
                color:#eee;
            }
            .services2 .box-container .box:hover p{
                color:#eee;
            }
            /* -------------------------------------------------------- */
            .services3 .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services3 .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services3 .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services3 .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services3 .box-container .box:hover{
                background: #C0C0C0;
            }
            .services3 .box-container .box:hover h3{
                color:#eee;
            }
            .services3 .box-container .box:hover p{
                color:#eee;
            }
            /* -------------------------------------------------------- */
            .services4 .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services4 .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services4 .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services4 .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services4 .box-container .box:hover{
                background: #C0C0C0;
            }
            .services4 .box-container .box:hover h3{
                color:#eee;
            }
            .services4 .box-container .box:hover p{
                color:#eee;
            }
            /* -------------------------------------------------------- */
            .services5 .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(90rem, 1fr));
                gap:1.5rem;
            }
            .services5 .box-container .box{
                padding:2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                text-align: center;
            }
            .services5 .box-container .box h3{
                font-size: 2.2rem;
                color:var(--black);
            }
            .services5 .box-container .box p{
                line-height: 1.8;
                padding:1rem 0;
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .services5 .box-container .box:hover{
                background: #C0C0C0;
            }
            .services5 .box-container .box:hover h3{
                color:#eee;
            }
            .services5 .box-container .box:hover p{
                color:#eee;
            }
/* -------------------------------------------------------- */
    </style>
 
</body>

</html>