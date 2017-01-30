<link href="{{ asset("/bower_components/admin-lte/bootstrap/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="{{ asset("/bower_components/admin-lte/bootstrap/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{ asset("/bower_components/admin-lte/dist/css/admin-lte.min.css") }}" rel="stylesheet" type="text/css" />

<table border="1px" width="45%" style="margin-left: auto;">

    <tr>
            <td>
                <table>
                <tr><td></td>
                    <td> <img src="landing/images/agus_img/logo.png" width="50px"></td>

                <td></td>
                </tr>
                </table>
            </td>
    </tr>
    <tr>
        <td>
            <h3 class="box-title">Guest Internet Service </h3>
            <h2 class="box-title bg-info"> Room {{ $data[0]->username }}</h2>
            <table  width="250px" style="position: absolute;">

                @foreach ($data as $d)
                    <tr><td width="35%"> Username  </td><td width="70%">: {{ $d->username }}</td></tr>
                    <tr><td width="35%"> Password </td><td width="70%">: {{ $d->password }}</td></tr>
                    <tr><td width="35%"> Check Out </td><td width="70%">: {{ $d->expire }}</td></tr>
                    <tr> <td height="75px" width="100%"> <br> <img width="70px" height="70px" src="images/{{ $d->username }}-rbc.png" alt="qrcode"><br>
                            Scan the QR code above for easier login.
                        </td><td width="0%"></td></tr>
                @endforeach



            </table>

        </td>


  </tr>
</table>