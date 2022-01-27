<?php
//Header stuff
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Ceci est un super top formulaire de contact';

//Data Form Fields Management
$gender = filter_input(INPUT_POST, 'gender');
$surName = filter_input(INPUT_POST, 'surName');
$firstName = filter_input(INPUT_POST, 'firstName');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$comments = filter_input(INPUT_POST, 'comments');

//Did the User has submitted is form ?
$submitted = filter_has_var(INPUT_POST, 'submit');

//Did the required fields are filled ?
$formFullyFilled = !empty($gender) && !empty($surName) && !empty($firstName) && !empty($phone) && !empty($email) && isset($subject) && !empty($comments);

//Did the conditions required are evaluated to run the file creation output ?
if ($submitted && $formFullyFilled) {
//File output build
    $requestTimestamp = date('Y-m-d-H-i-s');
    $createContactFile = file_put_contents("contacts/contact_$requestTimestamp.txt", "$gender,$firstName,$surName,$phone,$email,$subject,$comments\n\r");
    echo 'form sent';
}
?>

<h3> Please feel free to email me filling the form bellow: </h3>

<form method="post" action="../index.php?page=contact">

    <fieldset>

        <legend> Your details:</legend>
        <p>
            <label for="gender-select">Gender:</label>

            <select name="gender" id="gender-select">

                <option value="">--Please choose an option--</option>
                <option value="Man">Man</option>
                <option value="Woman">Woman</option>
                <option value="The 3rd sex">I'm not binary at all !</option>

            </select>

        </p>
        <?php
        if (empty($gender) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Your Surname: <input name="surName"></label>
        </p>
        <?php
        if (empty($surName) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Your Firstname: <input name="firstName"></label>
        </p>
        <?php
        if (empty($firstName) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Phone: <input type=tel name="phone"></label>
        </p>
        <?php
        if (empty($phone) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Your Mail: <input type=email name="email"></label>
        </p>
        <?php
        if (empty($email) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
    </fieldset>

    <fieldset>

        <legend> Subject:</legend>

        <p>
            <label> <input type="radio" name="subject" value="Enquiry"> Enquiry </label>
        </p>
        <p>
            <label> <input type="radio" name="subject" value="Feedback"> Feedback </label>
        </p>
        <p>
            <label> <input type="radio" name="subject" value="Meet"> Meet </label>
        </p>
        <p>
            <label> <input type="radio" name="subject" value="Other"> Other </label>
        </p>
        <?php
        if (!isset($subject) && $submitted) { // todo isset Vs. empty still unclear.
            echo 'Is required, blank not allowed';
        }
        ?>
    </fieldset>


    <p>
        <label> Tell me: <textarea name="comments"></textarea></label>
    </p>
    <?php
    if (empty($comments) && $submitted) {
        echo 'Is required, blank not allowed';
    }
    ?>
    <p>
        <button name="submit"> Submit</button>
    </p>

</form>
