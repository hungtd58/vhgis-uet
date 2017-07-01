window.Vue = require('vue');
window.Event = new Vue();

Vue.component('vhgis-map', {
    template: `
		<div id="map"></div>
	`,
    props: ['prefix'],
    data() {
        return {
            map: null,
            pathJSON: null,
            zoom: 7
        }
    },
    watch: {
        zoom: function(val) {
            this.zoom = val;
            console.log(this.zoom);
        }
    },
    methods: {
        updateMap(year, month, day, size) {
            console.log("Update!!!!!!!!!");
            console.log(year + " " + month + " " + day + " " + size);
            var vm = this;
            if (vm.map == null) return;
            vm.map.removeMarkers();
            $.get(vm.prefix + "/gethistoryname?year=" + year,
                function(data, status) {
                    if (data.result.length > 0) {
                        places = data.result;
                        for (var i = 0; i < places.length; i++) {
                            vm.map.addMarker({
                                lat: places[i].lat,
                                lng: places[i].long,
                                title: places[i].name,
                                label: {
                                    text: places[i].name,
                                    fontWeight: 'bold',
                                    fontSize: '12px',
                                    fontFamily: '"Courier New", Courier,Monospace',
                                    color: 'white'
                                },
                                icon: vm.prefix + '/img/marker.png'
                            });
                        }
                    }
                });
            $.get(vm.prefix + "/geteventlist?year=" + year + "&month=" + month + "&day=" + day + "&size=" + size,
                function(data, status) {
                    if (data.result.length > 0) {
                        events = data.result;
                        for (var i = 0; i < events.length; i++) {
                            vm.map.addMarker({
                                lat: events[i].place.lat,
                                lng: events[i].place.long,
                                title: events[i].name,
                                label: {
                                	text: events[i].name,
                                    fontWeight: 'bold',
                                    fontSize: '12px',
                                    fontFamily: '"Courier New", Courier,Monospace',
                                    color: 'black',
                                },
                                icon: {
                                    url: vm.prefix + '/img/battle.png',
                                    size: new google.maps.Size(25, 25),
                                    origin: new google.maps.Point(0, 0),
                                    anchor: new google.maps.Point(0, 0),
                                    scaledSize: new google.maps.Size(20, 20),
                                    labelOrigin: new google.maps.Point(5, 0)
                                },
                                infoWindow: {
                                    content: '<p style="max-width: 100px;">' + events[i].description + '</p>'
                                }
                            });
                        }
                    }
                });
            $.get(vm.prefix + "/getbounds?year=" + year, function(data, status) {
                var str = data.result.bounds;
                if (vm.pathJSON != str) {
                    vm.map.removePolygons();
                    vm.pathJSON = str;
                } else {
                    return;
                }
                var json = JSON.stringify(eval("(" + str + ")"));
                var path = JSON.parse(json);
                polygon = vm.map.drawPolygon({
                    paths: path, // pre-defined polygon shape
                    useGeoJSON: true,
                    strokeColor: '#2825E3',
                    strokeOpacity: 1,
                    strokeWeight: 3,
                    fillColor: '#2825E3',
                    fillOpacity: 0.6
                });
            });
        }
    },
    mounted() {
        var vm = this;
        Event.$on('google.maps:init', function() {
            vm.map = new GMaps({
                div: '#map',
                zoom: vm.zoom,
                minZoom: 6,
                maxZoom: 15,
                lat: 20.000,
                lng: 106.400,
                disableDefaultUI: false,
                mapTypeControl: false,
                zoomControl: true
            });
            var styles = [{
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative.land_parcel",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative.neighborhood",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "stylers": [{
                    "visibility": "off"
                }]
            }];

            vm.map.addStyle({
                styledMapName: "Styled Map",
                styles: styles,
                mapTypeId: "map_style"
            });
            vm.map.setStyle("map_style");
            vm.map.addListener('zoom_changed', function() {
                vm.zoom = vm.map.getZoom();
            });
            vm.updateMap(1975, 4, 30, 3);
        })

        Event.$on('change-time', function(data) {
            console.log(data);
            vm.updateMap(data.year, data.month, data.day, data.size);
        })
    }
})

const app = new Vue({
    el: '#app',
    data: {
        year: 1975,
        month: 4,
        day: 30,
        size: '3',
        time: "1975-04-30"
    },
    watch: {
        time: function(val) {
            this.time = val;
            console.log(this.time);
        }
    },
    methods: {
        goToTime() {
            var vm = this;
            var date = moment(vm.time + "");
            Event.$emit('change-time', {
                year: moment(vm.time).format('YYYY'),
                month: moment(vm.time).format('MM'),
                day: moment(vm.time).format('DD'),
                size: vm.size
            });
            var evt = new CustomEvent('changeTimeFromInput', { detail: date.valueOf() });
            window.dispatchEvent(evt);
        }
    },
    mounted() {
        var vm = this;
    	console.log(vm.size);
        Event.$on('change-time', function(data) {
            console.log(data);
            // if(data.year < -500 && data.year > 2017){
            	
            // }
            vm.time = data.year + "-" + data.month + "-" + data.day;
        })
    }
})
window.initMap = function() {
    Event.$emit('google.maps:init');
}

window.changeTime = function(data) {
	console.log(app);
    Event.$emit('change-time', {
        year: moment(data.from).format('YYYY'),
        month: moment(data.from).format('MM'),
        day: moment(data.from).format('DD'),
        size: app.size
    });
}
