console.log("script.js berhasil dijalankan.");

                const contactForm = document.getElementById("contactForm");
                const formFeedback = document.getElementById("formFeedback");
                const namaInput = document.getElementById("nama");
                const emailInput = document.getElementById("email");
                const tanggalInput = document.getElementById("tanggal");
                const jenisKelaminInput = document.getElementById("jenis_kelamin");
                const alamatInput = document.getElementById("alamat");
                const pesanInput = document.getElementById("pesan");

contactForm.addEventListener("submit", function(event) {
        event.preventDefault();

                formFeedback.className = "form-feedback-error";

                const nama = namaInput.value.trim();

                if (nama.length < 3 || nama.length > 50) {
                    formFeedback.textContent =
                        "Nama lengkap harus 3 sampai 50 karakter.";
                    return;
            }

                    const email = emailInput.value.trim();
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailPattern.test(email)) {
                    formFeedback.textContent =
                        "Masukkan alamat email yang valid.";
                    return;
             }

                if (tanggalInput.value === "") {
                    formFeedback.textContent =
                        "Tanggal lahir harus diisi.";
                    return;
             }

                if (jenisKelaminInput.value === "") {
                    formFeedback.textContent =
                        "Pilih jenis kelamin.";
                    return;
            }

                if (alamatInput.value.trim() === "") {
                    formFeedback.textContent =
                        "Alamat harus diisi.";
                    return;
            }

                if (pesanInput.value.trim() === "") {
                    formFeedback.textContent =
                        "Alasan mendaftar harus diisi.";
                    return;
             }

                    formFeedback.textContent =
                        "Form berhasil divalidasi! Terima kasih, " + nama + ".";

                    formFeedback.className = "form-feedback-success";

                    alert("Pendaftaran berhasil divalidasi!");

                    contactForm.reset();
    });

contactForm.addEventListener("input", function() {
            formFeedback.textContent = "";
            formFeedback.className = "";
});
