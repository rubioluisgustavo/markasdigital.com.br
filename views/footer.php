<?php
$jsonFile = './data/menuData.json';
$data = json_decode(file_get_contents($jsonFile), true);

$jsonFile2 = './data/contatoData.json';
$data2 = json_decode(file_get_contents($jsonFile2), true); 
?>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 footer-info">
                    <img style="width:50%;" src="./assets/img/logoazul.png" alt="rodapé">
                </div>

                <div class="col-lg-4 col-md-4 footer-links">
                    <ul>
                        <?php foreach ($data as $item) {
                            echo '<li><a class="nav-link scrollto" href="' . $item['href'] . ' ">' . $item['title'] . '</a></li>';
                        } ?>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 footer-contact">
                    <p>
                        <?php echo "CONTATO" ?> <br>
                        <strong><?php echo "whatsapp" ?>:</strong><a href="https://api.whatsapp.com/send?phone=<?php echo ($data2['phone']); ?>&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20as%20soluções%20da%20Markas%20Digital!">
                            <?php echo ($data2['phone']); ?>
                        </a> <br>


                        <strong>E-mail: </strong><a href="mailto:<?php echo ($data2['email']); ?>"><?php echo ($data2['email']); ?></a><br>
                    </p>

                    <div class="social-links">
                        <a href="https://www.instagram.com/markas.digital/" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/markasdigital/?viewAsMember=true" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo ($data2['phone']); ?>&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20as%20soluções%20da%20Markas%20Digital!" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                    </div>

                </div>

            </div>
        </div>
        <div class="footer-rights text-center">
            <?php echo "©" . date('Y') . " MARKAS DIGITAL" ?>
        </div>
    </div>
</footer>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/main.js"></script>