<?php
include('header.php');
include('check_session.php');
?>
<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
<div class="container mt-5" xframeoptions="SAMEORIGIN" frameancestors="'self'">
    <h2 class="mb-4">List Pembayaran</h2>
    
    <table id="newsTable" class="table table-striped">
    <button onclick="tambahDataPembayaran()" class="btn btn-success mr-2">
          <i class="fas fa-add"></i> Tambah Data
    </button>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No HP</th>
                <th>Seating</th>
                <th>Nominal</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<footer>
      <div class="container">
          <div class="col-lg-12">
            <div class="sub-footer">
              <div class="row">
                <div class="col-lg-3">
                  <div class="logo">
                    <span>Dash<em>board</em></span>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#newsTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": function(data, callback, settings) {
                axios.get('https://client-server-fadhilah.000webhostapp.com/crud_pembayaran/listpembayaran.php', {
                    params: {
                        key: data.search.value
                    }
                })
                .then(function(response) {
                    response.data.forEach(function(row, index) {
                        row.no = index + 1;
                    });
                    callback({
                        draw: data.draw,
                        recordsTotal: response.data.length,
                        recordsFiltered: response.data.length,
                        data: response.data
                    });
                })
                .catch(function(error) {
                    console.error(error);
                    alert('Error fetching news data');
                });
            },
            "columns": [{
                "data": "no"
            },
            {
                "data": "nama"
            },
            {
                "data": "nik"
            },
            {
                "data": "no_hp"
            },
            {
                "data": "seating"
            },
            {
                "data": "nominal"
            },
            {
                "data": "quantity"
            },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<button class="btn btn-danger btn-sm" onclick="deleteNews(' + row.id + ')">Delete</button>' +
                    ' <form action="edit_pembayaran.php" method="post">' +
                    '<input type="hidden" name="id" value="' + row.id + '">' +
                    '<button type="submit" class="btn btn-primary btn-sm">Edit</button>' +
                    '</form>';
                }
            },
            ]
        });
    });

    function deleteNews(id) {
        var formData = new FormData();
        formData.append('idnews', id);

        if (confirm("Are you sure want to delete this news?")) {
            axios.post('https://client-server-fadhilah.000webhostapp.com/crud_pembayaran/hapuspembayaran.php', formData)
                .then(function(response) {
                    alert(response.data);

                    $('#newsTable').DataTable().ajax.reload();
                })
                .catch(function(error) {
                    console.error(error);
                    alert('Error deleting news.');
                });
        }
    }

    function tambahDataPembayaran() {
        window.location.href = "tambah_pembayaran.php";
    }

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