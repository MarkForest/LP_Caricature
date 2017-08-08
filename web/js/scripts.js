
$('.easy-pie-chart').easyPieChart({
    animate: 2000,
    scaleColor: false,
    lineWidth: 20,
    lineCap: 'square',
    size: 180,
    trackColor: '#3e383a',
    barColor: '#D0C5BF',
});


<!-- IMPORTANT: If you don't use Google Map, delete these two scripts to gain more speed -->

function initialize() {
    var myLatlng = new google.maps.LatLng(47.910483,33.391783);
    var mapOptions = {
        zoom: 10,
        center: myLatlng,
        scrollwheel: false
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Here I Am!'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);


