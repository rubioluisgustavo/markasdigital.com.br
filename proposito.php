<?php
include("./views/header.php");
$jsonFile = './data/propositoData.json';
$jsonFileMenu = './data/menuData.json';
$dataMenu = json_decode(file_get_contents($jsonFileMenu), true);
?>

<?php

if (file_exists($jsonFile)) {
    $data = json_decode(file_get_contents($jsonFile), true);

    if ($data) {
?>
        <main id="main">
            <section id="about">
                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h3><?php echo ($dataMenu[1]['title']) ?></h3>
                    </header>

                    <div class="row about-cols">

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="about-col">
                                <div class="img">
                                </div>
                                <h2 class="title"><?php echo ($data['titleBlock1']) ?></h2>
                                <?php echo '<p>' . ($data['contentBlock1']) . '</p>' ?>
                            </div>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="about-col">
                                <div class="img">
                                </div>
                                <h2 class="title"><?php echo ($data['titleBlock2']) ?></h2>
                                <?php echo '<p>' . ($data['contentBlock2']) . '</p>' ?>
                            </div>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="about-col">
                                <div class="img">
                                </div>
                                <h2 class="title"><?php echo ($data['titleBlock3']) ?></h2>
                                <?php echo '<p>' . ($data['contentBlock3']) . '</p>' ?>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

        </main>

<?php }
}
include("./views/footer.php");
?>

</body>

</html>