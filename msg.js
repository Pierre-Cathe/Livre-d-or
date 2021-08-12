function getMsg() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("msg_container").innerHTML = this.responseText;
      document.querySelectorAll('.msgimage').forEach(function(img) {
        img.onload = function() {
          var height = img.height;
          var width = img.width;
          if (width > height) {
            img.className += " paysage";
            img.nextSibling.className += " paysage";
          }
          else {
            img.className += " portrait";
            img.nextSibling.className += " portrait";
          }
        }
      });
    }
  };
  xmlhttp.open("GET", "get_messages.php", true);
  xmlhttp.send();
  resetForm();
}

window.onload = getMsg();

window.onscroll = function() {
  if (document.documentElement.scrollTop > 50)
  {
    document.getElementById("scroll-to-top").style.visibility = "visible";
    document.getElementById("scroll-to-top").style.opacity = 1;
  }
  else {
    document.getElementById("scroll-to-top").style.visibility = "hidden";
    document.getElementById("scroll-to-top").style.opacity = 0;
  }
}

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
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

function sendMsg() {
  statusDiv = document.getElementById("status");
  statusDiv.innerHTML = "Envoi en cours...";
  name = document.getElementById("name").value;
  message = document.getElementById("message").value;

  if (name && message)
  {
    fd = new FormData();
    fd.append("name", name);
    fd.append("message", message);

    image = document.getElementById("image").files[0];
    if (typeof image !== 'undefined') {
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
    else {
      doSend();
    }
    resetForm();
  }
}

function resetForm() {
  document.getElementById("name").value = null;
  document.getElementById("message").value = null;
  document.getElementById("image").value = null;
  document.getElementById("filename").innerHTML = "";
}

function doSend() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST", "send_messages.php", true);
  // xhReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(fd);
  xmlhttp.onreadystatechange = function () {
    console.log(xmlhttp.readyState)
    console.log(xmlhttp.status)
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
      getMsg();
      statusDiv = document.getElementById("status");
      statusDiv.innerHTML = "Message envoyé !";
    }
  }
}

function echoFileName() {
  try {
    var fileName = document.getElementById("image").files[0].name;
    document.getElementById("filename").innerHTML = fileName;
  } catch (e) {
    document.getElementById("filename").innerHTML = "";
  }
}
