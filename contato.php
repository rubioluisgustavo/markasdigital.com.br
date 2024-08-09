<?php
$contentsLang = file_get_contents("./data/languages.json");
$contentsLang = json_decode($contentsLang);
include("./views/header.php");
?>


<main id="main">
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3><?php echo ($contentsLang->$lang->menuContato) ?></h3>
                <p><?php echo ($contentsLang->$lang->contatoContentSub) ?></p>
            </div>
            <div class="row contact-info">
                <div class="col-md-6">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3><?php echo ($contentsLang->$lang->faleConosco) ?></h3>
                        <p><a href="https://api.whatsapp.com/send?phone=+5515996994538&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20as%20soluções%20da%20Markas%20Digital!">
                                +55 (15) 99699-4538
                            </a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>E-mail</h3>
                        <p><a href="mailto:comercial@markasdigital.com.br">comercial@markasdigital.com.br
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
include("./views/footer.php");
?>

</body>


</html>