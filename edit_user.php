<?php
include('check_session.php');
include('header.php');

$id = isset($_POST['id']) ? $_POST['id'] : null;
?>
<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form User</h2>

        <form action="#" id="addNewsForm">
        <input type="hidden" value="<?php echo $id ?>" id="newsId">
            <div class=""form-group>
                <label for="judul">Username:</label>
                <input type="text" class="form-control" max-length="50" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <textarea class="form-control" id="name" name="name" required></textarea>
            </div>

            <div class="form-group">
                <label for="level">Role:</label>
                <textarea class="form-control" id="level" name="level" required></textarea>
            </div>

            <div class="form-group">
                <label for="url_image">Image:</label>
                <input type="file" class="form-control-file" id="url_image" name="url_image" accept="image/*" required>
            </div>

            <button type="button" class="btn btn-primary" onclick="editUser()">Edit Data</button>
        </form> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    function getData() {
        const newsId = document.getElementById('newsId').value;
        var formData = new FormData();
        formData.append('idnews', newsId);

        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_user/selectdatauser.php', formData)
            .then(function(response) {
                document.getElementById('username').value = response.data.username;
                document.getElementById('name').value = response.data.name;
                document.getElementById('level').value = response.data.level;
            })
            .catch(function(error) {
                console.error(error);
                alert('Error fetching news data.');
            });
    }
    
    function editUser() {
        const newsId = document.getElementById('newsId').value;
        const username = document.getElementById('username').value;
        const name = document.getElementById('name').value;
        const level = document.getElementById('level').value;
        const urlImageInput = document.getElementById('url_image');
        const url_image = urlImageInput.files[0];

        var formData = new FormData();
        formData.append('idnews', newsId);
        formData.append('username', username);
        formData.append('name', name);
        formData.append('level', level);

        if (urlImageInput.files.length > 0) {
            formData.append('url_image', url_image);
        } else {
            formData.append('url_image', null);
        }
        
        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_user/edituser.php', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(function(response) {
            console.log(response.data);
            alert(response.data);
            window.location.href = 'data_user.php';
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
</body>
</html>