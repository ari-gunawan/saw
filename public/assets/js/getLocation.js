$(document).ready(function () {
  navigator.geolocation.getCurrentPosition(
    function (position) {
      tampilLokasi(position);
    },
    function (e) {
      alert("Geolocation Tidak Mendukung Pada Browser Anda");
    },
    {
      enableHighAccuracy: true,
    }
  );
});

function tampilLokasi(posisi) {
  // console.log(posisi);
  var latitude = posisi.coords.latitude;
  var longitude = posisi.coords.longitude;
  console.log(latitude);
  document.getElementById("latitude").innerHTML = latitude;
  document.getElementById("longitude").innerHTML = longitude;
}

function simpanPresensi() {
  $.ajax({
    url: window.location.origin + "/presensi/simpanPresensi",
    method: "POST",
    data: {
      tanggal: document.getElementById("tanggal").innerText,
      latitude: document.getElementById("latitude").innerText,
      longitude: document.getElementById("longitude").innerText,
      presensi: $("select[name=presensi] option").filter(":selected").val(),
    },
    timeout: 500, // timeout milliseconds
    success: function (data, status, xhr) {
      // success callback function
      alert(data);
      // $('p').append(data.firstName + ' ' + data.middleName + ' ' + data.lastName);
    },
    error: function (jqXhr, textStatus, errorMessage) {
      // error callback
      $("p").append("Error: " + errorMessage);
    },
  });
}
