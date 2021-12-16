$(function () {
    var countryElement = $(document).find('#country');
    var stateElement = $(document).find('#state');
    var cityElement = $(document).find('#city');

    if(countryElement.length){
        getCountries();
    }
    function getCountries(){
        var selected = '';
        $.ajax({
            url: "/laraworld/countries",
            method: "GET",
            success: function (res){
                var countries = "<option value=''>--Select Country--</option>";
                res.data.forEach(function (country) {
                    if(country.id === countryElement.data('value')){
                        selected = 'selected';
                    } else {
                        selected = '';
                    }
                    countries += "<option value='" + country.id + "' " + selected + ">" + country.name + "</option>";
                });
                countryElement.html(countries).trigger('change');
                if(countryElement.hasClass('select2')){
                    countryElement.select2();
                }
            }
        });
    }
    function getStates(countryId){
        var selected = null;
        $.ajax({
            url: "/laraworld/states?country_id=" + countryId,
            method: "GET",
            success: function (res) {
                var states = "<option value=''>--Select State--</option>";
                res.data.forEach(function (state) {
                    if(state.id === stateElement.data('value')){
                        selected = 'selected';
                    } else {
                        selected = '';
                    }
                    states += "<option value='" + state.id + "' " + selected + ">" + state.name + "</option>";
                });
                stateElement.html(states).trigger('change');
                if(stateElement.hasClass('select2')){
                    stateElement.select2();
                }
            }
        });
    }

    function getCities(stateId){
        var selected = null;
        $.ajax({
            url: "/laraworld/cities?state_id=" + stateId,
            method: "GET",
            success: function (res) {
                var cities = "<option value=''>--Select City--</option>";
                res.data.forEach(function (city) {
                    if(city.id === cityElement.data('value')){
                        selected = 'selected';
                    } else {
                        selected = '';
                    }
                    cities += "<option value='" + city.id + "' " + selected + ">" + city.name + "</option>";
                });
                cityElement.html(cities).trigger('change');
                if(cityElement.hasClass('select2')){
                    cityElement.select2();
                }
            }
        });
    }

    if($('#country').length && $('#state').length) {
        $(document).on('change', '#country', function () {
            getStates($(this).val());
        });
    }
    if($('#state').length && $('#city').length) {
        $(document).on('change', '#state', function () {
            getCities($(this).val());
        });
    }

});