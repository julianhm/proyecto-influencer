<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJEMPLO!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->


</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

<form action="/crear" method="POST" class="register-form pt-2" id="ejemplo" name="ejemplo" enctype="multipart/form-data">
                <?= csrf_field() ?>   
<div class="col-lg-12 d-flex align-items-center mt-4 btn-media">
                            <input type="file" name="galeriaper[]" id="galeriaper[]" class="open-send btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" value='<?= old('videoperfil') ?>' multiple="" />

                           <!-- <button id="btn-img1" data-id="btn-gallery" type="button" class="btn btn-gray-normal btn-lg open-send" style="border-radius: 0.7rem;" onclick="cleanUpload(); hideInfoProfile();" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-upload-image">Subir foto</button>-->
                        </div> 

                        <div class="col-lg-12 d-flex align-items-center my-4 btn-media">
                            <input type="file" name="fotoper"  class="open-send btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" value='<?= old('fotoper') ?>' />
                            <!-- data-bs-toggle="modal" data-bs-target="#modal-upload-image" onclick="cleanUpload(); showInfoProfile();" data-id="btn-profile"-->
                        </div>

                        <div class="col-lg-12 d-flex align-items-center my-4 btn-media">
                            <input type="file" name="otrafotoper"  class="open-send btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" value='<?= old('fotoper') ?>' />
                            <!-- data-bs-toggle="modal" data-bs-target="#modal-upload-image" onclick="cleanUpload(); showInfoProfile();" data-id="btn-profile"-->
                        </div>

                        <input type="submit" name="submit2" id="submit2"class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px;" value= "¡REGISTRARME!" />

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>ejemplo</p>


    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>

    </div>

</footer>


<!-- -->

</body>
</html>
