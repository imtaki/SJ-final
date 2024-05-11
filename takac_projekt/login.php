<?php
    include('partials/header.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        header('Location: admin.php');
   }
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
    <section id="kontaktcont" class="container">
        <div class="row">
            <div class="col-100 text-center">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" class="form-control" placeholder="Vaše meno" required>
                    <input type="text" name="password" class="form-control" placeholder="Vaše heslo" required>
                    <button type="submit"  name ="user-login" class="btn btn-primary mt-3 ">Odoslať</button>
                </form>
                <?php
            
            if(isset($_POST['user_login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $user = new User();
                $login_success = $user->login($email,$password);
                if($login_success == true){
                    header('Location: admin.php');
                    exit;
                }else{
                    echo 'Nesprávne meno alebo heslo';
                }
            }
        
        ?>
            </div>
        </div>
    </section>
    <div class="extra-space"></div>
</main>

<?php
    include('partials/footer.php');
?>