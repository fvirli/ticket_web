<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
      function checkSession() {
        const formData = new FormData();
        formData.append('session_token', localStorage.getItem('session_token'));

        axios.post('https://client-server-fadhilah.000webhostapp.com/session.php', formData)
        .then(response => {
          console.log(response);
          if (response.data.status === 'success') {
            const username = response.data.hasil.username || 'Default Name';
            const nama = response.data.hasil.name || 'Default Name';
            const level = response.data.hasil.level || 'default';
            localStorage.setItem('username', username);
            localStorage.setItem('nama', nama);
            localStorage.setItem('level', level);
          } else {
            window.location.href = 'login.php';
          }
        })
        .catch(error => {
          console.error('Error Checking Session:', error);
        });
      }
      checkSession();
</script>