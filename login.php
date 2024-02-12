<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login1.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
  </head>
  <body>
    <section class="container forms">
      <div class="form login">
        <div class="form-content">
          <header>Login</header>
          <form name ="form" action="">
            <div class="field input-field">
              <input type="text" id="username" name="username" placeholder="Username"class="input" />
            </div>

            <div class="field input-field">
              <input type="password" id="password" name="password" placeholder="Password" class="password" />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <div class="field button-field">
              <button type="button" onclick="login()" name="submit">Login</button>
            </div>
          </form>

          <div class="form-link">
            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
          </div>
        </div>
      </div>

      <div class="form signup">
        <div class="form-content">
          <header>Signup</header>
          <form action="#">
            <div class="field input-field">
              <input type="text" id="name1" name="name1" placeholder="Name" class="input" />
            </div>

            <div class="field input-field">
            <input type="text" id="username1" name="username1" placeholder="Username" class="input">
            </div>

            <div class="field input-field">
              <input type="password" id="password1" name="password1" placeholder="Create password" class="password" />
            </div>

            <div class="field input-field">
              <input type="password" placeholder="Confirm password" class="password" />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <div class="field button-field">
              <button type="button" onclick="register()">Register</button>
            </div>
          </form>

          <div class="form-link">
            <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
          </div>
        </div>
      </div>
    </section>

    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      let loginAttempts = 0;
let lastLoginAttempt = 0;

function login() {
  const currentTime = new Date().getTime();

  if (currentTime - lastLoginAttempt < 5000) {
    //Jika waktu antara kali login yang gagal kurang dari 5 detik, blokir login
    Swal.fire({
      icon: 'error',
      title: 'Login failed',
      text: 'Please wait for 5 seconds before trying again.',
    });
    return;
  }

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  const formData = new FormData();
  formData.append('user', username);
  formData.append('pwd', password);

  axios.post('https://client-server-fadhilah.000webhostapp.com/login.php', formData)
    .then(response => {
      console.log(response);
      //handle respon dari server
      if (response.data.status == 'success') {
        //jika login berhasil, buka dashboard
        const sessionToken = response.data.session_token;
        var sesi = localStorage.setItem('session_token', sessionToken);
        const level = response.data.level;
        var role = localStorage.setItem('level', level);
        console.log(response.data);
        window.location.href= 'index.php';
      } else {
        //Jika login gagal, tampilkan pesan kesalahan 
        loginAttempts++;
        if (loginAttempts >= 3) {
          //Jika login gagal lebih dari 3x, refresh halaman
          window.location.reload();
        } else {
          alert('Login failed. Please check your credentials.');
        }
      }
    })
    .catch(error => {
      //hadle kesalahan koneksi atau server
      console.error('Error during login:', error);
    });
    lastLoginAttempt = currentTime;
    
    }

      function register() {
      const username = document.getElementById('username1').value;
      const password = document.getElementById('password1').value;
      const name = document.getElementById('name1').value;

      if (username.length < 9) {
        Swal.fire({
          icon: 'error',
          title: 'Invalid username',
          text: 'Username must be longer than 8 characters.',
        });
        return;
      }

      if (password.length < 8) {
        Swal.fire({
          icon: 'error',
          title: 'Invalid password',
          text: 'Password must be at least 8 characters long.',
        });
        return;
      }

      const formData = new FormData();
      formData.append('username', username);
      formData.append('pwd', password);
      formData.append('name', name);

      axios.post('https://client-server-fadhilah.000webhostapp.com/register.php', formData)
        .then(response => {
          console.log(response);
        //handle response from server
        if (response.data.status == 'success') {
        console.log(response.data);
        console.log(formData);
        Swal.fire({
        icon: 'success',
        title: 'Registration successful',
        text: 'Please login to continue.',
        });
        } else {
        //if registration fails, show error message
        Swal.fire({
        icon: 'error',
        title: 'Registration failed',
        text: 'Please check your input.',
        });
        }
        })
        .catch(error => {
        //handle connection or server errors
        console.error('Error during registration:', error);
        });
      }
    </script>
  </body>
</html>
