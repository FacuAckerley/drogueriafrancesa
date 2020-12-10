$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -34.77324, lng: -58.23165 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
$('#myModal').modal({
  show: true
})

