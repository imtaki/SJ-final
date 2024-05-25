<?php
include_once('partials/header.php');

$contact_object = new Contact();

if(isset($_POST['edit_contact'])) {
    $edit_contact_id = $_POST['edit_contact'];
    $contact_data = $contact_object->select_single($edit_contact_id);

}

if($contact_data) {
    $name = $contact_data->name;
    $email = $contact_data->email;
    $message = $contact_data->message;
}
if(isset($_POST['edit_contact_id'], $_POST['name'], $_POST['email'], $_POST['message'])) {
    $edit_contact_id = $_POST['edit_contact_id'];
    $new_data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message']
    );

    $contact_object->edit($edit_contact_id, $new_data);

    header('Location: admin.php');
    exit();
}
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="" method="POST">
                    <label for="name" style="margin-bottom: 1%; font-weight: bold">Name:</label>
                    <br>
                    <input type="text" id="name" name="name" value="<?php echo $name?>">
                    <br>
                    <br>
                    <label for="email" style="margin-bottom: 1%; font-weight: bold">Email:</label>
                    <br>
                    <input type="email" id="email" name="email" value="<?php echo $email?>">
                    <br>
                    <br>
                    <label for="message" style="margin-bottom: 1%; font-weight: bold">Message:</label>
                    <br>
                    <textarea id="message" name="message"> <?php echo $message?> </textarea>
                    <br>
                    <br>
                    <button type="submit" name="edit_contact_id" class="btn btn-success" value="<?php echo $edit_contact_id?>">Save changes</button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php
include_once('partials/footer.php');
?>