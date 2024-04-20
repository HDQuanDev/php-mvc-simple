<?php
$title = $data['title'];
$message = $data['message'];
$redirect = $data['redirect'];
$error = isset($data['error']) ? $data['error'] : '';
include __DIR__ . '/Compoments/main.php';
?>

<body>
    <div class="error-container">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $message; ?></p>
        <?php if (!empty($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <hr>
        <a href="<?php echo $redirect; ?>">Quay lại</a>
    </div>
</body>

</html>