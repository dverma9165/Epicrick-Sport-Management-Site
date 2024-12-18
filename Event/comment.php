<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Vertical Scroll Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .landscape-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: url('landscape.jpg') center center/cover no-repeat;
            animation: scrollComments 30s linear infinite;
        }

        .comments {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        .comment {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }

        @keyframes scrollComments {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-100%);
            }
        }
    </style>
</head>
<body>

    <div class="landscape-container">
        <div class="comments">
            <div class="comment">
                <p>This is a sample comment. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="comment-info">John Doe - <span>2022-02-05 12:34:56</span></p>
            </div>

            <div class="comment">
                <p>Another comment here. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p class="comment-info">Jane Doe - <span>2022-02-05 14:45:23</span></p>
            </div>

            <!-- Add more comments dynamically here -->

        </div>
    </div>

</body>
</html>
