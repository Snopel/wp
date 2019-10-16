    <?php
  session_start();
$date = date("m.d.y");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lunaro Cinemas Receipt</title>
</head>

<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }

</style>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../../media/lunardo_logo_s3541341" width="15%">
                            </td>

                            <td>
                                Customer Invoice<br>
                                Created: <?php echo $date ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Lunardo Cinemas, Inc.<br>
                                ABN: 00 123 456 789<br>
                                Melbourne, VIC 3000
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Customer Details
                </td>

                <td>
                    Values
                </td>
            </tr>

            <tr class="item">
                <td>
                    Name
                </td>

                <td>

                </td>
            </tr>
            <tr class="item">
                <td>
                    Email
                </td>

                <td>

                </td>
            </tr>
            <tr class="item">
                <td>
                    Mobile
                </td>

                <td>

                </td>
            </tr>
            <tr class="item">
                <td>
                    Card Number
                </td>

                <td>

                </td>
            </tr>
            <tr class="item">
                <td>
                    Expiry
                </td>

                <td>

                </td>
            </tr>

            <tr class="heading">
                <td>
                    Order Details
                </td>

                <td>
                    Values
                </td>
            </tr>

            <tr class="item">
                <td>
                    Film
                </td>

                <td>

                </td>
            </tr>

            <tr class="item">
                <td>
                    Session Time
                </td>

                <td>

                </td>
            </tr>

            <tr class="item last">
                <td>
                    Tickets
                </td>

                <td>

                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                    Total: 
                </td>
            </tr>
        </table>
    </div>
</body>

</html>


