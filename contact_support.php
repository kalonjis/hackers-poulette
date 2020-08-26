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
        <nav>Menu</nav>
        <caption>
            <img src=" assets/img/logo.png " alt="">
        </caption>
    </header>

    <main>
        <form action="" method="post">
            <label for="firstname">Firstname: </label>
            <input type="text" name="firstname">
            <label for="lastname">Lastname: </label>
            <input type="text" name="lastname"><br><br>
            <label for="email">@Email: </label>
            <input type="text" name="email">
            <label for="gender">Gender: </label>
            <label for="male">| M </label>
            <input type="radio" name="gender" value="m">
            <label for="female">| F </label>
            <input type="radio" name="gender" value="f"><br><br>
            <select>
                <option selected="selected">Choose one</option>
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
            </select><br><br>
            <br><br>
            <label for="comments">Comments: </label>
            <input type="text" name="comments" id="comments"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </main>
    <footer>
        <nav>facebook tweeter instagram</nav>
    </footer>
    <!-- bootstrap script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>