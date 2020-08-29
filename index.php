<?php
session_start(); //starting session here to collected the $_SESSION variable (error and succes) 
require('countries.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hackers-Poulette StephK</title>
</head>
<body>
    <header>
        <nav>menu</nav>      
            <img src=" assets/img/logo.png " alt="Hackers-Poulette's logo">
    </header>

    <main class="container">
        <!-- displaying error information for the user  -->
        <?php
            if(empty($_SESSION['errors'])==false){
        ?>
                <br>
                <section class="alert alert-danger" role="alert";>
                    <?php 
                    echo implode('<br>',$_SESSION['errors']);
                    ?>
                </section>
            <?php unset($_SESSION['errors']);
            }?>
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
            <!-- name section  -->
            <section class="row">
                <!-- firstname section -->
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="firstname">Firstname:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter your firstname" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">firstname</small>
                    </article>
                </section>
                <!-- lastname section  -->
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your lastname" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">lastname</small>
                    </article>
                </section>
            </section>
            <!-- gender section  -->
            <section class="gender row">
                <article class="radio-gender col" >
                    <label for="male">Man</label>
                    <input type="radio" name="gender" value="M" checked id="male">
                    <label for="female">Woman</label>
                    <input type="radio" name="gender" value="F" id="female">
                </article>
            </section>
            <!-- email section  -->
            <section class="email">
                <article class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="enter your email adress">
                    <small id="emailHelpId" class="form-text text-muted">Email</small>
                </article>
            </section>
            <!-- country section      -->
            <section class="country ">
                <article class="form-group">
                    <label for="country">Country</label>
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
                </article>
            </section>
            <!-- service section  -->
            <section class="service">
                <article class="form-group">
                  <label for="service">Service</label>
                  <select class="custom-select" name="service" id="service" required>
                      <option selected>Select your service</option>
                      <option value="0">Repair</option>
                      <option value="1">Claim</option>
                      <option value="2">Other</option>
                  </select>
                </article>
            </section>          

            <!-- message section  -->
            <section class="form-group">
                <label for="message">Your message</label><br>
                <textarea name="message" id="message" class="form-control"></textarea>
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