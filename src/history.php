<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Quote History</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body class="history-body">
    <?php include 'header.php'; ?>  
    <div class="container">
        <h2>Fuel Quote History</h2>
        <table id="quoteHistoryTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Gallons Requested</th>
                    <th>Delivery Address</th>
                    <th>Delivery Date</th>
                    <th>Suggested Price</th>
                    <th>Total Amount Due</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var storedFuelQuotes = JSON.parse(localStorage.getItem('fuelQuotes')) || [];
        var tbody = document.querySelector('#quoteHistoryTable tbody');
        storedFuelQuotes.forEach(function (quote) {
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>' + new Date(quote.deliveryDate).toLocaleDateString() + '</td>' +
                '<td>' + quote.gallonsRequested + '</td>' +
                '<td>' + quote.deliveryAddress + '</td>' +
                '<td>' + new Date(quote.deliveryDate).toLocaleDateString() + '</td>' +
                '<td>' + quote.suggestedPrice + '</td>' +
                '<td>' + quote.totalAmountDue + '</td>';
            tbody.appendChild(tr);
        });
    });
</script>

</body>
</html>