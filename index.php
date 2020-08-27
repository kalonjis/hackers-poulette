<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact Support</title>
</head>
<body>
    <header>
        <nav>menu</nav>
       
            <img src=" assets/img/logo.png " alt="">
       
    </header>

    <main class="container">
        <form action="contact.php" method="post" >
            <section class="row">
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="firstname">Firstname:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">firstname</small>
                    </article>
                </section>
                <section class="col-xl-6">
                    <article class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">lastname</small>
                    </article>
                </section>
            </section>
            <section class="contact row"></section>
                <article class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Email</small>
                </article>
            <section class="country" row>
                <article class="form-group">
                    <label for="country">Country</label>
                    <select class="custom-select" name="country" id="country">
                        <option selected>Select your country</option>
                        <?php
                    // A sample countries array
                    $countries = ['Belgium','RDCongo','Spain','France','Italy','Germany','Luxemburg','United Kingdom', 'Portugal','United States of America'];  
                    
                    // Iterating through the country array
                        foreach($countries as $country){
                    ?>
                        <option value="<?php echo strtolower($country); ?>"><?php echo $country; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </article>
            </section>
            <section class="form-group">
                <label for="message">Your message</label><br>
                <textarea name="message" id="message" class="form-control"></textarea>
            </section>
            <button type="submit" class="btn btn-primary">Submit</button>
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