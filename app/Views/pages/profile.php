<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="/css/profile_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">About Me</h3>

                        <h6 class="theme-color lead"><?= $data_user['major'] ?></h6>
                        <p><?= $data_user['description'] ?></p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Nama</label>
                                    <p><?= $data_user['nama'] ?></p>
                                </div>
                                <div class="media">
                                    <label>Birthday</label>
                                    <p><?= $data_user['birthday'] ?></p>
                                </div>
                                <div class="media">
                                    <label>Age</label>
                                    <p><?= $data_user['age'] ?> Yr</p>
                                </div>
                                <div class="media">
                                    <label>Address</label>
                                    <p><?= $data_user['address'] ?></p>
                                </div>
                                <a href="/ProfileUser/edit_profile"><button type="button" class="btn btn-primary">Edit</button></a>

                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>E-mail</label>
                                    <p><?= $data_user['email'] ?></p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p><?= $data_user['phone'] ?></p>
                                </div>
                                <div class="media">
                                    <label>Instagram</label>
                                    <p><?= $data_user['instagram'] ?></p>
                                </div>
                                <div class="media">
                                    <label>Facebook</label>
                                    <p><?= $data_user['facebook'] ?></p>
                                </div>
                                <a href="/ProfileUser/logout"><button type="button" class="btn btn-primary">Logout</button></a>

                            </div>
                            <p style="color: green;"><?= session()->getFlashdata('pesan'); ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="/img/<?= $data_user['dirAvatar'] ?>" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>