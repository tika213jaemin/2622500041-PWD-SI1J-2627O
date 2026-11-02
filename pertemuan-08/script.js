console.log("script.js berhasil dijalankan.");

const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

if (contactForm && formFeedback) {
    contactForm.addEventListener("submit", function(event) {
        event.preventDefault();

        if (!contactForm.checkValidity()) {
            contactForm.reportValidity();
            return;
        }

        const nama = document.getElementById("nama").value.trim();

        formFeedback.textContent =
            "Terima kasih, " + nama + "! Formulir berhasil diisi.";

        formFeedback.style.color = "#243b64";
        formFeedback.style.fontWeight = "bold";

        contactForm.reset();
    });
}
