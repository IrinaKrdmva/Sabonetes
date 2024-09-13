    <main class="container-fluid pt-5 my-5">
        <div class="row about mt-5 mt-lg-4 pt-5 pt-lg-0">
            <h4 class="col-12 titulo-about mx-auto my-5 text-center"><?= getTitleAbout (); ?></h4>
            <div class="col-10 mx-auto my-5 text-center">
                <img src="<?= getImgAbout (); ?>" alt="Imagem de um tabuleiro redondo com sabonetes"
                    class="about-img w-100">
            </div>
            <div class="col-10 mx-auto p mt-5 pt-2 d-none d-lg-block" id="longtxt"><?= getTextAbout (); ?></div>
            <div class="col-10 mx-auto p mt-5 pt-2 d-block d-lg-none" id="shortxt"><?= getTextAboutMobile (); ?></div>
            <div class="col-10 mx-auto mt-4 pt-4 text-center text-lg-start">
                <button class="more d-inline d-lg-none mb-5"></button>
                <br class="d-block d-lg-none">
                <button class="back mb-4"></button>
            </div>
        </div>
    </main>