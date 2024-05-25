<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #f5f5f5;
        color: #333;
    }

    .container {
        width: 100%;
        max-width: 450px;
        /* max-height: 300px !important; */
    }

    .card {
        background-color: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border-color 0.3s ease-in-out;
        outline: none;
        color: #333;
    }

    input:focus {
        border-color: #555;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>

<script>
    window.console = window.console || function (t) { };
</script>



</head>

<body translate="no">
    <div class="container">
        <div class="card">
            <h2 class="font-weight-bold">Admin Login</h2>
            <?php
            if ($_SESSION['error']) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert"><?= $_SESSION['error'] ?></div>
                <?php
                unset($_SESSION['error']);
            }
            ?>
            <form action="<?= base_url('adminLogin/process') ?>" method="post">
                <input type="text" autofocus class="form-c  ontrol" id="username" name="adminUsername"
                    placeholder="Username" required>
                <input type="password" class="form-control" id="password" name="adminPassword" placeholder="Password"
                    required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>



</body>

</html>