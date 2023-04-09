<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMTOWN Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">SMTOWN Order List</h3>
                <h5 class="text-center my-4">Web Programming: Laravel Eloquent Relationship</h5>
                <p class="text-center">Felicia Ferren - 2440013071</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Membership Type</th>
                            <th>Order List</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                <p>Username: {{ $user->username }}</p>
                                <p>Address: {{ $user->address }}</p>
                                <p>Date of Birth: {{ $user->DoB }}</p>
                                <p>Email: {{ $user->email }}</p>
                            </td>
                            <td>
                                {{ $user->userMembership->membershipType }}
                            </td>
                            <td>
                                @foreach ($user->orders as $order)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Order ID: {{ $order->order_id }}</h5>
                                            <p>Order Received: {{ $order->order_received }}</p>
                                            <p>Total Price: {{ $order->total_price }}</p>
                                            <p>Status Payment: {{ $order->status_payment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
