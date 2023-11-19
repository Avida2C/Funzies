<h3 class="border-bottom border-2 border-danger pb-2">Account Details</h3>
<!-- Account Details Section -->
<div class="mt-4">
    <!-- Account Verification Alert -->
    <div class="alert alert-warning rounded-0" role="alert" id="verificationAlert">
        Your account is not verified. <a href="#" class="alert-link">Click here</a> to resend the
        verification email.
    </div>
</div>

<!-- Form to Update Full Name and Contact Number -->
<form method="POST" class="form mt-3 px-4">
    <!-- Full Name -->
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name:</label>
        <input type="text" class="form-control rounded-0" id="firstname" name="firstname" value="Jane" required>
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name:</label>
        <input type="text" class="form-control rounded-0" id="lastname" name="lastname" value="Doe" required>
    </div>
    <!-- Mobile Number -->
    <div class="mb-3">
        <label for="mobilenumber" class="form-label">Mobile Number</label>
        <input type="text" class="form-control rounded-0" id="mobilenumber" name="mobilenumber" value="+356 12312312"
            required>
    </div>

    <!-- Submit Button for Updating Details -->
    <button class="btn btn-danger rounded-0 mb-4">Update Details</button>
</form>

<!-- Form to Update Email Address -->
<form method="POST" class="form mt-3 px-4">
    <!-- Email Address -->
    <div class="mb-3">
        <label for="emailAddress" class="form-label">Email Address</label>
        <input type="email" class="form-control rounded-0" id="emailAddress" name="emailAddress"
            value="janedoe@example.com" required>
    </div>
    <!-- Submit Button for Updating Email -->
    <button class="btn btn-danger rounded-0 mb-4">Update Email</button>
</form>

<!-- Form to Change Password -->
<form method="POST" class="form mt-3 px-4">
    <div class="mb-3">
        <label for="currentPassword" class="form-label">Current Password</label>
        <input type="password" class="form-control rounded-0" id="currentPassword" name="currentPassword"
            placeholder="Enter current password" required>
    </div>
    <div class="mb-3">
        <label for="newPassword" class="form-label">New Password</label>
        <input type="password" class="form-control rounded-0" id="newPassword" name="newPassword"
            placeholder="Enter new password" required>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control rounded-0" id="confirmPassword" name="confirmPassword"
            placeholder="Confirm new password" required>
    </div>
    <!-- Submit Button for Changing Password -->
    <button class="btn btn-danger rounded-0 mb-4">Change Password</button>
</form>