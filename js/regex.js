const inputs = document.querySelectorAll('input');

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
        //creates class valid in the input 
        field.classList.add('valid');
        field.classList.remove('invalid');
        return true;
    } else {
        //if it does not match: creates class invalid
        field.classList.add('invalid');
        field.classList.remove('valid');
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

    if (contactNameValid && contactEmailValid && contactSubjectValid) {
        return true;
    }
    return false;
});