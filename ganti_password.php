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
                <label for="password">Masukkan Password Baru:</label>
                <input class="form-control" type="password" id="password" name="password" required></input>
            </div>

            <button type="button" class="btn btn-primary" onclick="gantiPassword()">Edit Data</button>
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
            })
            .catch(function(error) {
                console.error(error);
                alert('Error fetching news data.');
            });
    }
    function gantiPassword() {
        const newsId = document.getElementById('newsId').value;
        const username = document.getElementById('username').value;
        const name = document.getElementById('name').value;
        const password = document.getElementById('password');

        var formData = new FormData();
        formData.append('idnews', newsId);
        formData.append('username', username);
        formData.append('name', name);
        formData.append('pwd', password);

        axios.post('https://client-server-fadhilah.000webhostapp.com/crud_user/changepassword.php', formData, {
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