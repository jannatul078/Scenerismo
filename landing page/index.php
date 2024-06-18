<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scenerismo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style2.css">

    <script>
        window.onscroll = function() 
        {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 10) {
                navbar.style.backgroundColor = 'rgba(51, 51, 51, 0.9)';
            } else {
                navbar.style.backgroundColor = 'rgba(51, 51, 51, 0.7)';
            }
        };
    
        function changeLanguage(langCode) 
        {
            fetch('../language/es.json')
                .then(response => response.json())
                .then(data => {
                    console.log('Language file loaded successfully:', data);
                    updateContent(data);
                })
                .catch(error => console.error('Error loading language file:', error));
        }
        changeLanguage('es');
    </script>
    
</head>
<body>
    <div class="container">
        <video autoplay loop muted play-inline>
            <source src="video1.mp4" type="video/mp4">
        </video>
        <div class="navbar">
            <div id="dropdown">
                <a href="#">Select Language</a>
                <div class="dropdown-content">
                    <a href="#" onclick="changeLanguage('es')">Spanish</a>
                    <a href="#">French</a>
                    <a href="#">Portuguese</a>
                    <a href="#">Italian</a>
                    <a href="#">Russian</a>
                </div>
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="../Hotel Booking/index.html">Hotel Booking</a>
                <a href="../transport booking/index.html">Transport Booking</a>
                <a href="#">Tour Planner</a>
                <a href="#contact">Contact Us</a>
                <a class="right-buttons" href="#">Login</a>
                <a class="right-buttons" href="#">Register</a>
                <a class="search-icon" href="#"><i class="fa fa-search" style="color: #ffffff;"></i></i></a>
            </div>
        </div>
        <img class="logo" src="logo2.svg">

        <div class="book" id="book">
            <div class="head">
                <h1>Book <span>Your Place</span></h1>
            </div>
            <div class="booking">
                <img src="book.jpg" alt="">
                <div class="form">
                    <h2>Book Your Place Now</h2>
                    <p>Select Your Destination
                    </p>
                    <input type="text" placeholder="Where you want to go">
                    <p>Member's</p>
                    <input type="number" value="1">
                    <p>Journey Starts On</p>
                    <input type="date">
                    <p>Journey Ends On</p>
                    <input type="date">
                    <button class="btn" id="submit">Submit</button>
                </div>
            </div>
        </div>

        <div class="pack" id="package">
            <div class="head">
                <h1>Best <span>Packages</span></h1>
            </div>
            <div class="packages">
                <div class="card">
                    <img src="plan1.jpg" alt="">
                    <h3>Cox's Bazar</h3>
                    <p>2 Week Tour</p>
                    <p>70,000 Only</p>
                </div>
                <div class="card">
                    <img src="plan2.jpg" alt="">
                    <h3>Maldives</h3>
                    <p>1 Week Tour</p>
                    <p>500,000 Only</p>
                </div>
                <div class="card">
                    <img src="plan3.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p>
                </div>
                <div class="card">
                    <img src="plan3.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p>
                </div>
                <div class="card">
                    <img src="plan3.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p>
                </div>
                <div class="card">
                    <img src="plan3.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p>
                </div>
            </div>
        </div>

        <div class="best" id="place">
            <div class="head">
                <h1>Explore <span>Best Palces</span></h1>
            </div>
            <div class="places">
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
                <div class="placecard">
                    <img src="betplc1.jpg" alt="">
                    <h3>Singapore</h3>
                    <p>4 Days Tour</p>
                    <p>300,000 Only</p> 
                </div>
            </div>
        </div>

        <div class="connect" id="contact">
            <div class="head">
                <h1>Contact <span>Us</span></h1>
            </div>
            <div class="contact">
                <img src="contact.jpg" alt="">
                <div class="contactform">
                    <p>Name</p>
                    <input type="text" placeholder="Enter You Name">
                    <p>Email</p>
                    <input type="text" placeholder="Enter Your Email">
                    <button>Connect</button>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="text">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, fugit!</p>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <div class="text">
                <h3>Tour</h3>
                <p>Quality</p>
                <p>Price</p>
                <p>Affordable</p>
                <p>Exchange</p>
            </div>
            <div class="text">
                <h3>Country</h3>
                <p>Region</p>
                <p>Hotel</p>
                <p>Point of Interest</p>
                <p>Airports</p>
            </div>
            <div class="text">
                <h3>Car Hire</h3>
                <p>Flight Finder</p>
                <p>Tour Planer</p>
                <p>Hotel Booking</p>
                <p>Tour guide</p>
            </div>
        </div>
    </div>

    <script>
        window.onscroll = function() 
        {
          var navbar = document.getElementsByClassName('navbar');
          if (window.scrollY > 10) {
            navbar.style.backgroundColor = 'rgba(51, 51, 51, 0.9)';
          } else {
            navbar.style.backgroundColor = 'rgba(51, 51, 51, 0.7)';
          }
        };

        function changeLanguage(langCode) 
        {
            loadLanguage('es.json');
        }
      </script>
</body>
</html>