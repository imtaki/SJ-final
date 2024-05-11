<?php
    include('partials/header.php');
    $user_object = new User();
    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(isset($_POST['user_register'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Create an instance of the User class
            $user = new User();
            $register_success = $user->register($email, $password);
            if($register_success){
                header('Location: login.php');
                exit; 
            } else {
                echo 'Registrácia zlyhala. Skúste to prosím znova.';
            }
        }
    }
?>
?>
<style>
    .extra-space {
        margin-bottom: 200px; 
    }
</style>

<main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="kontaktcont" class="container">
        <div class="row">
            <div class="col-100 text-center">
                <h1>Registrácia</h1>
                <form action="" method="POST">
                    <input type="email" name="email" class="form-control" placeholder="Váš email" required>
                    <input type="password" name="password" class="form-control" placeholder="Vaše heslo" required>
                    <button type="submit" name="user_register" class="btn btn-primary mt-3">Registrovať sa</button>
                </form>
            </div>
        </div>
    </section>
    <div class="extra-space"></div>
</main>

<?php
    include('partials/footer.php');
?>