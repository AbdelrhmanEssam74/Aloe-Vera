<!doctype html>
<?php
// check if user id is already in cookies
use App\Models\User;

if(!empty($_COOKIE['ui'])){

    $userId = $_COOKIE['ui'];
    $users = app()->db->row("SELECT user_id FROM users Where remember_me =? " , ['1']);
    foreach ($users as $user){
        $hash = hash_hmac('sha256', $user->user_id, 'your_secret_key'); // Secure hash
        if ($userId === $hash){
            $userData = User::getUserData('user_id', $user->user_id);
            app()->session->set('email', $userData['email']);
            app()->session->set('login', true);
            app()->session->set('user_id', $userData['user_id']);
            break;
        }
    }
}
?>
<?php
$translation = app()->languages->get(getLanguage());
$langCode = getLanguage();
?>
<html lang="<?php echo $langCode; ?>" dir="<?php echo $langCode === 'ar' ? 'rtl' : 'ltr'; ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= env('APP_NAME') ?></title>
  <link rel="stylesheet" href="/assets/css/style002.css">
  <link rel="stylesheet" href="/assets/css/verification.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="body">
  <?php include view_path() . 'partials/Back_to_top_button.php' ?>
  <?php include view_path() . 'partials/navbar.php'; ?>
  <div>
    {{content}}
  </div>
  <?php include view_path() . 'partials/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
    integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/assets/js/Main.js"></script>
  <script src="/assets/js/Ajax003.js"></script>
  <script src="/assets/js/verification.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFHz-7hKCyzYx2kWfY-S_kSi6Hm8pZ8jk"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>