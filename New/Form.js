const nameEl = document.querySelector('#name');
const registrationNoEl = document.querySelector('#registration-no');
const departmentWithSpecializationEl = document.querySelector('#department-with-specialization');
const batchEl = document.querySelector('#batch');
const usernameEl = document.querySelector('#username');
const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#password');
const confirmPasswordEl = document.querySelector('#confirm-password');

const form = document.querySelector('#signup');

const checkName = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const name = nameEl.value.trim();

    if (!isRequired(name)) {
        showError(nameEl, 'Name cannot be blank.');
    } else if (!isBetween(name.length, min, max)) {
        showError(nameEl, `Name must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(nameEl);
        valid = true;
    }
    return valid;
};

const checkRegistrationNo = () => {
    let valid = false;
    const min = 2,
        max = 15;
    const registrationNo = registrationNoEl.value.trim();
    if (!isRequired(registrationNo)) {
        showError(registrationNoEl, 'Mobile No. cannot be blank.');
    } else if (!isBetween(registrationNo.length, min, max)) {
        showError(registrationNoEl, `Mobile No. must be between ${min} and ${max} numbers.`)
    } else {
        showSuccess(registrationNoEl);
        valid = true;
    }
    return valid;
};

const checkDepartmentWithSpecialization = () => {

    let valid = false;

    const min = 5,
        max = 80;

    const departmentWithSpecialization = departmentWithSpecializationEl.value.trim();

    if (!isRequired(departmentWithSpecialization)) {
        showError(departmentWithSpecializationEl, 'Address cannot be blank');
    } else if (!isBetween(departmentWithSpecialization.length, min, max)) {
        showError(departmentWithSpecializationEl, `Address must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(departmentWithSpecializationEl);
        valid = true;
    }
    return valid;
};

const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {

    const formField = input.parentElement;

    formField.classList.remove('success');
    formField.classList.add('error');


    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {

    const formField = input.parentElement;


    formField.classList.remove('error');
    formField.classList.add('success');


    const error = formField.querySelector('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {

    e.preventDefault();


    let isNameValid = checkName(),
        isRegistrationNoValid = checkRegistrationNo(),
        isDepartmentWithSpecializationValid = checkDepartmentWithSpecialization(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isNameValid && isRegistratioNoValid && isDepartmentWithSpecializationValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid;


    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {

        if (timeoutId) {
            clearTimeout(timeoutId);
        }

        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'name':
            checkName();
            break;
        case 'registration-no':
            checkRegistrationNo();
            break;
        case 'department-with-specialization':
            checkDepartmentWithSpecialization();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
            default :
            alert(" Your appointment is booked")
    }
}));

