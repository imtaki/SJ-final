<?php
    include('partials/header.php');
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        header("Location: 404.php");
    }
?>
<main>
    <br>
    <br>
    <br>
    <br>
    <style>
        .extra-space {
            margin-bottom: 400px; 
        }
    </style>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>
            </div>
        </div>
        <?php
            $contact_object = new Contact();
            $contacts = $contact_object->select();
            if(isset($_POST['delete_contact'])) {
                $contact_id = $_POST['delete_contact'];
                $contact_object->delete($contact_id);
                header( 'Location: ' . $_SERVER['PHP_SELF']);
                exit();
            }
            echo '<table class="admin-table">';
            echo '<table class="admin-table">';
            foreach($contacts as $c) {
                echo '<tr>';
                echo '<td>' . $c->email . '</td>'; 
                echo '<td>' . $c->message . '</td>'; 
                echo '</tr>';
            }
            echo '</table>';
            echo '<td>
                        <form action = "" method = "POST">
                            <button type ="submit" name= "delete_contact" value="'.$c->id.'"'.'>Vymazat</button>
                        </form>
                        </td>';
            echo '</tr>';
        ?>
        <div class="extra-space"></div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>