<div id="modal-login" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal">
        <h2>Hei, Welcome to login form</h2>
        <div class="content">
            <form action="data/login-procces.php" method="POST">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" required />
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="log" value="Login" />
                <small>* this form login only for admin to manage system</small>
            </form>
        </div>
    </div>
</div>