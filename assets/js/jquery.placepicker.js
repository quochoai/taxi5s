+(function($, window) {
    var pluginName = "placepicker";
    var defaults = {
        map: "",
        mapIconClass: "glyphicon glyphicon-globe",
        mapOptions: {
            zoom: 15
        },
        places: {
            icons: false
        },
        autoCompleteOptions: {componentRestrictions: {country: 'vn'}},
        placeChanged: null,
        location: null,
        preventSubmit: true
    };

    function PlacePicker(element, options) {
        var instance = this;
        var geocoder = null;
        var mapElement, map, marker;
        var service = null;
        var autocomplete;
        var _place = null;
        var _latLng = null;

        function template() {
            var templateString = "<div class=\"input-group\">" + "<span class=\"input-group-btn\">" + "<button type=\"button\" data-toggle=\"collapse\" href=\"#" + options.mapContainerId + "\" class=\"btn btn-default\">" + "<span class=\"" + options.mapIconClass + "\"></span>" + "</button>" + "</span>" + "</div>";
            return templateString;
        }

        function initDomElements() {
            if (!options.mapContainerId) {
                return;
            }
            var $element = $(element);
            var $parent = $element.parent();
            var index = $parent.children().index(element);
            $element.replaceWith(template());
            $parent.children().eq(index).append(element);
        }

        function codePlace(query) {
            if (!query) {
                return;
            }
            var request = {
                query: query
            };
            if (service) {
                service.textSearch(request, function(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        for (var i = 0; i < results.length; i++) {
                            setPlace(results[i]);
                            return;
                        }
                    }
                });
            }
        }

        function codeLatLng(latlng) {
            geocoder.geocode({
                "latLng": latlng
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        var place = results[0];
                        setPlace(place, false);
                    } else {}
                } else {}
            });
        }

        function setMapElement() {
            mapElement = $(options.map).get(0);
            if (!mapElement) {
                if (options.mapContainerId) {
                    mapElement = $("#" + options.mapContainerId + " .placepicker-map").get(0);
                }
            }
            return mapElement ? true : false;
        }

        function initMap() {
            if (!setMapElement()) {
                return;
            }
            map = new google.maps.Map(mapElement, options.mapOptions);
            autocomplete.bindTo("bounds", map);
            google.maps.event.addListener(map, "click", function(e) {
                var pos = e.latLng;
                marker.setPosition(pos);
                map.panTo(pos);
                element.blur();
                codeLatLng(pos);
            });
            marker = new google.maps.Marker({
                map: map
            });
            service = new google.maps.places.PlacesService(map);
            $(mapElement).parent().on("show.bs.collapse", function(e) {
                $(e.target).css("display", "block").find("img[src*='gstatic.com/'], img[src*='googleapis.com/']").css("max-width", "none");
                if (!element.value) {
                    instance.geoLocation();
                } else {
                    instance.resize();
                }
                $(e.target).css("display", "");
            });
        }

        function initAutoComplete() {
            autocomplete = new google.maps.places.Autocomplete(element, options.autoCompleteOptions);
            google.maps.event.addListener(autocomplete, "place_changed", function() {
                var place = autocomplete.getPlace();
                if (place.geometry) {
                    setPlace(place);
                }
            });
        }

        function resizeHandler() {
            instance.resize.call(instance);
        }

        function overrideAddEventListener() {
            var _addEventListener = (element.addEventListener) ? element.addEventListener : element.attachEvent;

            function addEventListenerWrapper(type, listener) {
                if (type === "keydown") {
                    var orig_listener = listener;
                    listener = function(event) {
                        var suggestion_selected = $(".pac-item-selected").length > 0;
                        if ((event.which === 13 || event.keyCode === 13) && !suggestion_selected) {
                            var simulated_downarrow = $.Event("keydown", {
                                keyCode: 40,
                                which: 40
                            });
                            orig_listener.apply(element, [simulated_downarrow]);
                        }
                        orig_listener.apply(element, [event]);
                    };
                }
                _addEventListener.apply(element, [type, listener]);
            }
            element.addEventListener = addEventListenerWrapper;
            element.attachEvent = addEventListenerWrapper;
        }

        function init() {
            geocoder = new google.maps.Geocoder();
            overrideAddEventListener();
            initDomElements();
            initAutoComplete();
            initMap();
            if (!element.value) {
                var lat = options.latitude || $(options.latitudeInput).prop("value");
                var lng = options.longitude || $(options.longitudeInput).prop("value");
                if (lat && lng) {
                    instance.setLocation(lat, lng);
                }
            } else {
                codePlace(element.value);
            }
            $(window).on("resize", resizeHandler);
            $(element).on("keypress", function(e) {
                if (options.preventSubmit && e.keyCode === 13) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                }
            });
        }

        function setPlace(place, updateMap) {
            updateMap = typeof updateMap === "undefined" ? true : false;
            _place = place;
            instance.resize();
            var pos = place.geometry.location;
            if (updateMap) {
                updatePosition(pos);
            }
            $(options.latitudeInput).prop("value", pos.lat());
            $(options.longitudeInput).prop("value", pos.lng());
            if (!updateMap) {
                element.value = place.formatted_address;
            }
            if (typeof options.placeChanged === "function") {
                options.placeChanged.call(instance, place);
            }
        }

        function updatePosition(pos) {
            if (!map) {
                return;
            }
            map.setCenter(pos);
            var icon = options.icon || options.placesIcon && place.icon ? place.icon : null;
            if (icon) {
                var iconOptions = {
                    url: icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(35, 35)
                };
                marker.setIcon(iconOptions);
            }
            marker.setPosition(pos);
            marker.setVisible(true);
        }
        this.setValue = function(value) {
            element.value = value;
            codePlace(value);
        };
        this.getValue = function() {
            return element.value;
        };
        this.setLocation = function(latitude, longitude) {
            var latLng = new google.maps.LatLng(latitude, longitude);
            this.setLatLng(latLng);
        };
        this.getLocation = function() {
            var latLng = this.getLatLng();
            return {
                latitude: latLng && latLng.lat() || options.latitude,
                longitude: latLng && latLng.lng() || options.longitude
            };
        };
        this.setLatLng = function(latLng) {
            _latLng = latLng;
            codeLatLng(_latLng);
        };
        this.getLatLng = function() {
            if (_place && _place.geometry) {
                return _place.geometry.location;
            }
            return _latLng;
        };
        this.getMap = function() {
            return map;
        };
        this.reload = function() {
            if (map) {
                codePlace(element.value);
            }
        };
        this.resize = function() {
            if (map) {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            }
        };
        this.geoLocation = function(callback) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    updatePosition(pos);
                    codeLatLng(pos);
                    if (callback) {
                        callback(pos);
                    }
                }, function() {
                    if (callback) {
                        callback(null);
                    }
                });
            } else {
                if (callback) {
                    callback(null);
                }
            }
        };
        init.call(this);
    }
    var pluginClass = PlacePicker;
    $.fn[pluginName] = function(options) {
        return this.each(function() {
            if (!$(this).data(pluginName)) {
                $(this).data(pluginName, new pluginClass(this, $.extend({}, defaults, options, $(this).data())));
            }
            return $(this);
        });
    };
})(jQuery, window);