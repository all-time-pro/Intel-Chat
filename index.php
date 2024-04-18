<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intel Social</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
   <div class="wrapper">
        <section class="form signup">
            <header>Intel Social</header>
            <form action="#">
                <div class="error-txt">This Is An Error Message!</div>
                <div class="name details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" required>
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" placeholder="Enter Your Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter New Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login Now</a></div>
        </section>
   </div>

   <script src="Javascript/signup.js"></script>
</body>
</html>