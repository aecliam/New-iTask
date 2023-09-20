// chat.php

CREATE DATABASE chat;
USE chat;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


<?php
$host = 'localhost';
$db   = 'chat';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$action = $_POST['action'];

switch ($action) {
    case 'fetch':
        $stmt = $pdo->query('SELECT * FROM messages ORDER BY timestamp DESC');
        $messages = [];
        while ($row = $stmt->fetch())
        {
            $messages[] = $row;
        }
        echo json_encode($messages);
        break;

    case 'send':
        $username = $_POST['username'];
        $message = $_POST['message'];
        $stmt = $pdo->prepare('INSERT INTO messages (username, message) VALUES (?, ?)');
        $stmt->execute([$username, $message]);
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #chatbox {
            height: 300px;
            width: 500px;
            border: 1px solid black;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div id="chatbox"></div>
    <form id="chatForm">
        <input type="text" id="username" placeholder="Username" required>
        <br>
        <textarea id="message" placeholder="Message" required></textarea>
        <br>
        <input type="submit" value="Send">
    </form>

    <script>
        $(document).ready(function() {
            fetchMessages();

            $('#chatForm').on('submit', function(e) {
                e.preventDefault();
                var username = $('#username').val();
                var message = $('#message').val();
                $.ajax({
                    url: 'chat.php',
                    type: 'post',
                    data: {action: 'send', username: username, message: message},
                    success: function() {
                        $('#message').val('');
                        fetchMessages();
                    }
                });
            });

            function fetchMessages() {
                $.ajax({
                    url: 'chat.php',
                    type: 'post',
                    data: {action: 'fetch'},
                    success: function(data) {
                        var messages = JSON.parse(data);
                        $('#chatbox').html('');
                        messages.forEach(function(message) {
                            $('#chatbox').append('<p><b>' + message.username + ':</b> ' + message.message + '</p>');
                        });
                    }
                });
            }

            setInterval(fetchMessages, 1000);
        });
    </script>
</body>
</html>
