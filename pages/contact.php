<?php
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Ceci est un super top formulaire de contact';
?>

            <h3> Please feel free to email me filling the form bellow: </h3>

            <form method="post" action="../index.php?page=contact">

                <fieldset>

                    <legend> Your details: </legend>
                    <p>
                        <label for="gender-select">Gender:</label>

                        <select name="genders" id="gender-select">

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
