<?php
$contentsLang = file_get_contents("./data/languages.json");
$contentsLang = json_decode($contentsLang);
include("./views/header.php");
?>
<section id="call-to-action">
    <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
            <h3><?php echo $contentsLang->$lang->menuSolucoes; ?></h3>
        </header>

        <div class="row">
            <div class="col-md-6">
                <p>

                    <strong> O quão importante é?</strong>
                    <?php echo $contentsLang->$lang->solucoesContentSub; ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p>
                    <strong> <?php echo $contentsLang->$lang->solucoesItem1Title; ?></strong><br>
                    <?php echo $contentsLang->$lang->solucoesItem1Content; ?>
                </p>
            </div>
            <div class="col-md-6 text-center">
            </div>
        </div>

    </div>
</section>


<?php

include("./views/footer.php");
?>

</body>

</html>