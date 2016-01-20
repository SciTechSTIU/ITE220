$(function(){
    unit = '';
    $('#location-title').html("Select scale and then the city");
    $('a.unit').on('click', function(e){
        e.preventDefault();
        if (this.text.toLowerCase() == 'celsius') {
            unit = '&units=metric';
            $('#location-title').html('Celsius');
        }
        else if (this.text.toLowerCase() == 'fahrenheit') {
            unit = '&units=imperial';
            $('#location-title').html('Fahrenheit');
        }
    });

    $('a.city').on('click', function(e){
        e.preventDefault();
        var city = this.text.toLowerCase();
        $.ajax({
            type: 'GET',
            url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + unit + '&appid=2de143494c0b295cca9337e1e96b00e0',
            success: function(data){
                $('#temp').html(data.main.temp);
            }
        });
    });
});