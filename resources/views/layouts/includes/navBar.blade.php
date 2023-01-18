<div class="top-bar">
<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline rounded-pill "><i class="fa fa-list"></i></a>
<a href="{{ route('users.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-user"></i> Users</a>
<a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-box"></i> products</a>
<a href="{{ route('orders.index') }}" class="btn btn-outline rounded-pill"><i class="fa fa-laptop"></i> Cashier</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-file"></i> Reports</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-money-bill"></i> Transactions</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-users"></i> Suppliers</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-users"></i> Customers</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-truck"></i> Incoming</a>
</div>

<style>
    .btn-outline{
        border-color: #008b8b;
        color: #008b8b;
    }
    .btn-outline:hover{
       background: #008b8b;
       color: #ffffff;
    }
    .top-bar{
        margin-top: 14px;
    }
</style>
