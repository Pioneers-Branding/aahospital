<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--=== Meta Tags ===-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=== Essential CSS ===-->
    <?php include('header-link.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--=== Title & Favicon ===-->
    <title>Thank You | A.A Hospital</title>

</head>
<style>
body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

.thank-you-card {
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.thank-you-card h1 {
    color: #343a40;
}

.thank-you-card p {
    color: #6c757d;
}

.btn{
    background-color:#f89f1d;
    color:#fff;
    font-weight:400;
}



    
</style>

<body>
    <?php include('header.php'); ?>



    <div class="container text-center">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12">
                <div class="thank-you-card p-5">
                    <h1 class="display-4">Thank You!</h1>
                    <p class="lead">Your submission has been received. We will get back to you shortly.</p>
                    <p class="mt-3">Redirecting to the home page in <span id="countdown">10</span> seconds...</p>
                    <a href="/" class="btn  mt-4">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


    <!--Footer-->
    <?php include('footer.php'); ?>
    <!--Footer-->
    
    
    
  
    <script>

        
        setTimeout(function() {
            window.location.href = "index";
        }, 10000);
    </script>

  
</body>
</html>