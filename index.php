<?php

include "submit.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Alesta Dekont Kontrol</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Form CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="form-wrapper">
                    <form action="" method="post" enctype="multipart/form-data" class="animate-form">
                        <h4 class="headt"> Dekont Gönder </h4>

                        <!-- Display submission status -->
                        <?php if (!empty($statusMsg)) { ?>
                            <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></p>
                        <?php } ?>

                        <!-- Form Elemanları -->
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" placeholder="İsim" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="E-Posta Adresi" required="">
                            </div>
                            <div class="form-group">-->
                                <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" placeholder="Konu" required="">-->
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Açıklama " required=""><?php echo !empty($postData['message']) ? $postData['message'] : ''; ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="attachment" class="form-control">
                            </div>
                            <div class="submit">
                                <input type="submit" name="submit" class="btn" value="Gönder">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>