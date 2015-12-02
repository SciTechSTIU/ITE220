var hotel = {
	name: 'Hotel Transilvania',
	rooms: 40,
	booked: 25,

	checkAvailability: function() {
		return this.rooms - this.booked;
	}
};

var hotel_name = document.getElementById('hotelName');
var rooms_free = document.getElementById('rooms');

hotel_name.textContent = hotel.name;
rooms_free.textContent = hotel.checkAvailability();

