<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
    <header class="header-area header-sticky" xframeoptions="SAMEORIGIN" frameancestors="'self'">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <a href="index.php" class="logo">Con<em>Xibition</em></a>
              <ul class="nav">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="pages/shows-events.php">Shows & Events</a></li>
                <li><a href="pages/tickets.php">Tickets</a></li>
                <li><a href="pages/profile.php">Profile</a></li>
                <li id="dashboardLink">Dashboard</li>
                <li><a href="login.php" onclick="logout()">Logout</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <h6>CONXIBITION</h6>
              <h2>DO YOU WANT TO EXPLORE?</h2>
              <div class="main-white-button">
                <a href="#venue-tickets">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="venue-tickets" id="venue-tickets">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Our Venues & Tickets</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="venue-item">
              <div class="thumb">
                <img src="images/swih.webp" alt="" />
              </div>
              <div class="down-content">
                <div class="left-content">
                  <div class="main-white-button">
                    <a href="ticket-ive.php">Purchase Tickets</a>
                  </div>
                </div>
                <div class="right-content">
                  <h4>SHOW WHAT I HAVE - IVE</h4>
                  <p>Saksikan grup K-pop ikonik, IVE ke Jakarta untuk konser perdana mereka, "IVE THE 1ST WORLD TOUR <SHOW WHAT i HAVE> IN JAKARTA"!
Konser akan berlangsung pada 24 Agustus 2024 di ICE BSD City Hall 5-6.</p>
                  <ul>
                    <li></i>Kapasitas : 5.000-18.000</li>
                  </ul>
                  <div class="price">
                    <span>1 Ticket<br />from <em>IDR 1.225.000</em></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="venue-item">
              <div class="thumb">
                <img src="images/btb.webp" alt="" />
              </div>
              <div class="down-content">
                <div class="left-content">
                  <div class="main-white-button">
                    <a href="ticket-xd.php">Purchase Tickets</a>
                  </div>
                </div>
                <div class="right-content">
                  <h4>BREAK THE BRAKE - XDINARY HEROES</h4>
                  <p>Nonton langsung band rock ikonik dari Korea Selatan, XDINARY HEROES lewat tur mereka, "XDINARY HEROES (Break the Brake) WORLD TOUR IN JAKARTA”!
Konser akan berlangsung di The Kasablanka Hall, Jakarta pada 2 Maret 2024.</p>
                  <ul>
                    <li></i>Kapasitas : 5500</li>
                  </ul>
                  <div class="price">
                    <span>1 Ticket<br />from <em>IDR 1.125.000</em></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="venue-item">
              <div class="thumb">
                <img src="images/gda-bg.jpeg" alt="" />
              </div>
              <div class="down-content">
                <div class="left-content">
                  <div class="main-white-button">
                    <a href="ticket-gda.php">Purchase Tickets</a>
                  </div>
                </div>
                <div class="right-content">
                  <h4>THE 38th GOLDEN DISC AWARD (GDA) 2024</h4>
                  <p>Setelah sebelumnya diadakan di Seoul, Jepang, Cina, dan yang terbaru di Thailand, Golden Disc Awards ke-38 kini membuat debutnya di Jakarta, Indonesia, mencatat tonggak sejarah sebagai upacara penghargaan Korea pertama yang diadakan di Indonesia. Golden Disc Awards ke-38 dengan Bank Mandiri akan membawa deretan bintang musik Korea, artis solo, dan bahkan bintang film sebagai pembawa acara dan presenter ke Indonesia, memberikan penggemar pertunjukan selama 4 jam yang akan menjadi pengalaman tak terlupakan.</p>
                  <ul>
                    <li></i>Kapasitas : 35.000</li>
                  </ul>
                  <div class="price">
                    <span>1 Ticket<br />from <em>IDR 1.300.000</em></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="coming-events">
      <div class="left-button">
        <div class="main-white-button">
          <a href="#">Discover More</a>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="event-item">
              <div class="thumb">
                <a href="#"><img src="images/jis.webp" alt="" /></a>
              </div>
              <div class="down-content">
                <a href="#"><h4>Jakarta International Stadium</h4></a>
                <ul>
                  <li><i class="fa fa-map-marker"></i> Papanggo, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="event-item">
              <div class="thumb">
                <a href="#"><img src="images/kasablanka.jpg" alt="" /></a>
              </div>
              <div class="down-content">
                <a href="#"><h4>Kasablanka Hall</h4></a>
                <ul>
                  <li><i class="fa fa-map-marker"></i>Kota Kasablanka Lt. 3, Jl. Casablanca Raya kav. 88, RT.3/RW.14, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="event-item">
              <div class="thumb">
                <a href="#"><img src="images/ice-bsd.jpg" alt="" /></a>
              </div>
              <div class="down-content">
                <a href="#"><h4>ICE BSD CITY</h4></a>
                <ul>
                  <li><i class="fa fa-map-marker"></i>Kec. Pagedangan, Kabupaten Tangerang, Banten 15339</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
          <div class="col-lg-12">
            <div class="sub-footer">
              <div class="row">
                <div class="col-lg-3">
                  <div class="logo">
                    <span>Con<em>Xibition</em></span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <h6>@Copyright By 21552011130_Kelompok4_TIFRP221PA_UASWEB1</h6>
                </div>
                <div class="col-lg-3">
                  <div class="social-links">
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script>
      function logout() {
        
        const sessionToken = localStorage.getItem('session_token');

        localStorage.removeItem('nama');

        const formData = new FormData();
        formData.append('session_token', sessionToken);

        axios.post('https://client-server-fadhilah.000webhostapp.com/logout.php', formData)
        .then(response => {
          if (response.data.status == 'success') {
            localStorage.removeItem('nama');
            localStorage.removeItem('session_token');
            window.location.href = 'login.php';
          } else {
            alert('Logout Failed. Please Try Again. ');
          }
        })
        .catch(error => {
          console.error('Error during logout:', error);
        });
      }
    </script>
    <script>
      function checkSession() {
        const formData = new FormData();
        formData.append('session_token', localStorage.getItem('session_token'));

        axios.post('https://client-server-fadhilah.000webhostapp.com/session.php', formData)
        .then(response => {
          console.log(response);
          if (response.data.status === 'success') {
            const nama = response.data.hasil.name || 'Default Name';
            const username = response.data.hasil.username || 'Default Name';
            localStorage.setItem('nama', nama);
            localStorage.setItem('username', username);
          } else {
            window.location.href = 'login.php';
          }
        })
        .catch(error => {
          console.error('Error Checking Session:', error);
        });
      }
      checkSession();
    </script>
</body>
</html>