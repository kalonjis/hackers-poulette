<?php
session_start(); //starting session here to collected the $_SESSION variable (error and succes) 
require('countries.php');//fetch the variable $countries from countries.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers-Poulette StephK</title>
    <!-- bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet"> -->
</head>
<body>
    <header>
        <nav>menu</nav>      
            <img src=" assets/img/logo.png " alt="Hackers-Poulette's logo">
    </header>

    <main class="container"><br>
        <!-- displaying a success information for the user  -->
        <?php
            if(empty($_SESSION['success'])==false){
        ?>
                <br>
                <section class="alert alert-success" role="alert" ;>
                    <?php 
                    echo "Your message has been successfully forwarded.  Check your email for further information";
                    ?>
                </section>
                <?php unset($_SESSION['success']);
            }?>    
        <!-- contact form    -->
        <form action="contact.php" method="post" >
        <p>Fields marked with <strong class="text-danger">*</strong> are required</p>
            <!-- name section  -->
            <section class="row">
                <!-- firstname section -->
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="firstname">Firstname <strong class="text-danger">*</strong></label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter your firstname" aria-describedby="firstname">
                        <?php if(empty($_SESSION['errors']['firstname'])==false){?>
                                <span class="error" style="color:red";>
                                    <?php echo $_SESSION['errors']['firstname'];    
                               }?>
                                </span>   
                    </article>
                </section>
                <!-- lastname section  -->
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="lastname">Lastname <strong class="text-danger">*</strong></label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your lastname" aria-describedby="helpId">
                        <?php if(empty($_SESSION['errors']['lastname'])==false){?>
                                <span class="error" style="color:red";>
                                    <?php echo $_SESSION['errors']['lastname'];    
                               }?>
                                </span>
                    </article>
                </section>
            </section>
            <!-- gender section  -->
            <section class="gender row">
                <article class="radio-gender col" >
                    <label for="male">Man</label>
                    <input type="radio" name="gender" value="Mr" checked id="male">
                    <label for="female">Woman</label>
                    <input type="radio" name="gender" value="Miss" id="female">
                </article>
            </section>
            <!-- email section  -->
            <section class="email">
                <article class="form-group">
                    <label for="email">Email <strong class="text-danger">*</strong></label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Enter your email adress">
                    <?php if(empty($_SESSION['errors']['email'])==false){?>
                                <span class="error" style="color:red";>
                                    <?php echo $_SESSION['errors']['email'];    
                               }?>
                                </span>
                </article>
            </section>
            <!-- country section -->
            <section class="country ">
                <article class="form-group">
                    <label for="country">Country <strong class="text-danger">*</strong></label>
                    <select class="custom-select" name="country" id="country" required>
                        <option selected value="Select your country">Select your country</option>
                        <?php
                            // A sample countries array
                            // Iterating through the country array
                                foreach($countries as $country){
                        ?>
                                    <option value="<?php echo strtolower($country); ?>"><?php echo $country;?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <?php if(empty($_SESSION['errors']['country'])==false){?>
                                <span class="error" style="color:red";>
                                    <?php echo $_SESSION['errors']['country'];    
                               }?>
                                </span>
                </article>
            </section>
            <!-- service section  -->
            <section class="subject">
                <article class="form-group">
                  <label for="subject">Subject</label>
                  <select class="custom-select" name="subject" id="subject" required>
                      <option >Select your subject</option>
                      <option value="Repair">Repair</option>
                      <option value="Claim">Claim</option>
                      <option selected value="Other">Other</option>
                  </select>
                </article>
            </section>          

            <!-- message section  -->
            <section class="form-group">
                <label for="message">Your message <strong class="text-danger">*</strong></label><br>
                <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
                <?php if(empty($_SESSION['errors']['message'])==false){?>
                                <span class="error" style="color:red";>
                                    <?php echo $_SESSION['errors']['message'];    
                               }?>
                                </span>
            </section>
            <br><button type="submit" class="btn btn-light">Submit</button><br><br>
        </form>    
    </main>
    <footer>
        <p>&copy; <a href="https://becode.org/">BeCode</a> -
    </footer>
    <!-- bootstrap script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>
<?php unset($_SESSION['errors']);?>