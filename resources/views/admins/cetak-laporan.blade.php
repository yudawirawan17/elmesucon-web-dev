<!DOCTYPE html>
<html>
<head>
    <style>
        table.static {
            position: relative;
            border: 1px;
        }
    </style>
    <title>Cetak Laporan</title>
</head>
<body>

    <div class="form-group">
        <p align="center"><b>Laporan Data Transaksi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Invoice </th>
                                    <th> user </th>
                                    <th> subtotal </th>
                                    <th> ongkir </th>
                                    <th> no_hp </th>
                                    <th> pesan </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->invoice }}</td>
                                    <td>{{ $order->nama_user }}</td>
                                    <td>{{ $order->subtotal }}</td>
                                    <td>{{ $order->ongkir }}</td>
                                    <td>{{ $order->no_hp }}</td>
                                    <td>{{ $order->pesan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
        </table>
    </div>

</body>
</html>






<script type="text/javascript">
    window.print();
</script>