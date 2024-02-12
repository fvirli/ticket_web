<?php
include('check_session.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Pembayaran</h2>

        <form action="#" id="addNewsForm">
            <div class=""form-group>
                <label for="judul">Nama:</label>
                <input type="text" class="form-control" max-length="50" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">NIK:</label>
                <textarea class="form-control" id="nik" name="nik" required></textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi">Nomor HP:</label>
                <textarea class="form-control" id="no_hp" name="no_hp" required></textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi">Kategori:</label>
                <textarea class="form-control" id="kategori" name="kategori" required></textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi">Seating:</label>
                <textarea class="form-control" id="seating" name="seating" required></textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi">Nominal:</label>
                <textarea class="form-control" id="nominal" name="nominal" required></textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi">Quantity:</label>
                <textarea class="form-control" id="quantity" name="quantity" required></textarea>
            </div>

            <button type="button" class="btn btn-primary" onclick="addNews()">Tambah Data</button>
        </form> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                alert(response.data);
                document.getElementById('addNewsForm').reset();
            })
            .catch(function(error) {
                console.error(error);
                alert('Error adding News.');
            });
        }
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const dashboardLink = document.getElementById("dashboardLink");
        const level = localStorage.getItem("level");

        if (level === "admin") {
          
        } else {
          window.location.href = "index.php";
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hanya Admin yang bisa Mengakses Halaman tersebut!'
          });
        }
      });
    </script>
</body>
</html>