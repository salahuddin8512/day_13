<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">series</a></li>
            <li><a href="" class="nav-link">string</a></li>
            <li><a href="" class="nav-link">array</a></li>
        </ul>
    </div>
</nav>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">My String</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Enter Your String</label>
                                <div class="col-md-9">
                                    <input type="text" name="given_string" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Word</label>
                                <div class="col-md-9">
                                    <input type="number" name="total_word" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Character</label>
                                <div class="col-md-9">
                                    <input type="number" name="total_character" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success" value="Submit"/>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
