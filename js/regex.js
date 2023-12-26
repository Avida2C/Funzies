const inputs = document.querySelectorAll('input');

// Define regex patterns for different input types.
const patterns = {
    name: /^[a-z A-Z]/,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,4})(\.[a-z]{2,4})?$/, 
    subject: /^[a-z A-Z\d]{5,30}$/,
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

inputs.forEach((input) => {
    //on keyup... 
    input.addEventListener('keyup', (e) => {
        //we're finding : name property of the field, while validating the input through the validate function which contains the RegEx against the field value
        //console.log(e.target.attributes.name.value);
        validate(e.target, patterns[e.target.attributes.name.value]);
    });
});

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