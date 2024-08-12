<?php
include("./views/header.php");
$jsonFile = './data/contatoData.json';
$jsonFileMenu = './data/menuData.json';
$dataMenu = json_decode(file_get_contents($jsonFileMenu), true);
?>


<?php
if (file_exists($jsonFile)) {
    $data = json_decode(file_get_contents($jsonFile), true);

    if ($data) {

?>
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3><?php echo $dataMenu[4]['title']; ?></h3>
                    <p><?php echo $data['subtitle']; ?></p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-6">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>TELEFONE</h3>
                            <p><a href="https://api.whatsapp.com/send?phone=+5515996994538&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20as%20soluções%20da%20Markas%20Digital!">
                                    <?php echo $data['phone']; ?>
                                </a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>E-mail</h3>
                            <p><a href="mailto:<?php echo $data['phone']; ?>"><?php echo $data['email']; ?>
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php }
} ?>

<?php
include("./views/footer.php");
?>

</body>


</html>