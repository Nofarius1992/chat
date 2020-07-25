// Открыть модальное окно контактов
btnOpenContact.onclick = function() {
	var inOut = document.querySelector("#in_out");
		inOut.style.display = "none";
	var contactsModal = document.querySelector("#contacts_modal");
	    contactsModal.style.display = "block";
}

// Закрыть модальное окно контактов
btnCloseContact.onclick = function() {
	var contactsModal = document.querySelector("#contacts_modal");
    contactsModal.style.display = "none";
}

// Открыть модальное окно входа выхода
btnOpenLogOut.onclick = function() {
	var contactsModal = document.querySelector("#contacts_modal");
		contactsModal.style.display = "none";
	var logOutModal = document.querySelector("#in_out");
	    logOutModal.style.display = "block";
}

// Закрыть модальное окно входа выхода
btnCloseLogOut.onclick = function() {
	var contactsModal = document.querySelector("#in_out");
    contactsModal.style.display = "none";
}
