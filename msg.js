function getMsg() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("msg_container").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "get_messages.php", true);
  xmlhttp.send();
}

window.onload = getMsg();

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

function sendMsg() {
  name = document.getElementById("name").value;
  message = document.getElementById("message").value;

  fd = new FormData();
  fd.append("name", name);
  fd.append("message", message);

  image = document.getElementById("image").files[0];

  ImageTools.resize(image, {
    width: 4000,
    height: 4000
  }, function(blob, didItResize) {
  fd.append("image", blob);
  });
  ImageTools.resize(image, {
    width: 400,
    height: 400
  }, function(blob, didItResize) {
  fd.append("thumbnail", blob);
  doSend()
  });
}

function doSend() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "send_messages.php", true);
  // xhReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(fd);
  setTimeout(function() {getMsg()}, 2000);
}
