<?php

include 'header.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="Loan Calculator.css">
</head>
<body>






<!-- ----------------------------------------------------- -->



<!--  ---------------------------------------------------- -->


  <form id="loan-form">
      <h1 class="notification is-primary has-text">EMI Calculator</h1>

      <div class="slidecontainer">
      <input type="range" min="100000" max="2000000" value="1000000" step="100000" class="slider" id="amount">  
      </div><br>

      <div class="slidecontainer">
      <input type="range" min="1" max="20" value="10" step="0.1" class="slider" id="interest">
      </div><br>

      <div class="slidecontainer">
      <input type="range" min="1" max="30" value="10" class="slider" id="year">
      </div><br>

      <div class="columns is-multiline">
  
        <div class="column is-12-tablet is-6-desktop is-3-widescreen">
          <div class="notification is-primary has-text">
            <p class="title">Amount: <span id="demo1"></span></p>
          </div>
        </div>

        <div class="column is-12-tablet is-6-desktop is-3-widescreen">
          <div class="notification is-info has-text">
            <p class="title">Interest Rate: <span id="demo2"></span></p>
          </div>
        </div>

        <div class="column is-12-tablet is-6-desktop is-3-widescreen">
          <div class="notification is-link has-text">
            <p class="title">Years: <span id="demo3"></span></p>
          </div>
        </div>

      </div>

      <br><br>
      <div class="control">
      <button class="button is-large is-fullwidth is-primary is-outlined">Calculate</button>
      </div>

                  <!-- RESULTS -->
      <section class="section"> 
        <h1 class="title">Calculated Results</h1>
        <div class="columns is-multiline">
  
          <div class="column is-12-tablet is-6-desktop is-3-widescreen">
            <div class="notification is-primary has-text">
              <p id="monthlyPayment" class="title is-1">₹ </p>
              <p class="subtitle is-4">Monthly Payments</p>
            </div>
          </div>

          <div class="column is-12-tablet is-6-desktop is-3-widescreen">
            <div class="notification is-info has-text">
              <p id="totalInterest" class="title is-1">₹</p>
              <p class="subtitle is-4">Total Interest</p>
            </div>
          </div>

          <div class="column is-12-tablet is-6-desktop is-3-widescreen">
            <div class="notification is-link has-text">
              <p id="totalPayment" class="title is-1">₹ </p>
              <p class="subtitle is-4">Total Amount</p>
            </div>
          </div>

        </div>
      </section>

  </form>
  <script src="Loan Calculator.js"></script>
  
  <style>

  h1
  {
    font-size: 45px;
    text-align: center;
    color: #FFFFFF;
  }
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: white;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
input[type="range"] { 
    margin: auto;
    -webkit-appearance: none;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 0; /* iOS */
}

::-webkit-slider-runnable-track {
    background: #ddd;
}

/*
 * 1. Set to 0 width and remove border for a slider without a thumb
 */
::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 20px; /* 1 */
    height: 40px;
    background: #fff;
    box-shadow: -100vw 0 0 100vw dodgerblue;
    border: 2px solid #999; /* 1 */
}

::-moz-range-track {
    height: 40px;
    background: #ddd;
}

::-moz-range-thumb {
    background: #fff;
    height: 40px;
    width: 20px;
    border: 3px solid #999;
    border-radius: 0 !important;
    box-shadow: -100vw 0 0 100vw dodgerblue;
    box-sizing: border-box;
}

::-ms-fill-lower { 
    background: dodgerblue;
}

::-ms-thumb { 
    background: #fff;
    border: 2px solid #999;
    height: 40px;
    width: 20px;
    box-sizing: border-box;
}

::-ms-ticks-after { 
    display: none; 
}

::-ms-ticks-before { 
    display: none; 
}

::-ms-track { 
    background: #ddd;
    color: transparent;
    height: 40px;
    border: none;
}

::-ms-tooltip { 
    display: none;
}


/* ----------------------------------------------------------------------- */

@import url("https://fonts.googleapis.com/css2?family=Silkscreen&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Rubik+Iso&family=Rubik+Marker+Hatch&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Audiowide&display=swap%27");
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
  
  scroll-behavior: smooth;
}

.scrolled .navbar {
  background-color: rgba(17, 15, 15, 0.967);
}

.scrolled .nav-btn {
  background-color: rgba(255, 255, 255, 0);
}

.scrolleddrk .navbar {
  transition: 2s;
  background-color: #000;
}

.scrolleddrk .nav-contents ul a {
  color: #fff;
}

.scrolleddrk .logo img {
  -webkit-filter: grayscale(0) invert(0);
  filter: grayscale(0) invert(0);
}

.scrolleddrk .nav-btn {
  color: #fff;
  background-color: rgba(0, 0, 0, 0);
}

.navbar {
  display: flex;
  align-items: center;
  padding: 10px 50px;
  /* background: rgb(24, 23, 23); */
  background: #fff;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
  z-index: 99999;
  position: fixed;
  top: 0;
  width: 100%;
  transition: 0.2s all ease-in;
  justify-content: center;
}

.nav-contents {
  flex: 1;
}

.logo img {
  width: 50px;
}

