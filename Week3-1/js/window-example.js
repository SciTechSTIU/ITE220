var myWindow = {
	screenx: window.screenX,
	screeny: window.screenY,
	screenHeight: window.screen.height,
	screenWidth: window.screen.width,
	locationn: window.location.pathname,

	render: function() {
		var ele = document.getElementById("location");
		ele.value = this.locationn;

		var eleX = document.getElementById("sx");
		eleX.value = this.screenx;

		var eleY = document.getElementById("sy");
		eleY.value = this.screeny;

		var eleH = document.getElementById("sh");
		eleH.value = this.screenHeight;
		
		var eleW = document.getElementById("sw");
		eleW.value = this.screenWidth;
	}
};


myWindow.render();