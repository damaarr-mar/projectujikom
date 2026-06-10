<?php
$pesan = "";

if(isset($_POST['login'])){

$user = $_POST['username'];
$pass = $_POST['password'];

if($user == "admin" &&
$pass == "123"){

$pesan = "Login Berhasil ✅";

}else{

$pesan = "Login Gagal ❌";

}
}

include 'partials/header.php';
?>

<div class="container py-5">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Login
</h2>

<form method="POST">

<input type="text"
name="username"
class="form-control mb-3"
placeholder="Username"
required>

<input type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button type="submit"
name="login"
class="btn btn-primary w-100">

Login

</button>

</form>

<h5 class="text-center mt-3">
<?php echo $pesan; ?>
</h5>

</div>
</div>

<?php include 'partials/footer.php'; ?>