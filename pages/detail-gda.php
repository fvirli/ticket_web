<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows & Events</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>
<body>

<header class="header-area header-sticky" xframeoptions="SAMEORIGIN" frameancestors="'self'">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <a href="../index.php" class="logo">Con<em>Xibition</em></a>
              <ul class="nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="shows-events.php" class="active">Shows & Events</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li id="dashboardLink">Dashboard</li>
                <li><a href="../login.php" onclick="logout()">Logout</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="page-heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>GOLDEN DISC AWARDS (GDA) 2024</h2>
                    <span>January 6, 2024 in Jakarta International Stadium</span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="../images/gda.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <div class="about-map-image">
                            <img src="../images/jis.png" alt="location">
                        </div>
                        <div class="down-content">
                            <h4>GOLDEN DISC AWARD 2024</h4>
                            <ul>
                                <li>January 6 Saturday</li>
                                <li>06:30 PM</li>
                            </ul>
                            <span><i class="fa fa-ticket"></i> Tickets Starting From IDR 1.325.000</span>
                            <div class="main-dark-button">
                                <a href="ticket-gda.php">Purchase Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-upcoming-shows">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>About The Upcoming Show</h2>
                    <p>
                    Golden Disc Awards ke-38 dengan Bank Mandiri akan membawa deretan bintang musik Korea, artis solo, dan bahkan bintang film sebagai pembawa acara dan presenter ke Indonesia, memberikan penggemar pertunjukan selama 4 jam yang akan menjadi pengalaman tak terlupakan.
                    </p>
                    <h4>Information</h4>
                    <ul>
                        <li>* General Sales dimulai pada 1 Desember 2023</li>
                        <li>* Maks. pembelian 2 tiket per akun/ID per show day.</li>
                        <li>* Semua penonton berusia 18 tahun ke atas wajib sudah mendapatkan vaksinasi booster.</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="next-shows">
                        <h4><i class="fa fa-clock-o"></i> Get The Next Show Tickets</h4>
                        <ul>
                            <li>
                                <h5>SHOW WHAT I HAVE - IVE</h5>
                                <span>August 24 Saturday <br>06:30 PM</span>
                                <div class="icon-button">
                                    <a href="ticket-ive.php">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <h5>BREAK THE BRAKE - XTRAORDINARY</h5>
                                <span>March 2 Saturday<br>07:00 PM</span>
                                <div class="icon-button">
                                    <a href="ticket-xd.php">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
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
    <script src="../js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
            window.location.href = '../login.php';
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
            localStorage.setItem('nama', nama);
          } else {
            window.location.href = '../login.php';
          }
        })
        .catch(error => {
          console.error('Error Checking Session:', error);
        });
      }
      checkSession();
    </script><script>
    document.addEventListener("DOMContentLoaded", function () {
    const dashboardLink = document.getElementById("dashboardLink");
    const level = localStorage.getItem("level");

    if (level === "admin") {
        dashboardLink.innerHTML = '<a href="../dashboard.php">Dashboard</a>';
    } else {
        dashboardLink.innerHTML = "";
    }
    });
    </script>
</body>