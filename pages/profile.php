
<?php
$id = isset($_POST['id']) ? $_POST['id'] : null;
?>

<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
    <style>
        .card-img-top {
            width: 250px;
            height: 200px;
            object-fit: cover;
            margin-left: 20px;
            margin-top:20px;
        }
    </style>
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
                <li><a href="shows-events.php">Shows & Events</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="profile.php" class="active">Profile</a></li>
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

    <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pengaturan Akun</h5>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#profile-menu" data-toggle="collapse">Profile</a>
                    <a class="nav-link" href="#change-password-menu" data-toggle="collapse">Change Password</a>
                </nav>
            </div>
        </div>
        <div class="col-md-9 col-sm-6">
            <div class="card">
                <div class="card-body" id="profile-menu">
                    <div class="row">
                    <input type="hidden" value="<?php echo $id ?>" id="newsId">
                        <div class="col-md-8 col-sm-8">
                        <div class=""form-group>
                            <label for="judul">Username:</label>
                            <input type="text" class="form-control" max-length="50" id="username1" name="username1" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <textarea class="form-control" id="name1" name="name1" required></textarea>
                        </div>
                            <h5 class="card-title mt-3">Ganti Gambar Profil</h5>
                            <input type="file" name="url_image" id="url_image" accept="image/*" class="form-control-file">
                            <button type="submit" class="btn btn-primary mt-3" onclick="editProfile()">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="change-password-menu">
                    <h5 class="card-title">Change Password</h5>
                    <div class=""form-group>
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" max-length="50" id="username" name="username" disabled>
                    </div>
                    <div class=""form-group>
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" max-length="50" id="name" name="name" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">Masukkan Password Baru:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="gantiPassword()">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <script src="../js/dashboard.js"></script>
    <script>
      $(document).ready(function() {
          $('a[href="#profile-menu"]').on('click', function(e) {
              e.preventDefault();
              $('#profile-menu').collapse('show');
              $('#change-password-menu').collapse('hide');
          });

          $('a[href="#change-password-menu"]').on('click', function(e) {
              e.preventDefault();
              $('#change-password-menu').collapse('show');
              $('#profile-menu').collapse('hide');
          });

          $('#profile-menu, #change-password-menu').on('hidden.bs.collapse', function() {
              $(this).prev().find('a').blur();
          });

          $('#profile-menu').collapse('show');

          $('#change-password-menu').collapse('hide');
      });
    </script>
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
      function getData() {
        const formData = new FormData();
        formData.append('nama', localStorage.getItem('nama'));
        document.getElementById('username1').value = localStorage.getItem('username');
        document.getElementById('name1').value = localStorage.getItem('nama');
        document.getElementById('username').value = localStorage.getItem('username');
        document.getElementById('name').value = localStorage.getItem('nama');
    }
    window.onload = getData;
    </script>
    <script>
      function validateImage(file) {
          const allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
          const fileExtension = file.name.split('.').pop().toLowerCase();

          if (!allowedExtensions.includes(fileExtension)) {
              Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Hanya File Gambar JPG, JPEG, PNG, dan WebP yang Diizinkan!'
              });
              return false;
          }
          return true;
      }
        function editProfile() {
        const username = document.getElementById('username1').value;
        const name = document.getElementById('name1').value;
        const urlImageInput = document.getElementById('url_image');
        const url_image = urlImageInput.files[0];

        var formData = new FormData();
        formData.append('username', username);
        formData.append('name', name);

        if (urlImageInput.files.length > 0 && !validateImage(url_image)) {
        return;
        }

        if (urlImageInput.files.length > 0) {
            formData.append('url_image', url_image);
        } else {
            formData.append('url_image', null);
        }
        
        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_user/editprofile.php', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(function(response) {
            console.log(response.data);
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Profil Berhasil Diganti!'
            });
            window.location.reload();
        })
        .catch(function(error) {
            console.error(error);
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Gagal Mengedit Profil!. Coba Lagi'
            });
        });
    }
    
    function gantiPassword() {
        const username = document.getElementById('username').value;
        const name = document.getElementById('name').value;
        const password = document.getElementById('password');

        var formData = new FormData();
        formData.append('username', username);
        formData.append('name', name);
        formData.append('pwd', password);

        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_user/editpasswordprofile.php', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(function(response) {
            console.log(response.data);
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Password Berhasil Diganti!'
            });
        })
        .catch(function(error) {
            console.error(error);
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Gagal Mengganti Password!. Coba Lagi'
            });
        });
    }
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