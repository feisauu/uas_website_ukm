<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <style>
        
        .navbar {
            background-color: #f8f9fa; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
            padding: 10px 0; 
        }

        .navbar-brand {
            font-size: 1.5rem; 
            color: black; 
        }
      
        .navbar-nav .nav-link {
            font-size: 1rem; 
            color: black; 
            margin-right: 15px; 
        }
       
        .navbar-nav {
            padding-right: 10px;
        }

        .container {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }

        @media (max-width: 767px) {
            .navbar-nav {
                margin-top: 10px;
            }
            .navbar-toggler {
                margin-top: 5px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: black;">Website UKM - Back End</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="user.php">Data User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Data Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Your page content goes here -->

</body>
</html>
