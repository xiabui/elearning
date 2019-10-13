<!DOCTYPE html>
<html>
<head>
    <title>Rating System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/rate_content.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d72af0ed8d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <?php
    //include('./src/header.php');
    ?>

    <div class="container rate-container rounded">
        <div class="row justify-content-center">
            <div class="col">
                <!-- Avatar and Name -->
                <div class="row justify-content-center">
                    <div class="holder">
                        <img src="./images/user_test.png" alt="User Image">
                    </div>
                </div>
                <div class="">
                    <div class="show-name text-center">
                        <h4>Tên Nhân Viên</h4>
                    </div>
                </div>

                <!-- Star Bar -->
                <div class="row justify-content-center">
                    <div class="star-bar">
                        <x-star-rating value="0" number="5"></x-star-rating>
                        <script src="./js/StarRating.js"></script>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <textarea name="" class="form-control text-input" cols="60" rows="10" placeholder="Nhập vào đánh giá của bạn về cách hỗ trợ của nhân viên"></textarea>
                        <button type="submit" class="btn btn-lg btn-success btn-smit">GỬI ĐÁNH GIÁ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // include('./src/footer.php');
    ?>
</body>

</html>