.nav-contents ul {
  margin-left: 5rem;
  display: inline;
}

.nav-contents ul li {
  list-style: none;
  display: inline-block;
  padding: 15px 25px;
  border-radius: 5px;
  transition: 0.2s all ease-in-out;
}

.nav-contents ul a {
  color: #000;
  text-decoration: none;
  font-size: 17px;
  font-weight: 500;
}

.nav-contents ul li:hover {
  color: #f9d806;
}

.nav-btn {
  /* padding: 1rem 1rem; */
  color: #fff;
  border: 0;
  margin-top: 8px;
  font-weight: bold;
  border-radius: 5px;
  background-color: rgba(0, 0, 0, 0);
  cursor: pointer;
  transition: 0.2s all ease-in-out;
}

.nav-btn:hover {
  color: #f9d806;
}

.nav-contents .nav-btn {
  float: right;
}

.install-btn {
  color: #000;
  border: none;
  float: right;
  padding: 0.6rem 1.7rem;
  margin-top: 0.3rem;
  background-color: #ffee80;
  outline: none;
  /* color: #fff; */
  margin-left: 1rem;
  border-radius: 20px;
}

.install-btn:hover {
  color: #000;
  background-color: #f9d806;
}

.btn {
  position: relative;
  display: flex;
  padding: 10px 30px;
  background: transparent;
  color: rgb(10, 8, 8);
  text-decoration: none;
  letter-spacing: 1px;
  overflow: hidden;
  border-radius: 10px;
  transition: 0.2s;
}

.btn span {
  position: relative;
  z-index: 1;
}

/* .btn::before
{
    content: '';
    position: absolute;
    top: var(--y);
    left: var(--x);
    transform: translate(-50%, -50%);
    width: 0px;
    height: 0px;
    border-radius: 50%;
    background: rgba(24, 149, 180, 0.747);
    transition: width 1s, height 1s;
} */

.btn:hover {
  /* From https://css.glass */
  color: rgb(13, 100, 207);
}

.navbar #hehe {
  display: none;
}
/* 
@media (max-width: 1200px) {
  .navbar {
    padding: 10px 30px;
  }

  .bi-list {
    position: absolute;
    right: 20px;
    top: 0px;
  }

  .navbar .bi {
    display: block;
    color: #fff;
    margin: 10px 25px;
    font-size: 22px;
  }

  .navbar #hehe {
    display: block;
  }
  .nav-contents {
    height: 100vh;
    width: 80%;

    background: rgba(13, 13, 13, 0.55);

    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    top: 0;
    right: -100%;
    position: absolute;

    z-index: 999;
    transition: 0.2s;
  }

  .nav-contents ul a {
    display: block;
    color: #bdb5b2;
    font-size: 2rem;
    padding: 10px 30px;
  }

  .nav-contents ul a:hover {
    From https://css.glass
    background: rgba(225, 212, 212, 0.55);

    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    color: rgb(172, 165, 165);
  }

  .nav-contents .nav-btn {
    float: none;
    margin-left: 25px;
    margin-top: 10px;
  }

  .nav-btn {
    background-color: transparent;
    color: white;
  }
  .install-btn {
    visibility: hidden;
  }
} */

.navbar .logo{
  font-size: 2.0rem;
  color: #000;
  font-weight: bold;
  text-decoration: none;
}

.navbar .logo span{
  color:  #f9d806;
}


/* ----------------------------------------------------------------------- */
  </style>

<script>
var slider1 = document.getElementById("amount");
var slider2 = document.getElementById("interest");
var slider3 = document.getElementById("year");
var output1 = document.getElementById("demo1");
var output2 = document.getElementById("demo2");
var output3 = document.getElementById("demo3");

output1.innerHTML = slider1.value;
output2.innerHTML = slider2.value;
output3.innerHTML = slider3.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
  var out1=output1;
}
slider2.oninput = function() {
  output2.innerHTML = this.value;
  var out2=output2;
}
slider3.oninput = function() {
  output3.innerHTML = this.value;
  var out3=output3;
}
document.getElementById("loan-form").addEventListener("submit", computeResults);

function computeResults(e) {  

  const UIamount = slider1.value;
  const UIinterest = slider2.value;
  const UIyears = slider3.value;

  const principal = parseFloat(UIamount);
  const CalculateInterest = parseFloat(UIinterest) / 100 / 12;
  const calculatedPayments = parseFloat(UIyears) * 12;

  //Compute monthly Payment

  const x = Math.pow(1 + CalculateInterest, calculatedPayments);
  const monthly = (principal * x * CalculateInterest) / (x - 1);
  const monthlyPayment = monthly.toFixed(2);

  //Compute Interest

  const totalInterest = (monthly * calculatedPayments - principal).toFixed(2);

  //Compute Total Payment

  const totalPayment = (monthly * calculatedPayments).toFixed(2);

  //Show results

  document.getElementById("monthlyPayment").innerHTML = "₹ " + monthlyPayment;

  document.getElementById("totalInterest").innerHTML = "₹ " + totalInterest;

  document.getElementById("totalPayment").innerHTML = "₹ " + totalPayment;
    e.preventDefault();
}
</script>

</body>
</html>
