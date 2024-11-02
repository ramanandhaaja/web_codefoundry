<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>POS Receipt</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
      font-size: 12px;
    }

    body {
      margin: 0;
      padding: 0;
      width: 60mm;
    }

    .receipt-container {
      padding: 10px;
      width: 100%;
    }

    .receipt-header, .footer {
      text-align: center;
    }

    .receipt-header h2 {
      margin: 0;
      font-size: 14px;
    }

    .receipt-header p {
      margin: 2px 0;
    }

    .receipt-info, .items, .total {
      margin: 5px 0;
      font-size: 12px;
    }

    .receipt-info p, .items p, .total p {
      margin: 2px 0;
    }

    .items {
      border-top: 1px dashed #000;
      border-bottom: 1px dashed #000;
      padding: 5px 0;
    }

    .item {
      display: flex;
      justify-content: space-between;
    }

    .total {
      font-weight: bold;
      text-align: right;
    }

    .footer {
      margin-top: 10px;
      font-size: 10px;
    }
  </style>
</head>
<body>
  <div class="receipt-container">
    <div class="receipt-header">
      <h2>Store Name</h2>
      <p>1234 Elm Street</p>
      <p>City, ST 56789</p>
      <p>Tel: (123) 456-7890</p>
      <p>Date: <span id="date"></span></p>
    </div>

    <div class="receipt-info">
      <p><strong>Customer:</strong> {{ $invoice }}</p>
      <p><strong>Payment:</strong> {{ $payment }}</p>
    </div>

    <div class="items">
      <div class="item">
        <p>Item 1</p>
        <p>$10.00</p>
      </div>
      <div class="item">
        <p>Item 2</p>
        <p>$15.00</p>
      </div>
      <div class="item">
        <p>Item 3</p>
        <p>$8.00</p>
      </div>
    </div>

    <div class="total">
      <p>Total: $33.00</p>
    </div>

    <div class="footer">
      <p>Thank you for shopping!</p>
      <p>Visit us again!</p>
    </div>
  </div>

  <script>
    // JavaScript to add current date
    document.getElementById('date').textContent = new Date().toLocaleDateString();
  </script>
</body>
</html>
