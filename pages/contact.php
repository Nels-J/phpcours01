<?php
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Ceci est un super top formulaire de contact';
?>

            <h3> Please feel free to email me filling the form bellow: </h3>

            <form method="post" action="/post">
                
                <fieldset>

                    <legend> Your details: </legend>
                    <p>
                        <label>Your name: <input name="custname"></label>
                    </p>
                    <p>
                        <label>Telephone: <input type=tel name="custtel"></label>
                    </p>
                    <p>
                        <label>Your Mail: <input type=email name="custemail"></label>
                    </p>
                
                    <p>
                        <label for="gender-select">Gender:</label>

                        <select name="genders" id="gender-select">
                        
                            <option value="">--Please choose an option--</option>
                            <option value="Man">Man</option>
                            <option value="Woman">Woman</option>
                            <option value="The 3rd sex">I'm not binary at all !</option>
                        
                        </select>
                            
                    </p>

                </fieldset>
                
                <fieldset>
                    
                    <legend> Subject: </legend>
                 
                        <p>
                            <label> <input type="radio" name="topping" value="bacon"> Enquiry </label>
                        </p>
                        <p>
                            <label> <input type="radio" name="topping" value="cheese"> Feedback </label>
                        </p>
                        <p>
                            <label> <input type="radio" name="topping" value="onion"> Meet </label>
                        </p>
                        <p>
                            <label> <input type="radio" name="topping" value="mushroom"> Other </label>
                        </p>

                </fieldset>

                        <p>
                            <label> Tell me: <textarea name="comments"></textarea></label>
                        </p>
                        <p>
                            <button> Submit </button>
                        </p>

            </form>
