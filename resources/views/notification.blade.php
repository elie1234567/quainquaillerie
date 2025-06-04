<!DOCTYPE html>
<html>
<head>
    <title>Notification Bell</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .notification-container {
            position: relative;
            display: inline-block;
        }

        .notification-bell {
            font-size: 24px;
            cursor: pointer;
        }

        .notification-panel {
            display: none;
            position: absolute;
            top: 30px;
            right: 0;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
        }

        .notification-panel h3 {
            margin: 0;
            padding: 10px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }

        .notification-panel ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notification-panel ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .notification-panel ul li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Notification Bell Example</h1>
    <div class="notification-container">
        <i class="fas fa-bell notification-bell"></i>
        <div class="notification-panel">
            <h3>Notifications</h3>
            <ul>
                <li>Notification 1</li>
                <li>Notification 2</li>
                <li>Notification 3</li>
            </ul>
        </div>
    </div>

    <script>
        // Toggle the display of the notification panel
        document.querySelector('.notification-bell').addEventListener('click', function(event) {
            var panel = document.querySelector('.notification-panel');
            panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
            event.stopPropagation(); // Stop the click event from propagating
        });

        // Close the notification panel if clicked outside
        document.addEventListener('click', function(event) {
            var panel = document.querySelector('.notification-panel');
            var bell = document.querySelector('.notification-bell');
            if (!panel.contains(event.target) && !bell.contains(event.target)) {
                panel.style.display = 'none';
            }
        });
    </script>
</body>
</html>
