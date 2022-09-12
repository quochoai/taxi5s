function initAutocompleteService(inputElement, resultElement) {
    const displaySuggestions = function (predictions, status) {
        if (status != google.maps.places.PlacesServiceStatus.OK) {
            console.log(status);
            return;
        }
        var widthInput = jQuery(inputElement).width();
        jQuery(resultElement).html('');
        var inputId = "'"+inputElement+"'";
        var resultId = "'" + resultElement + "'";
        var html = '';
        predictions.forEach((prediction) => {
            var placeId = "'" + prediction.place_id + "'";
            //console.log(prediction);
			var airport = false;
			
            prediction.description = prediction.description.replace(", Việt Nam", "");
			var icon = '<i class="fa fa-map-marker" aria-hidden="true"></i>';
			prediction.types.map((item, index) => {
				console.log(item);
				if (item == 'airport') {
					airport = true;
				}
			});
			
			if (airport) {
				icon = '<i class="fa fa-plane" aria-hidden="true"></i>';
			}
			
            var prediction_full = "'" + prediction.description + "'";
            var prediction_fill = prediction.description;
			
            if(prediction_fill.length > 60) prediction_fill = prediction_fill.substr(0,60)+'...';
            html += '<p class="place_google_suggest" onclick="fill_text('+ resultId + ',' + inputId + ',' + prediction_full + ',' + placeId +')">'+ icon +' '+prediction_fill+'</p>';
        });
        jQuery(resultElement).width(widthInput);
        jQuery(resultElement).html(html);
    };
    const service = new google.maps.places.AutocompleteService();
    var timeout = null
    jQuery(inputElement).keyup(function () {
        clearTimeout(timeout)
        timeout = setTimeout(function() {
            jQuery('#ui-id-2').html('');
			if (jQuery(inputElement).val().length >= 5) {
				jQuery.ajax({
					type: 'POST',
					url: '/map/findPlace',
					data: {
						place: jQuery(inputElement).val()
					},
					dataType: "json"
				}).done(function(data) {
					
					if ( data.length > 0 ) {
						var widthInput = jQuery(inputElement).width();
						var inputId = "'"+inputElement+"'";
						var resultId = "'" + resultElement + "'";
						var html = '';
						data.map((item) => {
							var prediction_fill = item.Map.place;
							var prediction_full = "'" + prediction_fill + "'";							
							var lat = "'" + item.Map.lat + "'";							
							var lng = "'" + item.Map.lng + "'";							
							var city = "'" + item.Map.city + "'";							
							var district = "'" + item.Map.district + "'";							
							if(prediction_fill.length > 60) prediction_fill = prediction_fill.substr(0,60)+'...';
							html += '<p class="place_google_suggest" onclick="fill_address('+ resultId + ',' + inputId + ',' + prediction_full + ',' + lat +',' + lng +',' + city +',' + district +')">'+prediction_fill+'</p>';
						});
						
						jQuery(resultElement).width(widthInput);
						jQuery(resultElement).html(html);
						
					} else {
						const service = new google.maps.places.AutocompleteService();
						service.getPlacePredictions(
							{
								input: jQuery(inputElement).val(),
								componentRestrictions: {country: 'vn'}
							},
							displaySuggestions
						);
					}
				  console.log("findPlace");
				  console.log(data);
				});
			}
        }, 1000)
    });
}

function fill_address(resultElement, inputElement, val, lat, lng, city, district) {
	jQuery(inputElement).val(val);
	jQuery(inputElement).closest('span').find('.lat_fill').val(lat);
	jQuery(inputElement).closest('span').find('.long_fill').val(lng);
	jQuery(inputElement).closest('span').find('.city_fill').val(city);
	jQuery(inputElement).closest('span').find('.district_fill').val(district);
	jQuery(resultElement).html('');
}

function fill_text(resultElement, inputElement, val, placeId) {
    var city = '';
    var district = '';
    jQuery(inputElement).val(val);
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'placeId': placeId}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var lat = 0;
            var lng = 0;
            console.log(results);
            lat = results[0].geometry.location.lat();
            lng = results[0].geometry.location.lng();
            for (var i = 0; i < results.length; i++) {
                var count = results[i].address_components.length;
                for (j = 0; j < count; j++) {
                    var types = results[i].address_components[j].types;
                    console.log('types : ' + types)
                    if (jQuery.inArray("administrative_area_level_1", types) !== -1) {
                        city = results[i].address_components[j].long_name;
                    }

                    if (jQuery.inArray("administrative_area_level_2", types) !== -1) {
                        district = results[i].address_components[j].long_name;
                    }

                    if (city != '' && district != '') {
                        break;
                    }
                }

            }
            console.log('lat_lng : ' + lat + ',' + lng)
            console.log('city : ' + city)
            console.log('district : ' + district)

            jQuery(inputElement).closest('span').find('.lat_fill').val(lat)
            jQuery(inputElement).closest('span').find('.long_fill').val(lng)
            jQuery(inputElement).closest('span').find('.city_fill').val(city)
            jQuery(inputElement).closest('span').find('.district_fill').val(district)
            jQuery.ajax({
                type: 'POST',
                url: '/map/insert',
                data: {
                    place: val,
                    lat,
                    lng,
                    city,
                    district,
                }
            });
        } else {
            console.log('error' + results);
      }
    });
    jQuery(resultElement).html('');
}

function delay(callback, ms) {
    var timer = 0;
    return function() {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}

document.addEventListener("click", (evt) => {
    let targetEl = evt.target.className;
    if(targetEl != 'place_google_suggest' && jQuery('.result-place-search p').length > 0) {
        jQuery('.result-place-search').html('')
    }
});




