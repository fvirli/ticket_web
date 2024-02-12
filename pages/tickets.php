<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>
<body>

<header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <a href="../index.php" class="logo">Con<em>Xibition</em></a>
              <ul class="nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="shows-events.php">Shows & Events</a></li>
                <li><a href="tickets.php" class="active">Tickets</a></li>
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

    <div class="shows-events-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="heading"><h2>Upcoming</h2></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="heading-sidebar">
                                                            <h4>Sort The Upcoming Shows & Events By:</h4>
                                                        </div>
                                                        <div class="search-bar">
                                                            <input type="text" id="search-input" onkeyup="searchEventItems()" placeholder="Search for events...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="month">
                                                            <h6>Month</h6>
                                                            <ul>
                                                                <li><a href="#">January</a></li>
                                                                <li><a href="#">March</a></li>
                                                                <li><a href="#">August</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="category">
                                                            <h6>Category</h6>
                                                            <ul>
                                                                <li><a href="#">Pop Music</a></li>
                                                                <li><a href="#">Rock Music</a></li>
                                                                <li><a href="#">K-Pop</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="venues">
                                                            <h6>Venues</h6>
                                                            <ul>
                                                                <li><a href="#">ICE BSD CITY</a></li>
                                                                <li><a href="#">The Kasablanka Hall</a></li>
                                                                <li><a href="#">Jakarta International Stadium</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="event-item">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="left-content">
                                                                    <h4>SHOW WHAT I HAVE - IVE</h4>
                                                                    <p>IDR 1.225.000 - IDR 3.225.000</p>
                                                                    <div class="main-dark-button"><a href="ticket-ive.php">Purchase Ticket</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="thumb">
                                                                    <img src="../images/swih.webp" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <h6>Sep 24 Friday<br>07:00 PM</h6>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>ICE BSD CITY HALL 5-6</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-users"></i>
                                                                            <span>Kapasitas : 5.000 - 18.000</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="event-item">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="left-content">
                                                                    <h4>BREAK THE BRAKE - XDINARY HEROES</h4>
                                                                    <p>IDR 1.125.000 - IDR 2.425.000</p>
                                                                    <div class="main-dark-button"><a href="ticket-xd.php">Purchase Ticket</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="thumb">
                                                                    <img src="../images/btb.webp" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <h6>Mar 02 Saturday<br>06:30 PM</h6>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>The Kasablanka Hall</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-users"></i>
                                                                            <span>Kapasitas : 5500</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="event-item">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="left-content">
                                                                    <h4>THE 38th GOLDEN DISC AWARD (GDA) 2024</h4>
                                                                    <p>IDR 1.300.000 - IDR 6.000.000</p>
                                                                    <div class="main-dark-button"><a href="ticket-gda.php">Purchase Ticket</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="thumb">
                                                                    <img src="../images/gda-hz.jpeg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="fa fa-clock-o"></i>
                                                                            <h6>Jan 06 Saturday<br>06:30 PM</h6>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <span>Jakarta International Stadium</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-users"></i>
                                                                            <span>Kapasitas : 35.000</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="pagination">
                                                        <ul>
                                                            <li><a href="#">Prev</a></li>
                                                            <li class="active"><a href="#">1</a></li>
                                                            <li><a href="#">2</a></li>
                                                            <li><a href="#">3</a></li>
                                                            <li><a href="#">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>                              
                            </section>
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
    <script src="../js/dashboard.js"></script>
    <script src="../js/search.js"></script>
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
    </script>
    <script>
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