<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <header>
        <h1>Profil Pengguna</h1>
    </header>
    <a href="/POS_TugasP2/public/"><- Back to Home</a>
            <section>
                <p>Here's your data personal</p>
                <p>User ID : {{ $id }}</p>
                <p>Full Name: {{ $name }}</p>
                <!-- Your user profile details and content goes here -->
            </section>
            <footer>
                <p>&copy; {{ date('Y') }} Our Website. All rights reserved.</p>
            </footer>
</body>

</html>
