document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      const username = form.elements.username.value;
      const password = form.elements.password.value;
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "index.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          const response = JSON.parse(xhr.responseText);
          if (response.success) {
            const modal = document.querySelector("#myModal");
            modal.style.display = "block";
          } else {
            alert(response.message);
          }
        }
      };
      xhr.send(`username=${username}&password=${password}`);
    });
  });
  