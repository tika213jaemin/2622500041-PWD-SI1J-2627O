
console.log("script.js berhasil dijalankan.");

const contactForm = document.getElementById("contactForm");

if (contactForm) {
    contactForm.addEventListener("submit", function(event) {

        if (!contactForm.checkValidity()) {
            event.preventDefault();
            contactForm.reportValidity();
            return;
        }

        console.log("Formulir berhasil divalidasi dan dikirim ke PHP.");

    });
}
