document.getElementById('userForm').addEventListener('submit', function (event) {
	event.preventDefault(); // Забороняємо стандартну відправку форми

	var emailInput = document.getElementById('email');
	var msgElement = document.getElementById('msg');

	// Виконуємо AJAX-запит для відправки форми без перезавантаження сторінки
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'send_email.php');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function () {
		if (xhr.status === 200) {
			// Відображаємо повідомлення у <span>
			msgElement.textContent = xhr.responseText;

			// Приховуємо повідомлення через 5 секунд (5000 мс)
			setTimeout(function () {
				msgElement.style.display = 'none';
			}, 5000);
		} else {
			msgElement.textContent = 'Помилка при відправці листа.';
		}
	};
	xhr.send('email=' + encodeURIComponent(emailInput.value));
});
