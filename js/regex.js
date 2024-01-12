const inputs = document.querySelectorAll('input');

// Define regex patterns for different input types.
const patterns = {
    name: /^[a-zA-Z]+$/,
    surname: /^[a-zA-Z]+$/,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/, 
    subject: /^[a-z A-Z\d]{5,30}$/,
    password:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[a-zA-Z\d@$!%*?&]{8,}$/,
    contactnumber:/^\d{8}$/,
    //regex ends with , if it continues, the last one does not require a coma , 
    //spaces between numbers and characters will make the regex invalid
};

function validate(field, regex) {
    //console.log(regex.test(field.value));
    //checks if input is valid
    if (regex.test(field.value) == true) {
        // If the field value matches the pattern, add 'valid' class and remove 'invalid'.
        field.classList.add('valid');
        field.classList.remove('invalid');
        // Return true for valid input.
        return true;
    } else {
        // If the field value doesn't match, add 'invalid' class and remove 'valid'.
        field.classList.add('invalid');
        field.classList.remove('valid');
        // Return false for invalid input.
        return false;
    }
}



//JQuery onSubmit
$('#ContactMeform').on('submit', function () {
    var contactNameValid = validate($('#contactName')[0], patterns.name);
    var contactEmailValid = validate($('#contactEmail')[0], patterns.email);
    var contactSubjectValid = validate($('#contactSubject')[0], patterns.subject);
    // If all fields are valid, allow the form to be submitted.
    if (contactNameValid && contactEmailValid && contactSubjectValid) {
        return true;
    }
    // If any field is invalid, prevent form submission.
    return false;
});

$('#SignUpform').on('submit', function () {
    var SignUpNameValid = validate($('#name-input')[0], patterns.name);
    var SignUpSurnameValid = validate($('#surname-input')[0], patterns.surname);
    var SignUpEmailValid = validate($('#email-input')[0], patterns.email);
    var SignUpPasswordValid = validate($('#password-input')[0], patterns.password);
    var SignUpContactNumberValid = validate($('#contactnumber-input')[0], patterns.contactnumber);
    // If all fields are valid, allow the form to be submitted.
    if (SignUpNameValid && SignUpSurnameValid && SignUpEmailValid && SignUpPasswordValid && SignUpContactNumberValid) {
        return true;
    }
    // If any field is invalid, prevent form submission.
    return false;
});

$('#accountPassword').on('submit', function () {
    var accountnewPasswordValid = validate($('#newPassword')[0], patterns.password);
    var accountconfirmPasswordValid = validate($('#confirmPassword')[0], patterns.password);
    // If all fields are valid, allow the form to be submitted.
    if (accountnewPasswordValid && accountconfirmPasswordValid) {
        return true;
    }
    // If any field is invalid, prevent form submission.
    return false;
});

$('#accountEmail').on('submit', function () {
    var accountEmailValid = validate($('#email-input')[0], patterns.email);
    // If all fields are valid, allow the form to be submitted.
    if (accountEmailValid) {
        return true;
    }
    // If any field is invalid, prevent form submission.
    return false;
});

$('#accountDetails').on('submit', function () {
    var AccountNameValid = validate($('#firstname')[0], patterns.name);
    var AccountSurnameValid = validate($('#lastname')[0], patterns.surname);
    var AccountContactNumberValid = validate($('#mobilenumber')[0], patterns.contactnumber);
    // If all fields are valid, allow the form to be submitted.
    if (AccountNameValid && AccountSurnameValid && AccountContactNumberValid) {
        return true;
    }
    // If any field is invalid, prevent form submission.
    return false;
});