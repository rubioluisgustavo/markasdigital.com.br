<!DOCTYPE html>
<html lang="pt-BR">

<?php


include("./views/header.php");
$jsonFile = './data/indexData.json';

$jsonFileMenu = './data/menuData.json';
$dataMenu = json_decode(file_get_contents($jsonFileMenu), true);


?>

<body>

    <?php
    if (file_exists($jsonFile)) {
        $data = json_decode(file_get_contents($jsonFile), true);

        if ($data) {

    ?>
            <section id="call-to-action">
                <div class="container" data-aos="fade-up">
                    <header class="section-header wow fadeInUp">
                        <h3><?php echo $dataMenu[0]['title']; ?></h3>
                    </header>

                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $data['content']; ?>
                        </div>
                        <div class="col-md-6 text-center">
                            <?php $imagePath = './uploads/' . ($data['image']);
                            echo '<img src="' . ($imagePath) . '" alt="Imagem enviada" style="width: 30%;">'; ?>
                        </div>
                    </div>

                </div>
            </section>

    <?php

        }
    }
    ?>
</body>

</html>


<?php

include("./views/footer.php");
?>

</body>

</html>