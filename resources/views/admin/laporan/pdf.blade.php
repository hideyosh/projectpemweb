<!DOCTYPE html>
<html>
<head>
	<title>Report PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Laporan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Order</th>
                            <th>Nama Produk</th>
                            <th>Nama User</th>
                            <th>Total Transaksi</th>
                            <th>Jenis Pembayaran</th>
                            <th>Tanggal</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($laporan as $laporan )

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $laporan->order->name_order }}</td>
                            <td>{{ $laporan->order->product->name }}</td>
                            <td>{{ $laporan->order->user->name }}</td>
                            <td>{{ $laporan->order->product->harga }}</td>
                            <td>{{ $laporan->jenis_pembayaran }}</td>
                            <td>{{ $laporan->tanggal}}</td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
