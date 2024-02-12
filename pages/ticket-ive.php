<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tickets</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
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

    <div class="ticket-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="../images/swih-lg.webp" alt="">
                    </div>
                    <div class="left-image">
                        <img src="../images/swih-seat.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>SHOW WHAT I HAVE - IVE</h4>
                        <span>ICE BSD CITY HALL 5-6</span>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Saturday 07:00 PM</li>
                            <li><i class="fa fa-map-marker"></i>ICE BSD CITY HALL 5-6, Kapasitas 5.000-18.000</li>
                        </ul>
                        <div class="quantity-content" data-category-id="1">
                            <div class="left-content">
                                <h6 id="category-name-1">GRAY A</h6>
                                <p id="ticket-price-1">Rp. 1.225.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="1">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="2">
                            <div class="left-content">
                                <h6 id="category-name-2">GRAY B</h6>
                                <p id="ticket-price-2">Rp. 1.225.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="2">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="3">
                            <div class="left-content">
                                <h6 id="category-name-3">ORANGE</h6>
                                <p id="ticket-price-3">Rp. 1.825.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="3">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="4">
                            <div class="left-content">
                                <h6 id="category-name-4">YELLOW</h6>
                                <p id="ticket-price-4">Rp. 2.225.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="4">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="5">
                            <div class="left-content">
                                <h6 id="category-name-5">GREEN A</h6>
                                <p id="ticket-price-5">Rp. 2.425.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="5">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="6">
                            <div class="left-content">
                                <h6 id="category-name-6">GREEN B</h6>
                                <p id="ticket-price-6">Rp. 2.425.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="6">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="7">
                            <div class="left-content">
                                <h6 id="category-name-7">PINK A</h6>
                                <p id="ticket-price-7">Rp. 2.725.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="7">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="8">
                            <div class="left-content">
                                <h6 id="category-name-8">PINK B</h6>
                                <p id="ticket-price-8">Rp. 2.725.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="8">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="9">
                            <div class="left-content">
                                <h6 id="category-name-9">BLUE A</h6>
                                <p id="ticket-price-9">Rp. 2.925.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="9">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="10">
                            <div class="left-content">
                                <h6 id="category-name-10">BLUE B</h6>
                                <p id="ticket-price-10">Rp. 2.925.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="10">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="11">
                            <div class="left-content">
                                <h6 id="category-name-11">BLUE A (SOUNDCHECK)</h6>
                                <p id="ticket-price-11">Rp. 3.225.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="11">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>
                        <div class="quantity-content" data-category-id="12">
                            <div class="left-content">
                                <h6 id="category-name-12">BLUE A (SOUNDCHECK)</h6>
                                <p id="ticket-price-12">Rp. 3.225.000</p>
                            </div>
                            <div class="right-content">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseTicketsModal" data-category-id="12">
                                Purchase Tickets
                            </button>
                            </div>
                        </div>

                        <div class="warn">
                            <p>*You Can Only Buy 2 Tickets For One Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="purchaseTicketsModal" tabindex="-1" aria-labelledby="purchaseTicketsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="purchaseTicketsModalLabel">Purchase Tickets</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <input type="hidden" class="form-control" id="categoryId">
                    <div class="mb-3">
                        <label for="text" class="col-form-label">Seating:</label>
                        <input type="text" class="form-control" id="seating" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="col-form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="col-form-label">Nomor NIK:</label>
                        <input type="text" class="form-control" id="nik">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="col-form-label">Nomor HP:</label>
                        <input type="text" class="form-control" id="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="col-form-label">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" min="1" max="2">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="col-form-label">Total Harga:</label>
                        <input type="text" class="form-control" id="nominal" disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addNews()">Purchase</button>
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
    function getCategoryName(categoryId) {
    const categories = {
      1: "GRAY A - IVE",
      2: "GRAY B - IVE",
      3: "ORANGE - IVE",
      4: "YELLOW - IVE",
      5: "GREEN A - IVE",
      6: "GREEN B - IVE",
      7: "PINK A - IVE",
      8: "PINK B - IVE",
      9: "BLUE A - IVE",
      10: "BLUE B - IVE",
      11: "BLUE A (SOUNDCHECK) - IVE",
      12: "BLUE B (SOUNDCHECK) - IVE",
    };

    return categories[categoryId];
  }

  function getTicketPrice(categoryId) {
    const prices = {
      1: "1225000", // Removed formatting for calculations
      2: "1225000",
      3: "1825000",
      4: "2225000",
      5: "2425000",
      6: "2425000",
      7: "2725000",
      8: "2725000",
      9: "2925000",
      10: "2925000",
      11: "3225000",
      12: "3225000",
    };

    return prices[categoryId];
  }

  // Get all quantity content divs
  const quantityContents = document.querySelectorAll(".quantity-content");

  // Loop through all quantity content divs
  quantityContents.forEach((quantityContent, index) => {
    // Get category name and ticket price based on index
    const categoryName = getCategoryName(index + 1);
    const ticketPrice = getTicketPrice(index + 1);

    // Set category name and ticket price
    const categoryNameElement = quantityContent.querySelector("#category-name-" + (index + 1));
    const ticketPriceElement = quantityContent.querySelector("#ticket-price-" + (index + 1));

    categoryNameElement.innerText = categoryName;
    ticketPriceElement.innerText = ticketPrice;

    // Set onclick event for purchase button
    const purchaseButtons = quantityContent.querySelectorAll("button");
    purchaseButtons.forEach((button, index) => {
      button.onclick = (event) => {
        // Set seating value
        const seatingInput = document.getElementById("seating");
        seatingInput.value = getCategoryName(button.dataset.categoryId);

        // Set nominal value
        const nominalInput = document.getElementById("nominal");
        nominalInput.value = getTicketPrice(index + 1) * parseInt(document.getElementById("quantity").value);

        // Get the ID of the clicked button
        const modalId = event.target.getAttribute("data-target").split("#")[1];

        // Show purchase tickets modal
        const purchaseTicketsModal = new bootstrap.Modal(document.getElementById(modalId));
        purchaseTicketsModal.show();
      };
    });
  });

    // ...

    // Calculate total price based on category and quantity
    function calculateTotalPrice() {
    const categoryId = document.getElementById("categoryId").value;
    const quantity = document.getElementById("quantity").value;
    const ticketPrice = getTicketPrice(categoryId);
    const totalPrice = ticketPrice * quantity;

    document.getElementById("nominal").value = formatRupiah(totalPrice);
  }

    function formatRupiah(number) {
      return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
      }).format(number);
    }

    // Add an event listener to the quantity input
    document.getElementById("quantity").addEventListener("input", calculateTotalPrice);

    // Call the function initially to display the total price for the selected category
    calculateTotalPrice();

    </script>
    <script>
    document.querySelectorAll('.btn-primary').forEach((button) => {
      button.addEventListener('click', () => {
        const categoryId = button.getAttribute('data-category-id');
        document.getElementById('categoryId').value = categoryId;
      });
    });
    </script>
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
    <script>
        function addNews() {
            const nama = document.getElementById('nama').value;
            const nik = document.getElementById('nik').value;
            const no_hp = document.getElementById('no_hp').value;
            const seating = document.getElementById('seating').value;
            const nominal = document.getElementById('nominal').value;
            const quantity = document.getElementById('quantity').value;
            const tanggal = new Date().toISOString().split('T')[0];

            var formData = new FormData();
            formData.append('nama', nama);
            formData.append('nik', nik);
            formData.append('no_hp', no_hp);
            formData.append('seating', seating);
            formData.append('nominal', nominal);
            formData.append('quantity', quantity);
            formData.append('tanggal', tanggal);

            axios.post('https://client-server-fadhilah.000webhostapp.com/crud_pembayaran/tambahpembayaran.php', formData, {
                headers: {
                    'Content-Type' : 'multipart/form-data',
                },
            })
            .then(function(response) {
                console.log(response.data);
                console.log(formData);
                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: 'Pembelian Tiket Berhasil!'
                });
            })
            .catch(function(error) {
                console.error(error);
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Gagal Membeli Tiket!'
                });
            });
        }
    </script>
<body>