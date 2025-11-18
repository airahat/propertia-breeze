<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rent Receipt</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin:0; padding:0; background:#f2f2f2; }
        .receipt-container { width:90%; margin:20px auto; background:#fff; padding:20px; border:1px solid #ddd; border-radius:6px; }
        .header { text-align:center; margin-bottom:15px; }
        .header h2 { margin:0; font-size:24px; }
        .header small { font-size:12px; color:#555; }
        .divider { border-bottom:1px dashed #999; margin:15px 0; }
        table { width:100%; font-size:14px; margin-bottom:15px; }
        td { padding:5px 0; }
        .amount-box { font-size:18px; font-weight:bold; background:#fafafa; border:1px solid #ddd; padding:10px; text-align:center; margin:10px 0; }
        .footer { margin-top:25px; text-align:right; }
        .footer .sign { margin-top:50px; }
        .thanks { text-align:center; margin-top:15px; font-size:13px; color:#777; }
    </style>
</head>
<body>
<div class="receipt-container">
    <div class="header">
        @php
            $logoPath = base_path('public/propertia-logo.png');
            $logoData = base64_encode(file_get_contents($logoPath));
        @endphp
        <img src="data:image/png;base64,{{ $logoData }}" style="width:150px; margin-bottom:10px;">
        <h2>RENT RECEIPT</h2>
        <small>Official Tenant Payment Proof</small>
    </div>

    <div class="divider"></div>

    <table>
        <tr>
            <td><strong>Receipt No:</strong></td>
            <td>#{{ str_pad($collection->id,6,'0',STR_PAD_LEFT) }}</td>
        </tr>
        <tr>
            <td><strong>Date:</strong></td>
            <td>{{ $collection->payment_date ? \Carbon\Carbon::parse($collection->payment_date)->format('F d, Y') : '-' }}</td>
        </tr>
        <tr>
            <td><strong>Tenant Name:</strong></td>
            <td>{{ $collection->rental->tenant->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Property:</strong></td>
            <td>{{ $collection->rental->property->title ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td><strong>Rent Month:</strong></td>
            <td>{{ \Carbon\Carbon::parse($collection->month)->format('F Y') }}</td>
        </tr>
    </table>

    <div class="divider"></div>

    <div class="amount-box">
        Total Paid: ৳ {{ number_format($collection->amount, 2) }}
    </div>

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
