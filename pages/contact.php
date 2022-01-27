<?php
//Header stuff
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Ceci est un super formulaire de contact';

//Data Form Fields Management
$gender = filter_input(INPUT_POST, 'gender');
$surName = filter_input(INPUT_POST, 'surName', FILTER_SANITIZE_STRING );
$firstName = filter_input(INPUT_POST, 'firstName',FILTER_SANITIZE_STRING );
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject');
$comments = filter_input(INPUT_POST, 'comments',FILTER_SANITIZE_STRING);

//Did the User has submitted is form ?
$submitted = filter_has_var(INPUT_POST, 'submit');

//Did the required fields are filled ?
$formFullyFilled = !empty($gender) && !empty($surName) && !empty($firstName) && !empty($phone) && !empty($email) && isset($subject) && !empty($comments);

//Did the values filled are accurate ?
$isGenderAccurate = $gender == 'Man' || $gender == 'Woman';
$isSubjectAccurate = $subject == 'Enquiry' || $subject == 'Feedback' || $subject == 'Meet' || $subject == 'Other';

//Did the conditions required are evaluated to run the file creation output ?
if ($submitted && $formFullyFilled && $isGenderAccurate && $isSubjectAccurate) {
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
                <option value="Man" <?php if ($gender == 'Man'): ?> selected="selected"<?php endif; ?> > Man</option>
                //php here is to keep selected option displayed after submit
                <option value="Woman" <?php if ($gender == 'Woman'): ?> selected="selected" <?php endif; ?> > Woman
                </option>

            </select>

        </p>
        <?php
        if (!$isGenderAccurate && $submitted) {
            echo 'Blank or Incorect value not allowed';
        }
        ?>
        <p>
            <label>Your Surname: <input type="text" name="surName" value="<?php echo $surName; ?>"></label> <!-- php here
            is to keep input value displayed after submit -->
        </p>
        <?php
        if (empty($surName) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Your Firstname: <input type="text" name="firstName" value="<?php echo $firstName; ?>"></label> <!-- php
            here is to keep value displayed after submit -->
        </p>
        <?php
        if (empty($firstName) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Phone: <input type=tel name="phone" value="<?php echo $phone; ?>"></label> <!-- php here is to keep
            input value displayed after submit -->
        </p>
        <?php
        if (empty($phone) && ($submitted)) {
            echo 'Is required, blank not allowed';
        }
        ?>
        <p>
            <label>Your Mail: <input type=email name="email" value="<?php echo $email; ?>"></label> <!-- php here is to
            keep value displayed after submit -->
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
            <label> <input type="radio" name="subject"
                           value="Enquiry" <?php if ($subject == 'Enquiry') echo 'checked'; ?> > Enquiry </label> <!-- php
            here is to keep checked value displayed after submit -->
        </p>
        <p>
            <label> <input type="radio" name="subject"
                           value="Feedback" <?php if ($subject == 'Feedback') echo 'checked'; ?> > Feedback </label>
        </p>
        <p>
            <label> <input type="radio" name="subject" value="Meet" <?php if ($subject == 'Meet') echo 'checked'; ?> >
                Meet </label>
        </p>
        <p>
            <label> <input type="radio" name="subject" value="Other" <?php if ($subject == 'Other') echo 'checked'; ?> >
                Other </label>
        </p>
        <?php
        if (!$isSubjectAccurate && $submitted) {
            echo 'Blank or Incorect value not allowed';
        }
        ?>
    </fieldset>


    <p>
        <label> Tell me: <textarea name="comments"><?php echo $comments; ?></textarea></label> <!-- php here is to keep
        text input displayed after submit -->
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
