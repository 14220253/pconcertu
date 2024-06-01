<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
</head>
<body>
    <a href="/">Portal</a>
    <h1>Transaction History</h1>
        @foreach ($transactionHistory as $history)
            <p>--------------------------------------------------------</p>
            <p>customer id: {{$history->customer_id}}</p>
            <p>ticket type: {{$history->ticketType->name}}</p>
            <p>ticket_id (how event name help): {{$history->ticket_id}}</p>
            <p>seat id: {{$history->seat_id}}</p>
            <p>--------------------------------------------------------</p>
        @endforeach
</body>
</html>
