<h3 class="border-bottom border-2 border-danger pb-2">Addresses</h3>
<!-- Addresses Section -->
<div class="mt-4">
    <h3 class="mb-3 product-card-font fs-5">Your Addresses</h3>

    <!-- List of Addresses -->
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card shadow-sm border-0 rounded-0">
                <div class="card-body">
                    <h5 class="card-title">Jane Doe</h5>
                    <p class="card-text">
                        0123, House name,<br>
                        Street,<br>
                        Town, ZPC 001 <br>
                        Region <br>
                    </p>
                    <a href="#" class="btn btn-primary btn-sm rounded-0">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm rounded-0">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Button to Trigger Add New Address Modal -->
    <button type="button" class="btn btn-success mt-2 rounded-0" data-bs-toggle="modal"
        data-bs-target="#addAddressModal">
        Add New Address
    </button>

    <!-- Add New Address Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Add New Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="firstname">First Name:<span class="text-danger">*</span></label>
                            <input class="w-100 p-1" type="text" id="firstname" name="firstname" required
                                autocomplete="firstname">
                        </div>
                        <div class="mb-4">
                            <label for="lastname">Last Name:<span class="text-danger">*</span></label>
                            <input class="w-100 p-1" type="text" id="lastname" name="lastname" required
                                autocomplete="lastname">
                        </div>
                        <div class="my-3">
                            <select name="region" id="region-select" class="form rounded-0 p-1" style="width: 100%;"
                                required autocomplete="region" required>
                                <option selected>Malta</option>
                                <option value="1">Gozo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="address-input">Address:<span class="text-danger">*</span></label>
                            <input class="w-100 p-1" type="text" id="address-input" name="address-input" required
                                autocomplete="address-input">
                        </div>
                        <div class="mb-3">
                            <label for="city-input">City:<span class="text-danger">*</span></label>
                            <input class="w-100 p-1" type="text" id="city-input" name="city" required>
                        </div>
                        <div class="mb-3">
                            <label for="zipcode-input">ZIP Code:<span class="text-danger">*</span></label>
                            <input class="w-100 p-1" type="text" id="zipcode-input" name="zipcode" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary rounded-0">Save Address</button>
                </div>
            </div>
        </div>
    </div>
</div>