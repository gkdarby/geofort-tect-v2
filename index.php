<?php
$status = "";
$statusClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $message === "") {
        $status = "Please complete all fields.";
        $statusClass = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "Please enter a valid email address.";
        $statusClass = "error";
    } else {
        $file = fopen("messages.csv", "a");
        if ($file) {
            fputcsv($file, [date("Y-m-d H:i:s"), $name, $email, $message]);
            fclose($file);
            $status = "Thank you, " . htmlspecialchars($name) . ". Your message was submitted.";
            $statusClass = "success";
        } else {
            $status = "The server could not save your message.";
            $statusClass = "error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoFort-Tech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Welcome to GeoFort-Tech</h1>
    <p>Cloud Security, DevOps, and Application Security Solutions</p>
</header>

<nav>
    <button onclick="showHome()">Home</button>
    <button onclick="showCloudSecurity()">Cloud Security</button>
    <button onclick="showDevOps()">DevOps</button>
    <button onclick="showApplicationSecurity()">Application Security</button>
    <button onclick="showContact()">Contact</button>
</nav>

<main id="content">
<?php if ($status !== ""): ?>
    <section class="<?php echo $statusClass; ?>">
        <h2>Contact Result</h2>
        <p><?php echo $status; ?></p>
        <button class="contact-button" onclick="showHome()">Return Home</button>
    </section>
<?php else: ?>
    <h2>About GeoFort-Tech</h2>
    <p>GeoFort-Tech provides secure cloud, DevOps, and application security solutions for organizations.</p>
<?php endif; ?>
</main>

<footer>Created by Karl-Dee &copy; <span id="year"></span></footer>
<script src="script.js"></script>
</body>
</html>
