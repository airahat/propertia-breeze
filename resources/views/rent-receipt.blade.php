<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rent Receipt</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
        }

        .receipt-container {
            width: 80%;
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }

        .header small {
            font-size: 12px;
            color: #555;
        }

        .divider {
            border-bottom: 1px dashed #999;
            margin: 15px 0;
        }

        table {
            width: 100%;
            font-size: 14px;
            margin-bottom: 15px;
        }

        td {
            padding: 5px 0;
        }

        .amount-box {
            font-size: 18px;
            font-weight: bold;
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            margin: 10px 0;
        }

        .footer {
            margin-top: 25px;
            text-align: right;
        }

        .footer .sign {
            margin-top: 50px;
        }

        .thanks {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="receipt-container">

    <div class="header">
<img src="{{ public_path('propertia-logo.png') }}" style="width:150px; margin-bottom:10px;">
        <h2>RENT RECEIPT</h2>
        <small>Official Tenant Payment Proof</small>
    </div>

    <div class="divider"></div>

    <table>
        <tr>
            <td><strong>Receipt No:</strong></td>
            <td>#000234</td>
        </tr>
        <tr>
            <td><strong>Date:</strong></td>
            <td>January 15, 2025</td>
        </tr>
        <tr>
            <td><strong>Tenant Name:</strong></td>
            <td>John Doe</td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td>House 12, Block C, Example Road</td>
        </tr>
        <tr>
            <td><strong>Rent Month:</strong></td>
            <td>January 2025</td>
        </tr>
    </table>

    <div class="divider"></div>

    <div class="amount-box">
        Total Paid: ৳ 12,000
    </div>

    <table>
        <tr>
            <td><strong>Payment Method:</strong></td>
            <td>Cash</td>
        </tr>
        <tr>
            <td><strong>Security Deposit:</strong></td>
            <td>Not Applicable</td>
        </tr>
        <tr>
            <td><strong>Notes:</strong></td>
            <td>Paid in full without dues.</td>
        </tr>
    </table>

    <div class="footer">
        <strong>Landlord Signature:</strong>
        <div class="sign">_______________________</div>
    </div>

    <div class="thanks">
        Thank you for your payment!
    </div>

</div>

</body>
</html>
