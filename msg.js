window.onload = function getMsg() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("msg_container").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "get_messages.php", true);
  xmlhttp.send();
}

function showBigImage(path) {
  overlay = document.getElementById("overlay");
  imagebox = document.getElementById("imagebox");
  closeImagebox = document.getElementById("closeImagebox");
  bigImage = document.getElementById("bigImage");
  overlay.style.display = "block";
  imagebox.style.display = "block";
  closeImagebox.style.display = "block";
  bigImage.src = path;
  bigImage.style.display = "block";
}

function hideBigImage() {
  overlay = document.getElementById("overlay");
  imagebox = document.getElementById("imagebox");
  closeImagebox = document.getElementById("closeImagebox");
  bigImage = document.getElementById("bigImage");
  overlay.style.display = "none";
  imagebox.style.display = "none";
  closeImagebox.style.display = "none";
  bigImage.style.display = "none";
}
