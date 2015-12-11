// display the calendar here
var hotelTable = document.getElementById("hotelCalendarTable");
var stringHTML = "<tr>";

var d = [];

for (var i = 0; i < 32; i++) {
	d[i] = i + 1;
}

for (var i = 0; i < 31; i++) {
	stringHTML += "<td>";
	stringHTML += d[i];
	stringHTML += "</td>";

	switch (d[i]) {
		case 8:
			stringHTML += "</tr><tr>"
			break;
		case 15:
			stringHTML += "</tr><tr>"
			break;
		case 22:
			stringHTML += "</tr><tr>"
			break;
		case 29:
			stringHTML += "</tr><tr>"
			break;
	}
}

stringHTML += "</tr>";

hotelTable.innerHTML += stringHTML;