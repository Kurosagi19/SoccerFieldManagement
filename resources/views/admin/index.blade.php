<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DucAnh88.gay - Trang Quản Trị</title>
</head>
<body>
<h1 align="center" style="background-color: aqua">Trang Quản Trị</h1>
<a href="{{ route('customer.index') }}" class="btn btn-info">Thoát</a>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action" aria-current="true">
                    Trang chính
                </a>
                <a href="" class="list-group-item list-group-item-action">Quản lý người dùng</a>
                <a href="{{ route('admin.field.index') }}" class="list-group-item list-group-item-action">Quản lý sân bóng</a>
                <a href="" class="list-group-item list-group-item-action">Quản lý đơn hàng</a>
            </div>
        </div>
        <h2>Chào mừng Quản Trị Viên</h2>
    </div>
</div>
</body>
</html>
