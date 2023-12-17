function setModalRoleFields(id, name, details) {
    $("#roleName").val(name);
    $("#roleDetails").val(details);
    $("#roleID").val(id);
}

function clearModalRoleFields() {
    $("#roleName").val("");
    $("#roleDetails").val("");
    $("#roleID").val("");
}

function setModalBrandFields(id, name, details) {
    $("#brandName").val(name);
    $("#brandDetails").val(details);
    $("#brandID").val(id);
}

function clearModalBrandFields() {
    $("#brandName").val("");
    $("#brandDetails").val("");
    $("#brandID").val("");
    $("#brandLogo").val("");
}

function setModalCategoryFields(id, name, details) {
    $("#categoryName").val(name);
    $("#categoryDetails").val(details);
    $("#categoryID").val(id);
}

function clearModalCategoryFields() {
    $("#categoryName").val("");
    $("#categoryDetails").val("");
    $("#categoryID").val("");
}

function setModalOrderStatusFields(id, name, details) {
    $("#orderStatusName").val(name);
    $("#orderStatusID").val(id);
}

function clearModalOrderStatusFields() {
    $("#orderStatusName").val("");
    $("#orderStatusID").val("");
}

function setModalReviewStatusFields(id, name) {
    $("#reviewStatusName").val(name);
    $("#reviewStatusID").val(id);
}

function clearModalReviewStatusFields() {
    $("#reviewStatusName").val("");
    $("#reviewStatusID").val("");
}

function setModalProductFields(id, name, description, shortDescription, category, price, stock, brand) {
    $("#productID").val(id);
    $("#productName").val(name);
    $("#productDescription").val(description);
    $("#productShortDescription").val(shortDescription);
    $("#productCategory").val(category);
    $("#productPrice").val(price);
    $("#productStock").val(stock);
    $("#productBrand").val(brand);
}

function setModalUserFields(id, name, surname, email, number, role) {
    $("#userID").val(id);
    $("#userName").val(name);
    $("#userSurname").val(surname);
    $("#userEmail").val(email);
    $("#userNumber").val(number);
    $("#userRole").val(role);
}

function clearModalProductFields() {
    $("#productID").val();
    $("#productName").val();
    $("#productDescription").val();
    $("#productShortDescription").val();
    $("#productPrice").val();
    $("#productStock").val();
}