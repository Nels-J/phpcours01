<?php
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Ceci est un super top formulaire de contact';
$gender = filter_input(INPUT_POST, 'gender');
$surName = filter_input(INPUT_POST, 'surName');
$firstName = filter_input(INPUT_POST, 'firstName');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$comments = filter_input(INPUT_POST, 'comments');
$requestTimestamp = date('Y-m-d-H-i-s');
$createContactFile = file_put_contents("contact_$requestTimestamp.txt","$gender,$firstName,$surName,$phone,$email,$subject,$comments\n\r");
//TODO data output of $createContactFile to review
?>

            <h3> Please feel free to email me filling the form bellow: </h3>

            <form method="post" action="../index.php?page=contact">

                <fieldset>

                    <legend> Your details: </legend>
                    <p>
                        <label for="gender-select">Gender:</label>

                        <select name="gender" id="gender-select">

                            <option value="">--Please choose an option--</option>
                            <option value="Man">Man</option>
                            <option value="Woman">Woman</option>
                            <option value="The 3rd sex">I'm not binary at all !</option>

                        </select>

                    </p>

                    <p>
                        <label>Your Surname: <input name="surName"></label>
                    </p>

                    <p>
                        <label>Your Firstname: <input name="firstName"></label>
                    </p>

                    <p>
                        <label>Phone: <input type=tel name="phone"></label>
                    </p>

                    <p>
                        <label>Your Mail: <input type=email name="email"></label>
                    </p>

                </fieldset>
                
                <fieldset>
                    
                    <legend> Subject: </legend>
                 
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

                </fieldset>

                        <p>
                            <label> Tell me: <textarea name="comments"></textarea></label>
                        </p>
                        <p>
                            <button> Submit </button>
                        </p>

            </form>
