<?php
include('check_session.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en" xframeoptions="SAMEORIGIN" frameancestors="'self'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
  
  <div class="container">
      <div class="container mt-5">
        <h2 id="welcomeMessage">Selamat Datang di Dashboard</h2>
      </div>
      
      <div class="row">
      <div class="col-md-12">
        <button onclick="downloadExcel()" class="btn btn-success mr-2">
          <i class="fas fa-download"></i> Unduh Excel
        </button>
        <button onclick="downloadPDF()" class="btn btn-danger">
          <i class="fas fa-download"></i> Unduh PDF
        </button>
      </div>
    </div>

    <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
      <div class="card bg-success my-4">
        <div class="card-header">
          Akumulasi Pembelian
        </div>
        <div class="card-body">
          <h3 id="jumlahBerita" class="text-dark">
            <i class="fas fa-newspaper"></i> Loading...
          </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tahunSelect">Pilih Tahun</label>
      <select class="form-control" id="tahunSelect"></select>
    </div>
  </div>
  <hr>
  
  <h2 class="text-center">GRAFIK JUMLAH PEMBELIAN DALAM 1 TAHUN</h2>
  <div class="row">
    <div class="col-md-12">
      <canvas id="newsChart" width="400" height="200"></canvas>
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

    <script>
      document.getElementById('welcomeMessage').innerText = 'Selamat Datang ' + localStorage.getItem('nama');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function dashboard() {
            window.location.href = 'index.php';
        }

        function keloladata() {
            window.location.href = 'data_pembayaran.php';
        }

        function tambahdata() {
            window.location.href = 'tambah.php';
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
            window.location.href = './login.php';
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
      function fetchData(tahun) {
        var formData = new FormData();
        formData.append('tahun', tahun);

        return axios({
          method: 'post',
          url: 'https://client-server-fadhilah.000webhostapp.com/sum_beritatahun.php',
          data: formData,
          headers: { 'Content-Type': 'multipart/form-data' }
        });
      }

      function createChart(data) {
        var ctx = document.getElementById('newsChart').getContext('2d');

        var existingChart = Chart.getChart(ctx);
        if (existingChart) {
          existingChart.destroy();
        }

        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: data.map(item => item.bulan),
            datasets: [{
              label: 'Jumlah Pembelian',
              data: data.map(item => item.jumlah_berita),
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  stepSize: 1
                }
              }
            }
          }
        });
      }

      function populateSelectOptions(data) {
        var selectElement = document.getElementById('tahunSelect');
        data.forEach(item => {
          var option = document.createElement('option')
          option.value = item.tahun;
          option.text = item.tahun;
          selectElement.add(option);
        });

        var latestYear = data[0].tahun;
        document.getElementById('tahunSelect').value = latestYear;

        fetchData(latestYear)
          .then(response => {
            var chartData = response.data;
            createChart(chartData);
          })
          .catch(error => {
            console.error('Error fetching data:', error);
          });
      }

      document.getElementById('tahunSelect').addEventListener('change', function() {
        var selectedYear = this.value;
        fetchData(selectedYear)
          .then(response => {
            var chartData = response.data;
            createChart(chartData);
          })
          .catch(error => {
            console.error('Error fetching data:', error);
          });
      });

      axios.get('https://client-server-fadhilah.000webhostapp.com/select_tahun.php')
        .then(response => {
          var tahunData = response.data;
          populateSelectOptions(tahunData);
        })
        .catch(error => {
          console.error('Error fetching tahun data:', error);
        });
    </script>
    <script>
      axios.get('https://client-server-fadhilah.000webhostapp.com/sum_berita.php')
        .then(function (response) {
          var dataJumlahBerita = response.data;

          var jumlahBeritaElement = document.getElementById('jumlahBerita');

          jumlahBeritaElement.innerHTML = `<i class="fas fa-newspaper"></i> Jumlah Pembelian: ${dataJumlahBerita[0].jumlah_berita}`;

        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    </script>
    <script>
      function downloadExcel() {
        var selectedYear = document.getElementById('tahunSelect').value;
        fetchData(selectedYear)
          .then(response => {
            var data = response.data;

            var ws = XLSX.utils.json_to_sheet(data);

            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Laporan");

            XLSX.writeFile(wb, "laporan_excel_" + selectedYear + ".xlsx");
          })
          .catch(error => {
          console.error('Error fetching data for Excel:', error);
          });
      }

      function downloadPDF() {
        var canvas = document.getElementById('newsChart');

        var imgData = canvas.toDataURL('image/png');

        var selectedYear = document.getElementById('tahunSelect').value;

        var docDefinition = {
          content: [
            { text: 'Laporan Tahun' + selectedYear, style: 'header' },
            { image: imgData, width: 500 },
          ],
          styles: {
            header: {
              fontSize: 18,
              bold: true,
              margin: [0, 0, 0, 10],
            },
          },
        };
        
        pdfMake.createPdf(docDefinition).download('laporan_' + selectedYear + '_pdf.pdf');
      }
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const dashboardLink = document.getElementById("dashboardLink");
        const level = localStorage.getItem("level");

        if (level === "admin") {
          Swal.fire({
                  icon: 'info',
                  title: 'WELCOME',
                  text: 'Selamat Datang Di Dashboard!'
                });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hanya Admin yang bisa Mengakses Halaman tersebut!'
          });
          window.location.href = "index.php";
        }
      });
    </script>
</body>
</html>