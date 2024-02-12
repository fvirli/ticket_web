<?php
include('check_session.php');
?>
<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


    <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    .card-header {
      background-color: #28a745;
      color: #fff;
      font-size: 1.5rem;
    }
    .card-body {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
    }
    #newsChart {
      margin-top: 20px;
    }
    </style>
    <title>Dashboard</title>
</head>
<body>
  
    <nav class="navbar navbar-expand-md navbar-light bg-info">  
        <a class="navbar-brand text-white" href="#" onclick="dashboard()">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class=""nav-item>
                    <a class="nav-link text-white" href="#" onclick="halamanUtama()">Halaman Utama</a>
                </li>
                <li class=""nav-item>
                    <a class="nav-link text-white" href="#" onclick="DataUser()">Data User</a>
                </li>
                <li class=""nav-item>
                    <a class="nav-link text-white" href="#" onclick="DataPembayaran()">Data Pembayaran</a>
                </li>
                <li class=""nav-item>
                    <a class="nav-link text-white" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      function dashboard() {
        window.location.href = 'dashboard.php';
      }
      function halamanUtama() {
        window.location.href = 'index.php';
      }
      function DataUser() {
        window.location.href = 'data_user.php';
      }
      function DataPembayaran() {
        window.location.href = 'data_pembayaran.php';
      }
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const dashboardLink = document.getElementById("dashboardLink");
        const level = localStorage.getItem("level");

        if (level === "admin") {
          
        } else {
          window.location.href = "index.php"
        }
      });
    </script>

</body>