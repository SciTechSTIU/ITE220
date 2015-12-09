// JavaScript Document

var products = ['Stamford T-Shirt', 'Stamford Notebook', 'Stamford Wristband'];
var price = [10, 5, 1];
var total = price[0] + price[1] + price[2];
var netTotal = total - (total * 0.20);
var name = "Muhammad";



//Display purchased product to the screen
var productList = document.getElementById('productList')
productList.innerHTML +=  "<li>" + products[0] + ": $" + price[0] + "</li>"

var productList = document.getElementById('productList')
productList.innerHTML +=  "<li>" + products[1] + ": $" + price[1] + "</li>"

var productList = document.getElementById('productList')
productList.innerHTML +=  "<li>" + products[2] + ": $" + price[2] + "</li>"


//Display the total price
var totalPriceEle = document.getElementById('totalPrice');
totalPriceEle.textContent = "$" + netTotal;

//Code for Greeting according to the time of the Display
var time = new Date().getHours();
var greeting = document.getElementById('greeting');
if (time >= 18) {
	greeting.innerHTML = "Good Evening! " + name;
}
else if (time >= 12) {
	greeting.innerHTML = "Good Afternoon! " + name;
}
else if (time >= 0) {
	greeting.innerHTML = "Good Morning! " + name;
}
