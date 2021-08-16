let mapType = "roadmap";
let centerOfLanka = {
    lat: 7.8731,
    lng: 80.7718
};
//HYBRID, ROADMAP,SATELLITE, TERRAIN
let map;
// The markers are stored in an array.
let markers = []; // MARKED MARKERS ON MAP

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 6,
        center: centerOfLanka,
        /*
        gestureHandling: "none", /cooperative
        zoomControl: false,
        */
        //  gestureHandling: "greedy",

    });
    if (mapType) {
        map.setMapTypeId(mapType);
    }

    var markers = [{
            coords: {
                lat: 6.8474,
                lng: 79.9253
            },
            content: {
                name : "Maharagama",
                url:""
            }
        },
        {
            coords: {
                lat: 6.8142,
                lng: 79.8774
            }
            ,
            content: {
                name : "Rathmalana"
            }
        }
    ];
    // console.log(markers);
    map.setZoom(6);
    deleteMarkers();
    setTimeout(function(){
        map.setZoom(7);
        map.setCenter(centerOfLanka);
        for (var i = 0; i < markers.length; i++) {
            addMarker(markers[i]);
            // console.log(markers[i])
        }
    }, 1000);
    //==========================================================================================================

    // WHEN CHANGE/CLICK SEND REQUEST
    /*CENTER
    galle = 6.055208, 80.211481
    matara = 5.954311, 80.549155
    hambanthota = 6.145161, 81.114602
    colombo = 6.917330, 79.866969
    */

    // $('#_find').click(function (data, status) {
    //     // $.get('http://localhost:5000/find', () => {
    //     //     markers = data;
    //     // });
    //     var _district = $('#_district').val();
    //     var _city = $('#_city').val();
    //     var _category = $('#_category').val();
    //     var param = _district + "/" + _city + "/" + _category;

    //     if (_district !== "null" && _city !== "null" && _category !== "null") {

    //         $.ajax({
    //             type: 'GET',
    //             //https://api.handyman.vtaslppunion.com/find/
    //             //http://localhost:5000/find/
    //             url: "http://192.168.1.12:5000/find/" + param,
    //             async: true,
    //             dataType: 'json', //you may use jsonp for cross origin request
    //             crossDomain: true,
    //             success: function (data) {
    //                 var markers = data.workers;
    //                 // console.log(markers);
    //                 map.setZoom(7);
    //                 deleteMarkers();
    //                 setTimeout(()=>{
    //                     map.setZoom(10);
    //                     map.setCenter(data.centerlocation);
    //                     for (var i = 0; i < markers.length; i++) {
    //                         addMarker(markers[i]);
    //                         // console.log(markers[i])
    //                     }
    //                 },1000);


    //             }
    //         });

    //     }

    //     // alert();
    //     // ALL MARKERS
    //     // var markers = [{
    //     //         //coords, title (optional)=> iconImage, content
    //     //         coords: {
    //     //             lat: 6.0716222,
    //     //             lng: 80.3361916
    //     //         },
    //     //         title: "Hello World!",
    //     //         content: {
    //     //             title: 'JavaScript Fundamentals'
    //     //         },
    //     //         iconImage: {
    //     //             path: 'M34.682 25.801c-1.438-1.134-3.596-2.04-6.474-2.717l-2.208-.521v-9.43l.299.122c1.874.949 2.881 2.745 3.019 4.745h7.516c-.137-4-1.615-6.958-4.434-9.048-1.873-1.389-4.009-2.282-6.4-2.732v-5.22h-7v5.06c-3.237.4-5.804 1.442-7.689 3.136-2.468 2.218-3.701 5.002-3.701 8.354 0 3.673 1.261 6.373 3.783 8.1 1.412.979 3.957 1.888 7.607 2.73v10.216c-1.331-.367-2.374-.971-3.109-1.844-.709-.848-1.184-1.752-1.426-3.752h-7.465c0 4 1.411 6.87 4.234 9.096 2.038 1.606 4.632 2.582 7.766 3.005v3.899h7v-3.833c3.333-.399 6.024-1.463 8.062-3.204 2.643-2.26 3.965-5.1 3.965-8.519 0-3.335-1.115-5.882-3.345-7.643zm-18.014-5.817c-1.215-.66-1.822-1.662-1.822-3 0-1.456.616-2.597 1.848-3.409.65-.429 1.424-.741 2.306-.947v8.224c-1.085-.316-1.868-.606-2.332-.868zm10.475 18.407c-.347.12-.734.219-1.143.306v-8.697c1.205.357 2.156.746 2.848 1.164 1.092.677 1.639 1.64 1.639 2.875-.001 2.116-1.116 3.573-3.344 4.352z',
    //     //             fillColor: '#00CCBB',
    //     //             fillOpacity: 1,
    //     //             strokeColor: '',
    //     //             strokeWeight: 0,
    //     //             scale: .7
    //     //         }
    //     //     },
    //     //     {
    //     //         //coords, title (optional)=> iconImage, content
    //     //         coords: {
    //     //             lat: 6.0535,
    //     //             lng: 80.2210
    //     //         },
    //     //         title: "Galle",
    //     //         content: {
    //     //             title: 'PHP Fundamentals'
    //     //         }
    //     //     }
    //     // ];


    // });

    // $('#_clear').click(function () {
    //     map.setCenter(centerOfLanka);
    //     map.setZoom(7);
    //     clearMarkers();
    // });
    // $('#_delete').click(function () {
    //     map.setCenter(centerOfLanka);
    //     map.setZoom(7);
    //     deleteMarkers();
    // });
    // $('#_showall').click(function () {
    //     map.setCenter(centerOfLanka);
    //     map.setZoom(7);
    //     showMarkers();
    // });
    // $('#_maptype').change(function () {
    //     var val = $('#_maptype').val();
    //     map.setMapTypeId(val);
    // });

    //=============================================================================================================
}




// MAPS FUNCTIONS
// Adds a marker to the map and push to the array.
function addMarker(props) {
    console.log(props.coords);
    const marker = new google.maps.Marker({
        title: 'ssss',
        position: props.coords,
        animation: google.maps.Animation.DROP,
        map: map,
    });
    // SET ICON
    if (props.iconImage) {
        marker.setIcon(props.iconImage);
    }
        const contentString =
            `  <div class="courses-container">
         <div class="course">
             <div class="course-preview">
                 <h6>Course</h6>
                 <h2>${props.content.name}</h2>
                 <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
             </div>
             <div class="course-info">
                 <div class="progress-container">
                     <div class="progress"></div>
                     <span class="progress-text">
                         6/9 Challenges
                     </span>
                 </div>
                 <h6>Chapter 4</h6>
                 <h2>Callbacks & Closures</h2>
                 <button class="btn">Continue</button>
             </div></div></div>
     `;
    const infowindow = new google.maps.InfoWindow({
        content: contentString,
    });

    marker.addListener("click", () => {
        infowindow.open(map, marker);
    });

    markers.push(marker);
}



// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (let i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}



// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
}



// Shows any markers currently in the array.
function showMarkers() {
    setMapOnAll(map);
}



// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
    markers = [];
}
// END MAPS FUNCTIONS