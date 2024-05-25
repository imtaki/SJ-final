<?php
    include('partials/header.php');
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        header("Location: 404.php");
        exit();
    }
?>
<main>
    <br><br><br><br>
    <style>
        .extra-space {
            margin-bottom: 400px; 
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }
        .admin-table th, .admin-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .admin-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1 class="text-center">Admin rozhranie</h1>
                <?php
                    include('partials/admin-kontakt.php');
                ?>
            </div>
        </div>
        <div class="extra-space"></div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>