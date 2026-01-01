
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <!--<h1 class="page-header">Irányítópult</h1>-->

    <!--                    <div class="row placeholders">
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Label</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Label</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Label</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Label</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                        </div>-->

    <h2 class="sub-header">Rendelések</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>                                 
                    <th>Név</th>
                    <th>Email</th>
                    <th>Postázási cím</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($customers as $customer) : ?>
                    <tr style="background-color: #eee;">
                        <td style="vertical-align: middle;"><?php echo $customer->customer_id; ?></td>
                        <td style="vertical-align: middle;"><?php echo $customer->customer_name; ?></td>
                        <td style="vertical-align: middle;"><?php echo $customer->customer_email; ?></td>
                        <td style="vertical-align: middle;"> <?php echo $customer->ship_address; ?></td>
                        <td>
                            <a class="btn btn-primary" role="button" data-toggle="collapse" href="#<?php echo $customer->customer_id; ?>" aria-expanded="false" aria-controls="<?php echo $customer->customer_id; ?>">
                                Részletek
                            </a>

                        </td>
                    </tr>
                    <tr><td colspan="5">
                            <div class="collapse" id="<?php echo $customer->customer_id; ?>">
                                <div class="well">
                                    <table class="table table-condensed table-hover" style="max-width: 700px;">
                                        <thead>
                                            <tr>

                                                <th>Termék</th>
                                                <th class="text-center">Mennyiség</th>
                                                <th class="text-right">Ár&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>                                                             
                                            </tr>
                                        </thead>

                                        <?php
                                        $totalPrice = 0;
                                        $totalQuantity = 0;
                                        foreach ($customer->orders as $order) {
                                            $totalPrice += $order->quantity * $order->price;
                                            $totalQuantity += $order->quantity;
                                            echo '<tr><td>' . $order->title . '</td><td class="text-center">' . $order->quantity . ' db </td><td class="text-right">' . $order->quantity * $order->price . ' Ft </td></tr>';
                                        }

                                        $shippingCosts = shippingCosts($totalQuantity);
                                        echo '<tr><td colspan="2" class="text-right">Postaköltség:</td><td class="text-right">' . $shippingCosts . ' Ft</td></tr>';
                                        echo '<tr><td colspan="2" class="text-right"><strong>Összesen:</strong></td><td class="text-right">' . ($totalPrice + $shippingCosts) . ' Ft</td></tr>';

//                                                        print_r($order);
//
                                        ?>

                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>


                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
