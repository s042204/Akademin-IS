<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2 class="card-title text-center">Register</h2>
                <div class="card-body py-md-4">
                    <form method="POST" action="register.php" _lpchecked="1">
                    <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="group" placeholder="Group" name="group">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm-password">
                        </div>

                        <label for="role">Choose a role:</label>
                        <select name="role" id="role">
                            <option value="Studentas">Studentas</option>
                            <option value="Destytojas">Destytojas</option>
                            <option value="Admin">Admin</option>
                        </select>

                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <button type="register.php" class="btn btn-primary">Create Account</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>