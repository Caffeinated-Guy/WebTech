<!DOCTYPE html>
<html>
<head>
    <title>Submitted Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <h2>Submitted Registration Details</h2>

        <?php
            echo "<p><strong>Full Name:</strong> " . htmlspecialchars($_POST['fullname']) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob']) . "</p>";
            echo "<p><strong>Address:</strong> " . nl2br(htmlspecialchars($_POST['address'])) . "</p>";
            echo "<p><strong>Course Selected:</strong> " . htmlspecialchars($_POST['course']) . "</p>";
        ?>
    </div>
</body>
</html>
