<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: legal portrait;
            margin: 0;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
            line-height: 1.6;
        }

        .deed-container {
            width: 100%;
            padding: 0;
        }

        .deed-body{
            padding-left: 30px;
        }
        .stamp-header img {
            width: 100%;
            display: block;
            margin: 0;
            padding: 0;
            max-height: 300px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
        }

        .subtitle {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .section {
            margin-top: 20px;
            padding: 0 30px;
        }

        .signature-line {
            border-top: 1px solid #000;
            width: 120px;
            padding-top: 5px;
            margin: 0;
            /* remove auto centering */
        }


        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <div class="deed-container">

        <!-- Header -->
        <div class="stamp-header">
            <img src="{{ $base64 }}" alt="Stamp Paper Header">
        </div>
        <div class="deed-body">


            <!-- Title -->
            <div class="title">Deed of Property</div>
            <div class="subtitle">Transfer of Property Ownership</div>

            <!-- Date & Place -->
            <div class="section">
                <strong>Date:</strong> {{ $sale->sale_date ?? '___________________' }}<br>
                <strong>Place:</strong> {{ $sale->city ?? '___________________' }}
            </div>

            <!-- Seller & Buyer using table -->
            <div class="section">
                <table>
                    <tr>
                        <td>
                            <strong>Seller:</strong><br>
                            Name: Propertia Ltd.<br>
                            Address: 12 Circular Road, Dhaka<br>
                            Contact: 017XXXXXXXX
                        </td>
                        <td>
                            <strong>Buyer:</strong><br>
                            Name: {{ $sale->buyer_name ?? '___________________' }}<br>
                            Contact: {{ $sale->buyer_phone ?? '___________________' }}
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Property Details -->
            <div class="section">
                <strong>Property Details:</strong><br>
                Address: {{ $sale->address ?? '___________________' }}<br>
                City: {{ $sale->city ?? '___________________' }}<br>
                Land/Plot Area: {{ $sale->area ?? '___________________' }}<br>
                Registration Number: REG-213123
            </div>

            <!-- Terms -->
            <div class="section">
                <strong>Terms and Conditions:</strong><br>
                1. The seller confirms that the property is free from all encumbrances.<br>
                2. The buyer agrees to purchase the property as per the agreed terms.<br>
                3. Both parties agree to abide by the laws governing property transactions.
            </div>

         
            <!-- Signatures using table -->
            <div class="section" style="margin-top: 130px;">
                <table>
                    <tr>
                        <td style="text-align: left; vertical-align: bottom;">
                            <div class="signature-line"></div>
                            Seller Signature
                        </td>
                        <td style="vertical-align: bottom;">
                            <div class="signature-line"></div>
                            Buyer Signature
                        </td>
                    </tr>
                </table>
            </div>


            <!-- Witnesses -->
            <div class="section">
                <strong>Witnesses:</strong><br><br>
                1. Name: ___________________ Signature: _______________<br><br>
                2. Name: ___________________ Signature: _______________
            </div>
        </div>
    </div>
</body>

</html>