// Открыть модальное окно контактов
var btnOpenContact = document.querySelector(".contacts");
btnOpenContact.onclick = function() {
	var contactsModal = document.querySelector("#contacts_modal");
	    contactsModal.style.display = "block";
}

// Закрыть модальное окно контактов
var btnCloseContact = document.querySelector(".close--contacts");
btnCloseContact.onclick = function() {
	var contactsModal = document.querySelector("#contacts_modal");
    contactsModal.style.display = "none";
}

// Открыть модальное окно входа выхода
var btnOpenLogOut = document.querySelector(".log_out");
btnOpenLogOut.onclick = function() {
	var logOutModal = document.querySelector("#in_out");
	    logOutModal.style.display = "block";
}

// Закрыть модальное окно входа выхода
var btnCloseContact = document.querySelector(".close--in");
btnCloseContact.onclick = function() {
	var contactsModal = document.querySelector("#in_out");
    contactsModal.style.display = "none";
}
