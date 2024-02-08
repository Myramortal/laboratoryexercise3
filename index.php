<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="header-fix" >
        <div class="header-container">
            <h1><a href="http://localhost/laboratoryexercise3/"> <i class="fas fa-table"></i> Forms</a></h1>
        </div>
    </header>

    <div class="container">
        <section>
            <aside>
                <h2><i class="fas fa-question"></i>Info</h2>
                
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory fields</li>
                    <li>Standard field: text and password</li>
                    <li>Checkbox: checkbox</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>

            <article>
                <h2>Login Form</h2>
                <p class="marginbot50">Standard form to enter these <strong>login credentials:</strong></p>

                <form action="/index.php" class="form-element" method="post">
                    <div>
                        <label for="username">Enter your username:</label>
                        <input type="text" name="username" id="username"><br><br>
                    </div>
                    <div>
                        <label for="password">Enter your password:</label>
                        <input type="password" name="password" id="password"><br><br> 
                    </div>   
                        <div class="check">
                            <input type="checkbox" name="remember_me" id="remember_me">
                            <label for="remember_me"> Remember me</label><br><br>
                        </div>
                        
                        <div class="align-right">
                            <input type="submit" name="form" value="Login">
                        </div>
                    
                </form>

                <?php if(!empty($_POST) && $_POST['form'] === "Login") { ?>
                    <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach($_POST as $key => $value) { echo '<li>' .$key.' =>'.$value.'</li>';
                        } ?>
                    </ul>
                    </div>
                <?php } ?>
            </article>
        </section>

        <br><br>
        <hr>

        <section>
            <aside>
                <h2><i class="fas fa-question"></i>Info</h2>
                
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory fields</li>
                    <li>Standard field: text, email, date, file and password</li>
                    <li>Checkbox: checkbox</li>
                    <li>Radio button: submit</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>

            <article>
                <h2>Registration Form</h2>
                <p class="marginbot50">Standard form for <strong>online registration</strong> on a website:</p>

                <form action="/index.php" class="form-element" method="post" enctype="multipart/form-data">
                    <div>
                    <label for="gender">Enter your <strong>Gender:</strong><span class="mandatory"></span></label>
                    <input type="radio" name="gender" id="female" value="female" required>
                    <label for="male">Female</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label><br><br>
                  
                    <label for="last-name">Enter your <strong>Lastname:</strong><span class="mandatory"></span></label>
                    <input type="text" name="last-name" id="last-name" required><br><br>
                   
                    <label for="first-name">Enter your <strong>Firstname:</strong></label>
                    <input type="text" name="first-name" id="first-name"><br><br>
                   
                    <label for="date-of-birthday">Enter your <strong>Date of Birth:</strong></label>
                    <input type="date" name="date-of-birthday" id="date-of-birthday"><br><br>
                  
                    <label for="image">Enter your <strong>photo:</strong></label>
                    <input type="file" name="image" id="image"><br><br>
                    
                    <label for="email">Enter your <strong>Email address:</strong><span class="mandatory"></span></label>
                    <input type="email" name="email" id="email" required><br><br>
                  
                    <label for="password">Enter your <strong>Password:</strong><span class="mandatory"></span></label>
                    <input type="password" name="password" id="password" required><br><br>
                   
                    <label for="password-confirmation"><strong>Confirm</strong> your password:<span class="mandatory"></span></label>
                    <input type="password" name="password-confirmation" id="password-confirmation" required><br><br>
                
                    <p class="mandate">* mandatory fields</p>

                    <div class="check">
                        <input type="checkbox" name="tos" id="tos" required>
                        <label for="tos"> Accept TOS</label><br><br>
                    </div>

                    <div class="align-right">
                        <input type="submit" name="form" value="Registration">
                    </div>
                    </div>
                </form>

                <?php if(!empty($_POST) && $_POST['form'] === "Registration") { ?>
                    <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach($_POST as $key => $value) { echo '<li>' .$key.' =>'.$value.'</li>';
                        } ?>
                    </ul>

                    <br>

                    <b>Image preview:</b><br>
                    <?php
                        if(isset($_POST['form'])) { 
                            $filepath = "uploadPic/" . $_FILES["image"]["name"];

                            if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) {
                                echo "<img src=".$filepath." width=250px  />";
                            } 
                        } 
                    ?>        
                    </div>
                <?php } ?>
            </article>
        </section>

        <br><br>
        <hr>

        <section>
            <aside>
                <h2><i class="fas fa-question"></i>Info</h2>
                
                <ul>
                    <li>method: POST</li>
                    <li>Mandatory fields</li>
                    <li>Placeholder attribute</li>
                    <li>Maxlength and minlength attributes</li>
                    <li>Textarea</li>
                    <li>Standard button: submit</li>
                </ul>
            </aside>

            <article>
                <h2>Contact Form</h2>
                <p class="marginbot50">Standard form for making an <strong>information request</strong> on a website:</p>

                <form action="/index.php" class="form-element" method="post">
                    <label for="department">Department you wish to contact:<span class="mandatory"></span></label>
                    <select name="department" id="department" required>
                        <option selected>Select...</option>
                        <option value="Sales Department">Sales Department</option>
                        <option value="Communication Department">Communication Department</option>
                        <option value="Technical Department">Technical Department</option>
                    </select><br><br>

                    <label for="title">Enter a <strong>Title:</strong><span class="mandatory"></span></label>
                    <input type="text" name="title" id="title" placeholder="More than 20 characters" required><br><br>
                    
                    <label for="question">Enter your <strong>Question:</strong><span class="mandatory"></span></label>
                    <div class="vertical-top">
                        <textarea name="question" id="question" placeholder="Maximum 1000 characters..." required></textarea><br>
                    </div>

                    <label for="email">Enter your <strong>Email address:</strong><span class="mandatory"></span></label>
                    <input type="email" name="email" id="email" placeholder="Your Email..." required><br><br>

                    <div class="align-right">
                        <input type="submit" name="form" value="Contact">
                    </div>             
                </form>

                <?php if(!empty($_POST) && $_POST['form'] === "Contact") { ?>
                    <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach($_POST as $key => $value) { echo '<li>' .$key.' =>'.$value.'</li>';
                        } ?>
                    </ul>
                    </div>
                <?php } ?>

            </article>
        </section>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
</html>