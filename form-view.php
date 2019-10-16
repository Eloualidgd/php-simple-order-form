<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Order food & drinks</title>
</head>
<body>
<div class="container">
    <h1>Order food in restaurant "the Personal Ham Processors"</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
<!--    <div class="alert alert-danger" role="alert">-->
<!--        This is a danger alert—check it out!-->
<!--    </div>-->
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control"/>
<!--                <span class="error"> --><?php //echo $emailErr;?><!--</span>-->
                <div class="alert alert-danger hiddenifempty"><?php echo $emailErr; ?></div>
                <br><br>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" class="form-control">
<!--                    <span class="error"> --><?php //echo $streetErr;?><!--</span>-->
                    <div class="alert alert-danger hiddenifempty"><?php echo $streetErr; ?></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control">
<!--                    <span class="error">* --><?php //echo $streetNErr;?><!--</span>-->
                    <div class="alert alert-danger hiddenifempty"><?php echo $streetNErr; ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" class="form-control">
<!--                    <span class="error"> --><?php //echo $cityErr;?><!--</span>-->
                    <div class="alert alert-danger hiddenifempty"><?php echo $cityErr; ?></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control">
<!--                    <span class="error"> --><?php //echo $zipcodeErr;?><!--</span>-->
                    <div class="alert alert-danger hiddenifempty"><?php echo $zipcodeErr; ?></div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products AS $i => $product): ?>
                <label>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?php echo number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>

        <form class="form-inline">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose</label>
            <select class="custom-select my-2 mr-sm-2" id="inlineFormCustomSelectPref">
                <option value="1">Normal Order 2 h aprx</option>
                <option value="2">Express Order 45 min aprx</option>
            </select>
        </form>

        <button type="submit" class="btn btn-primary">Order!</button>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
    .hiddenifempty:empty{
        display:none;
    }
</style>
</body>
</html>