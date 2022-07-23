<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jfilipiak
 */

?>

<footer>

    <section>
        <div class="container-fluid ">
            <div class="container pt-lg-5 pb-5 pb-lg-0">
                <div class="row pt-lg-5 ">
                    <div class="col-1 d-none d-lg-flex"></div>
                    <div data-scroll data-scroll-speed="1" class="col-12 col-lg-3">
                        <div class="pb-lg-4">
                            <h3>Contact</h3>

                            <p>BUHARA SEAFOOD<br>
                                Fisch Groß- und Einzelhandel GmbH <br>
                                Telefon: <strong>06074 91 40 561</strong></p>

                        </div>

                        <div class="mt-lg-3">
                            <h3>Öffnungszeiten</h3>
                            <p>
                                Montag ist Ruhetag </br>
                                Dienstag <strong> 08:00</strong> bis <strong>18:00</strong></br>
                                Mittwoch <strong>08:00</strong> bis <strong>18:00</strong></br>
                                Donnerstag <strong>08:00</strong> bis <strong>18:00</strong></br>
                                Freitag <strong>08:00</strong> bis <strong>18:00</strong></br>
                                Samstag: <strong>08:00</strong> bis
                                <strong>16:00</strong></br>

                            </p>
                        </div>

                    </div>

                    <div class="col-12 col-lg-8 d-none d-lg-flex align-items-center justify-content-center">

                        <div class="mapouter">
                            <div class="gmap_canvas d-flex justify-content-center"><iframe id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Dietzenbach,%20Max-Planck-Str.%202&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                                <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 1080px;
                                }
                                </style><a href="https://www.embedgooglemap.net"></a>
                                <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 1080px;
                                }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-bottom pb-5 pt-lg-5 d-none d-lg-flex">
        <div class="container-fluid pb-5 pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <small> © <?php echo date('Y'); ?> Buhara Seafood – All rights reserved</small>

                    </div>
                    <div class="col d-none d-lg-flex"></div>
                </div>
            </div>
        </div>
    </section>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>