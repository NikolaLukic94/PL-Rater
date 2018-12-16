            
                    <p>Named Insured:</p> 
                    <input type="text" name="lname">
                    <p>Effective date:</p> 
                    <input type="text" name="lname">
                    <p>Street:</p> 
                    <input type="text" name="lname">
                    <p>City:</p> 
                    <input type="text" name="lname">
                    <p>County:</p> 
                    <input type="text" name="lname">
                    <p>State:</p> 
                    <input type="text" name="lname">
                    <p>LOB:</p> 
                    <input type="text" name="lname">                                                                                                                        

                    <p>Type of coverage:</p> 
                    <input type="text" name="lname"><p>Credit:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>Cov A:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>Other structures:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>Loss of Use:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>Med pay:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>AOP:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>
                  
                    <hr> <!-- building info -->

                    <p>Construction type:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>

                    <p>Protection class:</p> 
                    <input type="text" name="lname"><p>$:</p>
                    <input type="text" name="lname">
                    <br>


            $table->string('protection_class', 50);
            $table->string('new_purchase', 50)->default(0);            
            $table->string('prior_carrier', 50)->nullable();
            $table->string('prior_carrier_name', 50)->nullable();
            $table->date('prior_carrier_effective_date', 50)->nullable();