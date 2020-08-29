$(document).ready(()=>{
    $('#gps-button').click((e)=>{
        e.preventDefault();
        getLocation();
    });
})

function getAddress (latitude, longitude) {
    return new Promise(function (resolve, reject) {
        var request = new XMLHttpRequest();

        var method = 'GET';
        var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true';
        var async = true;

        request.open(method, url, async);
        request.onreadystatechange = function () {
            if (request.readyState == 4) {
                if (request.status == 200) {
                    var data = JSON.parse(request.responseText);
                    var address = data.results[0];
                    resolve(address);
                }
                else {
                    reject(request.status);
                }
            }
        };
        request.send();
    });
};
function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
      return 
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }
function showPosition(position) {
    $('#latitude').val(position.coords.latitude);
    $('#longitude').val(position.coords.longitude);
    getL();
    //$('#delivery_location').val(getAddress(position.coords.latitude, position.coords.longitude));
}

    function getL(){
        navigator.geolocation.getCurrentPosition(success, error)
    };

    function success(position) {
        console.log(position.coords.latitude)
        console.log(position.coords.longitude)

        var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en';

        $.getJSON(GEOCODING).done(function(location) {
            $('#delivery_location').val(typeof location);
        })

    }

    function error(err) {
        console.log(err)
    }
