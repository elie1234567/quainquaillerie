<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
			background-image: url(/imag/de.jpg);
             background-repeat: no-repeat;
              background-size:100% ;
             overflow-x: hidden;
              overflow-y:scroll;
            /* background: linear-gradient(135deg, #6e8efb, #a777e3); */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            color: #fff;
        }

        #wrapper {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

       
        .login-form {
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 28px;
        }

        .login-form .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .login-form .form-group label {
            display: block;
            font-weight: bold;
            color: #fff;
            margin-bottom: 5px;
        }

        .login-form .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 25px;
            margin-top: 5px;
            font-size: 14px;
            color: #333;
            background: rgba(255, 255, 255, 0.8);
        }

        .login-form .form-group input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .login-form .form-actions {
            text-align: center;
            margin-top: 20px;
        }

        .login-form .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            background: #007BFF;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-form .form-actions button:hover {
            background: #0056b3;
        }

        .login-form .form-actions a {
            display: inline-block;
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .login-form .form-actions a:hover {
            color: #f8d7da;
        }

        .error-messages {
            background: rgba(255, 0, 0, 0.2);
            color: #721c24;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="login-form">
            <h2>Login</h2>

            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('logina') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-actions">
                    <button type="submit">Login</button>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
