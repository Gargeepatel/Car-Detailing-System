<?php 

include 'config.php';

session_start();


if (isset( $_SESSION['username'])) {
  $currentuser = $_SESSION['username'];
}

elseif (isset( $_SESSION['ownername'])) {
  $currentuser = $_SESSION['ownername']."*Owner";
}
else{
  $currentuser = "GUEST";
}

?>

<html oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <script
      src="https://kit.fontawesome.com/077a52c5d8.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <div class="whole" >
      <div class="navbar" id="navbar">
        <!-- <div class="logo"><img src="images/logo.png" alt="MATREEX" /></div> -->

        <a href="#" class="logo"> <span>Scar</span>Drive </a>
        <div class="nav-contents" id="nav-content">
          <i
            id="hehe"
            class="bi bi-x"
            onclick="navmenuoff()"
            style="color: #fff; font-size: 2rem"
          ></i>
          <ul>
            <a href="home.php"><li>HOME</li></a>
            <a href="EMI.php"><li>EMI</li></a>
            <a href="cars.php"><li>CARS</li></a>
            <a href="comparision/index.html"><li>COMPARISION</li></a>
            <a href="wishlisted.php"><li>WISH LIST</li></a>
            <a href="logout.php"><button class="install-btn"><?php echo "$currentuser" ?></button></a>
            <button type="button" class="nav-btn">
              <i class="bi bi-person" id="" style="font-size: 2rem"></i>
            </button>
          </ul>
        </div>
                <i
          id="hehe"
          class="bi bi-list"
          onclick="navmenuon()"
          style="font-size: 2rem; margin-top: 17px; color: #fff"
        ></i>
      </div>

      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>



   
          <!--------------------On scroll navbar start-------------------->

      <script src="./styles/scripts/navbar.js"></script>
    </div>
    
  </body>
<style>
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
  padding: 0.8rem 2.0rem;
  margin-top: 1.0rem;
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

  </style>
</html>



