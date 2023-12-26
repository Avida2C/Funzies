// Function to set fields in the Role modal with existing data.
function setModalRoleFields(id, name, details) {
    $("#roleName").val(name);
    $("#roleDetails").val(details);
    $("#roleID").val(id);
}

// Function to clear all fields in the Role modal.
function clearModalRoleFields() {
    $("#roleName").val("");
    $("#roleDetails").val("");
    $("#roleID").val("");
}

// Function to set fields in the Brand modal with existing data.
function setModalBrandFields(id, name, details) {
    $("#brandName").val(name);
    $("#brandDetails").val(details);
    $("#brandID").val(id);
}

// Function to clear all fields in the Brand modal.
function clearModalBrandFields() {
    $("#brandName").val("");
    $("#brandDetails").val("");
    $("#brandID").val("");
    $("#brandLogo").val("");
}

// Function to set fields in the Category modal with existing data.
function setModalCategoryFields(id, name, details) {
    $("#categoryName").val(name);
    $("#categoryDetails").val(details);
    $("#categoryID").val(id);
}

// Function to clear all fields in the Category modal.
function clearModalCategoryFields() {
    $("#categoryName").val("");
    $("#categoryDetails").val("");
    $("#categoryID").val("");
}

// Function to set fields in the Order Status modal with existing data.
function setModalOrderStatusFields(id, name, details) {
    $("#orderStatusName").val(name);
    $("#orderStatusID").val(id);
}

// Function to clear all fields in the Order Status modal.
function clearModalOrderStatusFields() {
    $("#orderStatusName").val("");
    $("#orderStatusID").val("");
}

// Function to set fields in the Product modal with existing data.
function setModalProductFields(id, name, description, shortDescription, category, price, stock, brand) {
    $("#productID").val(id);
    $("#productName").val(name);
    $("#productDescription").val(description);
    $("#productCategory").val(category);
    $("#productPrice").val(price);
    $("#productStock").val(stock);
    $("#productBrand").val(brand);
}

// Function to set fields in the User modal with existing data.
function setModalUserFields(id, name, surname, email, number, role, password) {
    $("#userID").val(id);
    $("#userName").val(name);
    $("#userSurname").val(surname);
    $("#userEmail").val(email);
    $("#userNumber").val(number);
    $("#userRole").val(role);
    $("#userPassword").val(password);
}

// Function to clear all fields in the Product modal.
function clearModalProductFields() {
    $("#productID").val();
    $("#productName").val();
    $("#productDescription").val();
    $("#productPrice").val();
    $("#productStock").val();
}

// Function to enable editing of an order by unlocking the fields and showing the save button.
function enableOrderEdit(id) {
    $('#orderstatus'+id).prop("disabled", false);
    $('#btnOrderEdit'+id).addClass("d-none");
    $('#btnOrderSave'+id).removeClass("d-none");
}