document.addEventListener("DOMContentLoaded", function () {
  const dashboardLink = document.getElementById("dashboardLink");
  const level = localStorage.getItem("level");

  if (level === "admin") {
    dashboardLink.innerHTML = '<a href="dashboard.php">Dashboard</a>';
  } else {
    dashboardLink.innerHTML = "";
  }
});
