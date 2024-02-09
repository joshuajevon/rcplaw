function contactUs(e) {
    e.preventDefault();

    const inputFirstName = $("#first_name");
    let valueFirstName = inputFirstName.val();
    const errorFirstName = $("#error-first-name");

    const inputLastName = $("#last_name");
    let valueLastName = inputLastName.val();
    const errorLastName = $("#error-last-name");

    const inputEmail = $("#email1");
    let valueEmail = inputEmail.val();
    const errorEmail = $("#error-email");

    const inputSubject = $("#subject");
    let valueSubject = inputSubject.val();
    const errorSubject = $("#error-subject");

    const inputMessage = $("#mail");
    let valueMessage = inputMessage.val();
    const errorMessage = $("#error-message");

    const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    let isFirstNameValid = false;
    let isLastNameValid = false;
    let isEmailValid = false;
    let isSubjectValid = false;
    let isMessageValid = false;

    const contactValidationMessage = $("#contact-validation-message");

    contactValidationMessage.text("");

    // Check if first name is empty
    if (valueFirstName === "") {
        inputFirstName.css("border-color", "#BB2825");
        errorFirstName.text("Nama depan harus diisi");
        isFirstNameValid = false;
    } else {
        inputFirstName.css("border-color", "#6f7748");
        errorFirstName.text("");
        isFirstNameValid = true;
    }

    // Check if last name is empty
    if (valueLastName === "") {
        inputLastName.css("border-color", "#BB2825");
        errorLastName.text("Nama belakang harus diisi");
        isLastNameValid = false;
    } else {
        inputLastName.css("border-color", "#6f7748");
        errorLastName.text("");
        isLastNameValid = true;
    }

    // Check if email is empty
    if (valueEmail === "") {
        inputEmail.css("border-color", "#BB2825");
        errorEmail.text("Alamat email harus diisi");
        isEmailValid = false;
    } else {
        // check if email is valid format
        if (regexEmail.test(valueEmail)) {
            // Email is valid
            inputEmail.css("border-color", "#6f7748");
            errorEmail.text("");
            isEmailValid = true;
        } else {
            // Email is not valid
            inputEmail.css("border-color", "#BB2825");
            errorEmail.text("Alamat email tidak valid");
            isEmailValid = false;
        }
    }

    // check if subject is empty
    if (valueSubject === "") {
        inputSubject.css("border-color", "#BB2825");
        errorSubject.text("Subjek harus diisi");
        isSubjectValid = false;
    } else {
        inputSubject.css("border-color", "#6f7748");
        errorSubject.text("");
        isSubjectValid = true;
    }

    // check if message is empty
    if (valueMessage === "") {
        inputMessage.css("border-color", "#BB2825");
        errorMessage.text("Pesan harus diisi");
        isMessageValid = false;
    } else {
        inputMessage.css("border-color", "#6f7748");
        errorMessage.text("");
        isMessageValid = true;
    }

    if (isFirstNameValid && isLastNameValid && isEmailValid && isSubjectValid && isMessageValid) {
        $("#contact-submit-button")
            .html(
                "<svg class='animate-spin h-5 w-5 text-white' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg> Mengirimkan"
            )
            .addClass("opacity-50 pointer-events-none");

        const formData = $("#form-contact-us").serialize(); // Serialize the form data

        $.ajax({
            type: "POST",
            url: "/contact", // Update this with the correct route
            data: formData,
            success: function (response) {
                // Handle a successful response (e.g., show a success message)
                if (response.success) {
                    // Clear form fields if needed
                    $("#form-contact-us")[0].reset();

                    // Display a success message to the user
                    contactValidationMessage
                        .text(response.message)
                        .css("color", "#6f7748");

                    // Change submit button to default
                    $("#contact-submit-button")
                        .html("Kirim")
                        .removeClass("opacity-50 pointer-events-none");
                } else {
                    // Handle errors if necessary
                    contactValidationMessage
                        .text(
                            "Terjadi kesalahan saat mengirimkan formulir, silakan coba lagi."
                        )
                        .css("color", "rgb(153, 27, 27)");

                    // Change submit button to default
                    $("#contact-submit-button")
                        .html("Submit")
                        .removeClass("opacity-50 pointer-events-none");
                }
            },
            error: function () {
                // Handle AJAX errors if necessary
                contactValidationMessage
                    .text(
                        "Terjadi kesalahan saat mengirimkan formulir, silakan coba lagi."
                    )
                    .css("color", "rgb(153, 27, 27)");

                // Change submit button to default
                $("#contact-submit-button")
                    .html("Submit")
                    .removeClass("opacity-50 pointer-events-none");
            },
        });
    }
}
