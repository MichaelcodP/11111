function submitForm(event) {
	event.preventDefault(); // Забороняємо стандартну відправку форми

	var form = document.querySelector('#book-form form');
	var formData = new FormData(form);

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'send_booking.php');
	xhr.onload = function () {
		if (xhr.status === 200) {
			var response = xhr.responseText;
			displayPopup(response);
		} else {
			displayPopup('Помилка при бронюванні.');
		}
	};
	xhr.send(formData);
}

function displayPopup(message) {
	var popup = document.getElementById('popup');
	var popupContent = document.getElementById('popup-content');

	popupContent.innerHTML = message;
	popup.style.display = 'block';
}

function closePopup() {
	var popup = document.getElementById('popup');
	popup.style.display = 'none';
}

// Отримуємо елемент форми
var form = document.querySelector('#book-form form');

// Додаємо обробник події на відправку форми
form.addEventListener('submit', function (event) {
	submitForm(event);
});

// Отримуємо елементи форми
var destinationInput = document.querySelector('#book-form input[name="destination"]');
var dateInput = document.querySelector('#book-form input[name="date"]');
var travelersInput = document.querySelector('#book-form input[name="travelers"]');

// Отримуємо всі блоки з пунктами призначення
var destinationBoxes = document.querySelectorAll('.destination .box');

// Додаємо обробник події на кожен блок з пунктом призначення
destinationBoxes.forEach(function (box) {
	box.addEventListener('click', function () {
		// Отримуємо значення назви місця та кількості мандрівників з вибраного блоку
		var destination = this.querySelector('h3').textContent;
		var travelers = this.querySelector('p').textContent;

		// Заповнюємо поля форми з вибраними значеннями
		destinationInput.value = destination;
		travelersInput.value = travelers;
	});
});
