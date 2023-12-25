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
    $("#productCategory").val(category);
    $("#productPrice").val(price);
    $("#productStock").val(stock);
    $("#productBrand").val(brand);
}

function setModalUserFields(id, name, surname, email, number, role, password) {
    $("#userID").val(id);
    $("#userName").val(name);
    $("#userSurname").val(surname);
    $("#userEmail").val(email);
    $("#userNumber").val(number);
    $("#userRole").val(role);
    $("#userPassword").val(password);
}

function clearModalProductFields() {
    $("#productID").val();
    $("#productName").val();
    $("#productDescription").val();
    $("#productPrice").val();
    $("#productStock").val();
}

function enableOrderEdit(id) {
    $('#orderstatus'+id).prop("disabled", false);
    $('#btnOrderEdit'+id).addClass("d-none");
    $('#btnOrderSave'+id).removeClass("d-none");
}