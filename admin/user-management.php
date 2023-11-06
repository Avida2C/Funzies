<?php require '../functions.php'; ?>

<?php require_once 'include/header.php'; 
require_once 'include/navbar.php';?>

<div class="container-fluid col-10">
    <div class="row justify-content-between">
        <?php require_once '../admin/include/sidebar.php';?>

        <div class="col py-2 shadow-sm bg-white">

            <div class="container mt-3">
                <h2>User Management</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Role</th>
                            <th>Joined Date</th>
                            <th>Verified</th>
                            <th>Password</th>
                            <th>Contact Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>johndoe@example.com</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Customer</td>
                            <td>2020-05-16</td>
                            <td>Yes</td>
                            <td>••••••••</td>
                            <td>(123) 456-7890</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>janedoe@example.com</td>
                            <td>Jane</td>
                            <td>Doe</td>
                            <td>Customer</td>
                            <td>2021-03-23</td>
                            <td>No</td>
                            <td>••••••••</td>
                            <td>(987) 654-3210</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>mike.smith@example.net</td>
                            <td>Mike</td>
                            <td>Smith</td>
                            <td>Employee</td>
                            <td>2022-02-10</td>
                            <td>Yes</td>
                            <td>••••••••</td>
                            <td>(555) 236-7890</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>sarah.connor@futuremail.com</td>
                            <td>Sarah</td>
                            <td>Connor</td>
                            <td>Customer</td>
                            <td>2023-01-01</td>
                            <td>Yes</td>
                            <td>••••••••</td>
                            <td>(321) 456-9870</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>alex.mercer@prototype.com</td>
                            <td>Alex</td>
                            <td>Mercer</td>
                            <td>Admin</td>
                            <td>2023-03-15</td>
                            <td>No</td>
                            <td>••••••••</td>
                            <td>(789) 012-3456</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once '../admin/include/footer.php'; ?>