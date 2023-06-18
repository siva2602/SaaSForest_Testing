<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close"><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="1.29289" y1="15.435" x2="15.435" y2="1.29289" stroke="black" stroke-width="2" />
                <line x1="1.70711" y1="2.43503" x2="15.8492" y2="16.5772" stroke="black" stroke-width="2" />
            </svg></span>
        <h6 style="text-align: center;">LOGIN</h6>
            @csrf
            <span class="text-danger" id="error_invalid"></span>
            <div class="form-group m-3">
                <label for="usr">Email</label>
                <input type="text" name="email" class="form-control" id="email" required>
                <span class="text-danger" id="error_email"></span>
            </div>
            <div class="form-group m-3">
                <label for="pwd">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <span class="text-danger" id="error_password"></span>
            </div>

            <div class="form-group m-3">
                <input type="button" class="login-button" value="Login" onclick="login()">
            </div>
    </div>
</div>
