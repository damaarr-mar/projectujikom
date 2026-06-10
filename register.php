<?php include 'partials/header.php'; ?>

<div class="container py-5">

<div class="card shadow p-4">

<h2 class="text-center mb-4">
Register
</h2>

<form id="registerForm">

<input type="text"
id="nama"
class="form-control mb-3"
placeholder="Nama"
required>

<input type="email"
id="email"
class="form-control mb-3"
placeholder="Email"
required>

<input type="text"
id="nomor"
class="form-control mb-3"
placeholder="Nomor HP"
required>

<button class="btn btn-success w-100">
Daftar
</button>

</form>

</div>

<div class="card shadow p-4 mt-4">

<h4 class="text-center">
Data Register
</h4>

<table class="table table-bordered">

<thead>

<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Nomor</th>
</tr>

</thead>

<tbody id="hasil">

</tbody>

</table>

</div>
</div>

<?php include 'partials/footer.php'; ?>