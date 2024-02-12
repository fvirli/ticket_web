<?php
include('header.php');
include('check_session.php');

$id = isset($_POST['id']) ? $_POST['id'] : null;
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
<div class="container mt-5">
    <h2 class="mb-4">Add News Form</h2>

    <form id="addNewsForm">
    <input type="hidden" value="<?php echo $id ?>" id="newsId">
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

        <button type="button" class="btn btn-primary" onclick="editNews()">Edit News</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function getData() {
        const newsId = document.getElementById('newsId').value;
        var formData = new FormData();
        formData.append('idnews', newsId);

        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_pembayaran/selectdatapembayaran.php', formData)
            .then(function(response) {
                document.getElementById('nama').value = response.data.nama;
                document.getElementById('nik').value = response.data.nik;
                document.getElementById('no_hp').value = response.data.no_hp;
                document.getElementById('seating').value = response.data.seating;
                document.getElementById('nominal').value = response.data.nominal;
                document.getElementById('quantity').value = response.data.quantity;
            })
            .catch(function(error) {
                console.error(error);
                alert('Error fetching news data.');
            });
    }
    
    function editNews() {
        const newsId = document.getElementById('newsId').value;
        const nama = document.getElementById('nama').value;
        const nik = document.getElementById('nik').value;
        const no_hp = document.getElementById('no_hp').value;
        const seating = document.getElementById('seating').value;
        const nominal = document.getElementById('nominal').value;
        const quantity = document.getElementById('quantity').value;
        const tanggal = new Date().toISOString().split('T')[0];

        var formData = new FormData();
        formData.append('idnews', newsId);
        formData.append('nama', nama);
        formData.append('nik', nik);
        formData.append('no_hp', no_hp);
        formData.append('seating', seating);
        formData.append('nominal', nominal);
        formData.append('quantity', quantity);
        formData.append('tanggal', tanggal);
        
        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_pembayaran/editpembayaran.php', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(function(response) {
            console.log(response.data);
            alert(response.data);
            window.location.href = 'data_pembayaran.php';
        })
        .catch(function(error) {
            console.error(error);
            alert('Error editing News.');
        });
    }
    window.onload = getData;

</script>
<script>
      document.addEventListener("DOMContentLoaded", function () {
        const dashboardLink = document.getElementById("dashboardLink");
        const level = localStorage.getItem("level");

        if (level === "admin") {
          
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hanya Admin yang bisa Mengakses Halaman tersebut!'
          });
          window.location.href = "index.php"
        }
      });
    </script>