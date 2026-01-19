<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Struk</title>
    <style>
        @page {
            size: 80mm auto;
            margin: 0;
        }
        
        body {
            width: 80mm;
            margin: 0 auto;
            padding: 10px;
            font-family: "Courier New", monospace;
            font-size: 12px;
            line-height: 1.4;
        }
        
        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        
        .header img {
            display: block;
            margin: 0 auto 5px;
        }
        
        .header h3 {
            margin: 5px 0;
            font-size: 16px;
            font-weight: bold;
        }
        
        .content {
            font-size: 11px;
        }
        
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            gap: 10px;
        }
        
        .col-label {
            flex: 0 0 40%;
            text-align: left;
        }
        
        .col-value {
            flex: 0 0 60%;
            text-align: right;
            font-weight: bold;
        }
        
        hr {
            border: none;
            border-top: 1px dashed #000;
            margin: 10px 0;
        }
        
        .total {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #000;
        }
        
        .total .row {
            font-size: 13px;
            font-weight: bold;
        }
        
        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 10px;
            border-top: 1px dashed #000;
            padding-top: 10px;
        }
        
        @media print {
            body {
                width: 80mm;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/sco/thumb/0/0c/Liverpool_FC.svg/250px-Liverpool_FC.svg.png" alt="Logo" width="50" height="50">
        <h3>Ipul Laundry</h3>
        <div style="font-size: 10px;">Jl. Wahyu Said No.1</div>
    </div>
    
    <div class="content">
        <div class="row">
            <div class="col-label">Nama Pelanggan</div>
            <div class="col-value">{{ $transaksi->nama_pelanggan }}</div>
        </div>
        <div class="row">
            <div class="col-label">No. Telpon</div>
            <div class="col-value">{{ $transaksi->nomor_telpon ?? '1237426424234' }}</div>
        </div>
        <div class="row">
            <div class="col-label">Waktu Transaksi</div>
            <div class="col-value">{{ $transaksi->waktu_transaksi }}</div>
        </div>
        
        <hr>
        
        <div class="row">
            <div class="col-label">Layanan</div>
            <div class="col-value">{{ $transaksi->layanan->nama_layanan }}</div>
        </div>
        <div class="row">
            <div class="col-label">Berat</div>
            <div class="col-value">{{ $transaksi->berat }} kg</div>
        </div>
        <div class="row">
            <div class="col-label">Harga / kg</div>
            <div class="col-value">Rp {{ number_format($transaksi->layanan->harga_per_kg, 0, ',', '.') }}</div>
        </div>
        
        <div class="total">
            <div class="row">
                <div class="col-label">TOTAL</div>
                <div class="col-value">Rp {{ $transaksi->layanan->harga_per_kg * $transaksi->berat }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Terima Kasih<br>Atas Kepercayaan Anda</p>
        </div>
    </div>
</body>
</html>