<?php
?>

<!--this will be our main container -->
<div class="container">

    <!--this row will use for item image -->
    <div class="row">

        <div class="col-md-offset-3 col-md-6">

            <!--image for item-->
            <img src="<?= $images?>" alt="item" height="300" width="600"/>

        </div>

    </div>

    <!--this row is for description -->
    <div class="row">

        <div class="col-md-offset-3 col-md-7">


            <h3>  <?php echo $model['subitem_name']?></h3>
            <p>
                <!--here we provide description of a product-->
                <?php echo $model['item_description']?>
            </p>
            <div class="panel panel-default">
                <div class="panel-heading"><b>Quantity</b></div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Plate</th>
                            <th>Price</th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php foreach ($quantityModel as $quantity ) { ?>
                            <tr>
                                <td style="width: 85%;"><?php echo $quantity['plate'] ?></td>
                                <td><?php echo $quantity['price'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
