<?php
require "./controller/admin/admins/AdminController.php";


$admin = new AdminController();
$all_admins = $admin->index();

// dd($admins);

require "./views/pages/admin/admins/index.php";