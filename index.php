<?php 
require_once __DIR__ . '/partials/data.php';
require_once __DIR__ . '/partials/functions.php';

$mergedArray = array_merge($letters, $lettersCaps, $numbers, $symbols);

shuffle($mergedArray);

$passwordLengthRequired = $_POST['numberTyped'] ?? 0;

$generatedPassword = passwordGenerator($mergedArray, $passwordLengthRequired);

// var_dump($mergedArray, $passwordLengthRequired, $generatedPassword)
?>

<?php
require_once __DIR__ . '/partials/head.php';
?>

<body>
    <div class="wrapper bg-dark text-light d-flex flex-column align-items-center p-3">
        <h1 class="fw-bold">Strong Password Generator <span class="fs-6 fst-italic">(maybe)</span></h1>

        <div class="container d-flex flex-column align-items-center text-center p-3">
            <h5>Type the password length you want</h5>
            <form action="index.php" method="POST">
                <input type="number" class="form-control my-2" placeholder="Type a number" name="numberTyped">
                <button type="submit" class="btn btn-warning">Generate</button>
                
                <div class="container output d-flex align-items-center justify-content-center my-3">
                    <h3 class="text-warning p-2"><?php echo $generatedPassword ?></h3>
                </div>
            </form>
        </div>
    </div>
</body>

</html>