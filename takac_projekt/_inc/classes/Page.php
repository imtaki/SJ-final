
<?php

class page
{
    private $page_name;

    public function __construct($page_name)
    {
        $this->page_name = $page_name;
    }

    function add_title()
    {
        $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
        switch ($page_name) {
            case 'index':
                echo "<title>Domov</title>";
                echo "<link rel='stylesheet' type='text/css' href='index.css'>";
                break;
            case 'o_nas':
                echo "<title>O nás</title>";
                break;
            case 'sluzby':
                echo "<title>Služby</title>";
                break;
            case 'galeria':
                echo "<title>Galeria</title>";
                break;
            case 'kontakt':
                echo "<title>Kontaktuj nás</title>";
                break;
        }
    }

    function add_scripts()
    {
        echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>');
        echo('<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>');
        echo('<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>');
        echo('<script src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script>');
        echo('<script> window.start.init({Palette:"palette1",Mode:"banner bottom",Theme:"block",Message:"This website uses cookies to ensure you get the best experience on our website.",Time:"10",})</script>');

        // Include the combined JavaScript file
        echo('<script src="/SJ-final/takac_projekt/js/index.js"></script>');
    }
}

?>

