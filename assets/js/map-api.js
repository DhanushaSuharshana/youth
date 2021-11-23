/*!
 * Markers On Map ('https://github.com/furcan/Markers-On-Map')
 * Version: 1.4.0
 * Author: Furkan MT ('https://github.com/furcan')
 * Copyright 2020 Markers On Map, MIT Licence ('https://opensource.org/licenses/MIT')*
 */
var centerMarkers = [];
//AJAX
$.ajax({
    url: siteUrl + 'centers/map',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        $.each(data, function (key, center) {
            if (Number(center.latitude)) {
                centerMarkers.push({
                    markerLat: Number(center.latitude),
                    markerLong: Number(center.longitude),
                    markerTitle: center.name,
                    markerUrl: 'https://youth.slysc.lk/public/img/map-marker.png',
                    markerSize: 40,
                    markerContent: `<h4 style="text-align:center;margin:0 0 10px;">${center.name}</h4><p style="text-align:center; margin:0 0 10px;">${center.email} <br>${center.contact1}</p><a href="mailto:${center.email}" style="display:table;margin:auto;padding:8px 12px;border-radius:20px;font-weight:700;background:#502974;color:#fff;cursor:pointer;">Send Mail</a>`,
                    // markerContentFromGoogleQuery: 'Ataturk Culture Center',
                    // markerCallback: function () {
                    //     // Notiflix.Notify.Success('This is a marker click callback. (Custom Content)');
                    // },
                    // closeCallback: function () {
                    //     // Notiflix.Notify.Info('This is a close button callback. (Custom Content)');
                    // },
                });
            }
        });
        console.log(centerMarkers);
    }
});


// DEMO: Markers On Map - Init and Run on
MarkersOnMap.Init({
    googleApiKey: 'AIzaSyCFzGKfzDOLBpIU1ElAxVrBr-Ed2QRwzgQ', // this key restricted except this project
    googlePlacesApiEnabled: true,
    mapTypeId: 'ROADMAP',
    mapHeight: '600px',
    markerDropAnimation: 'drop',
    markerAdjustZoom: true,
    mapScrollWheel: true,
    markerObjects: centerMarkers,
    //  [

    //     {
    //         markerLat: 6.8474,
    //         markerLong: 79.9253,
    //         markerTitle: 'This marker getting content from Google Places API',
    //         markerUrl: 'https://youth.slysc.lk/public/img/map-marker.png',
    //         markerSize: 40,
    //         markerContentFromGoogleQuery: 'Anitkabir',
    //         markerCallback: function () {
    //             // Notiflix.Notify.Success('This is a marker click callback. (Anitkabir)');
    //         },
    //         closeCallback: function () {
    //             // Notiflix.Notify.Info('This is a close button callback. (Anitkabir)');
    //         },
    //     },
    //     {
    //         markerLat: 5.9565,
    //         markerLong: 80.5441,
    //         markerTitle: 'This marker getting content from Google Places API',
    //         markerUrl: 'https://youth.slysc.lk/public/img/map-marker.png',
    //         markerSize: 40,
    //         markerContentFromGoogleQuery: 'Ataturk House',
    //         markerCallback: function () {
    //             // Notiflix.Notify.Success('This is a marker click callback. (Ataturk House)');
    //         },
    //         closeCallback: function () {
    //             // Notiflix.Notify.Info('This is a close button callback. (Ataturk House)');
    //         },
    //     },
    //     {
    //         markerLat: 7.2187,
    //         markerLong: 80.6810,
    //         markerUrl: 'https://youth.slysc.lk/public/img/map-marker.png',
    //         markerSize: 40,
    //         markerTitle: 'Maharagama',
    //         markerContent: '<h4 style="text-align:center;margin:0 0 10px;">Maharagama</h4><p style="text-align:center; margin:0 0 10px;">maharagamanysc@nysc.lk</p><button onclick="Notiflix.Notify.Success(\'Custom Button Action\')" style="display:table;margin:auto;padding:8px 12px;border-radius:20px;font-weight:700;background:#502974;color:#fff;cursor:pointer;">Custom Button</button>',
    //         // markerContentFromGoogleQuery: 'Ataturk Culture Center',
    //         markerCallback: function () {
    //             // Notiflix.Notify.Success('This is a marker click callback. (Custom Content)');
    //         },
    //         closeCallback: function () {
    //             // Notiflix.Notify.Info('This is a close button callback. (Custom Content)');
    //         },
    //     }
    // ],
});
MarkersOnMap.Run('div#GoogleMaps', function cllbck() {
    // Notiflix.Notify.Success('The map created successfully.');
});
// DEMO: Markers On Map - Init and Run off

// DEMO: Tooltip on
function furcanTooltip(tooltip) {
    $('body > .tooltip').remove();
    $(tooltip).tooltip({
        trigger: 'hover',
        container: 'body',
    });
}
furcanTooltip('[data-toggle="tooltip"]');

$(document).on('click', function () {
    if ($('body > .tooltip').length > 0) {
        $('body > .tooltip').remove();
    }
});
// DEMO: Tooltip off

// DEMO: Map Markers Title Tooltip on
$(window).on('load', function () {
    var tooltipTimeout = setTimeout(function () {
        $(document).on('mouseenter', 'div#GoogleMaps', function () {
            furcanTooltip($('div#GoogleMaps *[title]'));
            clearTimeout(tooltipTimeout);
        });
    }, 1000);
});
// DEMO: Map Markers Title Tooltip off

// DEMO: Notiflix on
// Notiflix.Notify.Init({
//     position: 'right-bottom',
//     cssAnimationStyle: 'from-bottom',
// });
// DEMO: Notiflix off