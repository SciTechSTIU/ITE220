var game = {
	answer: Math.floor((Math.random() * 100) + 1),
	
	init: function() {
		var self = this;
		
		// Number 0
		var elZero = document.getElementById('zero');
		elZero.addEventListener('click', function() {
			self.click(0);
		}, false);

		// Number 1
		var elOne = document.getElementById('one');
		elOne.addEventListener('click', function() {
			self.click(1);
		}, false);

		// Number 2
		var elTwo = document.getElementById('two');
		elTwo.addEventListener('click', function() {
			self.click(2);
		}, false);

		// Number 3
		var elThree = document.getElementById('three');
		elThree.addEventListener('click', function() {
			self.click(3);
		}, false);

		// Number 4
		var elFour = document.getElementById('four');
		elFour.addEventListener('click', function() {
			self.click(4);
		}, false);

		// Number 5
		var elFive = document.getElementById('five');
		elFive.addEventListener('click', function() {
			self.click(5);
		}, false);

		// Number 6
		var elSix = document.getElementById('six');
		elSix.addEventListener('click', function() {
			self.click(6);
		}, false);

		// Number 7
		var elSeven = document.getElementById('seven');
		elSeven.addEventListener('click', function() {
			self.click(7);
		}, false);

		// Number 8
		var elEight = document.getElementById('eight');
		elEight.addEventListener('click', function() {
			self.click(8);
		}, false);

		// Number 9
		var elNine = document.getElementById('nine');
		elNine.addEventListener('click', function() {
			self.click(9);
		}, false);


		// Guess
		var elGuess = document.getElementById('guess');
		elGuess.addEventListener('click', function() {
			self.checkAnswer(self);
		}, false);
	},
	
	click: function(value) {
		console.log(value + " clicked.");
		var userValueEle = document.getElementById('userValue');
		userValueEle.value += value;
	},

	checkAnswer: function(self) {
		var userValueEle = document.getElementById('userValue');
		if (self.answer == userValueEle.value) {
			alert("Congratulations! Correct answer");	
		} else if (self.answer > userValueEle.value) {
			alert("Guessing number is less than the correct number. Please try guessing again.");
			userValueEle.value = null;
		} else if (self.answer < userValueEle.value) {
			alert("Guessing number is more than the correct number. Please try guessing again.");
			userValueEle.value = null;
		}
	}
};

game.init();
