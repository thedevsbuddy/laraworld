$(function () {
    if($('#country').length){
        getCountries();
    }
    function getCountries(){
        $.ajax({
            url: "/world/countries",
            method: "GET",
            success: function (res) {
                var countries = '';
                res.data.forEach(function (country) {
                    countries += "<option value='" + country.id + "'>" + country.name + "</option>";
                });
                $(document).find('#country').html(countries).trigger('change');
            }
        });
    }
    function getStates(countryId){
        $.ajax({
            url: "/world/states?country_id=" + countryId,
            method: "GET",
            success: function (res) {
                var states = '';
                res.data.forEach(function (state) {
                    states += "<option value='" + state.id + "'>" + state.name + "</option>";
                });
                $(document).find('#state').html(states).trigger('change');
            }
        });
    }

    function getCities(stateId){
        $.ajax({
            url: "/world/cities?state_id=" + stateId,
            method: "GET",
            success: function (res) {
                var cities = '';
                res.data.forEach(function (city) {
                    cities += "<option value='" + city.id + "'>" + city.name + "</option>";
                });
                $(document).find('#city').html(cities).trigger('change');
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