<?php
session_start(); 

function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_ukm";

    return new mysqli($servername, $username, $password, $dbname);
}

function registerUser($username, $email, $password) {
    $conn = connectToDatabase();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function loginUser($email, $password) {
    $conn = connectToDatabase();

    $sql = "SELECT * FROM user WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_level'] = $row['id_level'];

            header("Location: index.php");
            exit();
        } else {
            return false;
        }
    }

    $sqlAdmin = "SELECT * FROM admin WHERE email=?";
    $stmtAdmin = $conn->prepare($sqlAdmin);
    $stmtAdmin->bind_param("s", $email);
    $stmtAdmin->execute();
    $resultAdmin = $stmtAdmin->get_result();

    if ($resultAdmin->num_rows > 0) {
        $rowAdmin = $resultAdmin->fetch_assoc();
        if (password_verify($password, $rowAdmin['password'])) {
            $_SESSION['id_admin'] = $rowAdmin['id_admin'];
            $_SESSION['username'] = $rowAdmin['username'];
            $_SESSION['id_level'] = $rowAdmin['id_level'];

            header("Location: user.php");
            exit();
        } else {
            return false;
        }
    }

    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password)) {
        
        exit();
    } else {
        echo "tidak berhasil login";
    }
}


function loginAdmin($email, $password) {
    $conn = connectToDatabase(); 

    $sql = "SELECT * FROM admin WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_level'] = $row['id_level'];

            header("Location: user.php");
            exit();
        } else {
            return false;
        }
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin-login-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginAdmin($email, $password)) {
       
        header("Location: user.php");
        exit();
    } else {
        echo "Login admin gagal";
    }
}

if(isset($_POST['save_admin']))
{
    $conn = connectToDatabase(); 
    $level = mysqli_real_escape_string($conn, $_POST['id_level']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (id_level, username, email, password) VALUES ('$level', '$username', '$email', '$hashedPassword')";

    if($conn->query($sql) === TRUE)
    {
        $_SESSION['message'] = "Inserted successfully";
        header("Location: admin-add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Inserted";
        header("Location: admin-add.php");
        exit(0);
    }
}

if (isset($_POST['deleteUser'])) {
    $conn = connectToDatabase();
    $id_user = mysqli_real_escape_string($conn, $_POST['deleteUser']);

    $sql = "DELETE FROM user WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_user);

    if ($stmt->execute()) {
        $_SESSION['message'] = "User deleted successfully";
        header("Location: user.php");
        exit(0);
    } else {
        $_SESSION['message'] = "User deletion failed";
        header("Location: user.php");
        exit(0);
    }
}

if (isset($_POST['deleteAdmin'])) {
    $conn = connectToDatabase();
    $id_admin = mysqli_real_escape_string($conn, $_POST['deleteAdmin']);

    $sql = "DELETE FROM admin WHERE id_admin = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_admin);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Admin deleted successfully";
        header("Location: admin.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin deletion failed";
        header("Location: admin.php");
        exit(0);
    }
}

function showNavbar() {
    if (isset($_SESSION['id_user'])) {
        echo "Welcome, " . $_SESSION['username'] . "! <a href='logout.php'>Logout</a>";
    } else {
        echo "<div class='login'><img src='gambar/user_icon.png'></div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register-submit'])) {
    $username = $_POST['reg-username'];
    $email = $_POST['reg-email'];
    $password = $_POST['reg-password'];

    if (registerUser($username, $email, $password)) {
        header("Location: index.php");
        exit();
    } else {
        
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password)) {
        $isAdmin = checkIfAdmin($email, $password);

        if ($isAdmin) {
            header("Location: admin.php"); 
            exit();
        } else {
            header("Location: user.php"); 
            exit();
        }
    } else {
        echo "tidak berhasil login";
    }
}

function checkIfAdmin($email, $password) {
    $conn = connectToDatabase(); 

    $sql = "SELECT COUNT(*) as count FROM admin WHERE email=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'] > 0; 
    } else {
        return false;
    }
}

?>
