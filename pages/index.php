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
                    <div class="card-header">My Series</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" required class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-3 col-form-label">Odd / Even</label>
                                <div class="col-md-9">
                                   <label><input type="radio" name="odd_even" value="odd"/> Odd</label>
                                   <label><input type="radio" name="odd_even" value="even"/> Even</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($result) ? $result: ' ';?></textarea>
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