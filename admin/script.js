
function loadFormAcara() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "formacara.php", true);
    xhr.send();
  }


function loadFormPeserta() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "formpeserta.php", true);
    xhr.send();
  }


function loadFormPendaftaran() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "formpendaftaran.php", true);
    xhr.send();
  }


function loadFormPembayaran() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "formpembayaran.php", true);
    xhr.send();
  }

function loadFormDuplicate() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("allert").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "allert_duplicate.html", true);
    xhr.send();
  }

  function loadReportAcara() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "reportacara.php", true);
    xhr.send();
  }
  function loadReportPeserta() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "reportpeserta.php", true);
    xhr.send();
  }
  function loadReportPendaftaran() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "reportpendaftaran.php", true);
    xhr.send();
  }
  function loadReportPembayaran() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("content").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "reportpembayaran.php", true);
    xhr.send();
  }

