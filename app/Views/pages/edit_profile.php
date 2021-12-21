<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/css/edit_profile_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 border">
            <div class="p-3 py-5">
                <div class="d-flex mb-3">
                    <a href="/ProfileUser"><button type="button" class="btn btn-outline-primary">Back</button></a>
                    <h4 class="text-left">&nbsp;Profile Settings</h4>
                </div>
                <form action="/ProfileUser/update/" method="POST" enctype="multipart/form-data">
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Major</label><input type="text" class="form-control" placeholder="enter major" value="<?= $data_user['major'] ?>" name="major" /></div>
                        <div class="col-md-12"><label class="labels">Description</label><input type="text" class="form-control" placeholder="enter description" value="<?= $data_user['description'] ?>" name="desc" /></div>
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="your name" value="<?= $data_user['nama'] ?>" name="name"></div>
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12"><label class="labels">Birthday</label><input type="date" class="form-control" placeholder="enter birthday" value="<?= $data_user['birthday'] ?>" name="birthday" /></div>
                        <div class="col-md-12"><label class="labels">Age</label><input type="number" class="form-control" placeholder="enter age" value="<?= $data_user['age'] ?>" name="age"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value="<?= $data_user['address'] ?>" name="address"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value="<?= $data_user['email'] ?>" name="email" readonly></div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="number" class="form-control" placeholder="enter phone" value="<?= $data_user['phone'] ?>" name="phone"></div>
                        <div class="col-md-12"><label class="labels">Instagram</label><input type="text" class="form-control" placeholder="enter instagram" value="<?= $data_user['instagram'] ?>" name="ig"></div>
                        <div class="col-md-12"><label class="labels">Facebook</label><input type="text" class="form-control" placeholder="enter facebook" value="<?= $data_user['facebook'] ?>" name="fb"></div>
                        <div class="col-md-12">
                            <label class="labels">Upload Foto</label>
                            <input type="file" class="form-control <?= ($validation->hasError('foto') ? 'is-invalid' : ''); ?>" placeholder="enter link foto" value="" name="foto" id="foto" />
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="sumbit" name="edit">Save
                            Profile</button>
                </form>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>