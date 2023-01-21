

<!--========================================

Cookies EU regulation

========================================-->

<div id="cookieConsent" >
    <div id="closeCookieConsent">x</div>
    Na zlepšenie našich služieb používame cookies. O ich používaní a možnostiach nastavenia sa môžete informovať bližšie <a href="cookies_about.php" target="_blank">tu</a>. <a class="cookieConsentOK">OK</a>
</div>

<!--========================================

       Footer

========================================-->


<footer>

    <div id="footer" class="container">

        <!-- Contact Form -->
        <div class="row">
            <div class="contact-forms">

                <div class="container">
                    <div class="text-center pb5p">
                        <h2 style="text-transform: uppercase">Kontakt</h2>
                        <h5>Nezáleží, či ste z mesta Žilina, Bratislava, Košice, Prešov, Trnava, Martin, Banská Bystrica,
                            Zvolen, Trenčín, Piešťany, Michalovce, či z iného mesta.
                            Napíšte nám a všetko vybavíme elektronicky. </h5>
                    </div>

                    <form class="contact-form col-xs-center" id="contact-form" method="post" action="contact.php" role="form">
                        <div class="messages"></div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <input id="form_name" name="name" type="text" class="form-control" placeholder="Meno alebo názov firmy" required="required">

                            </div>

                            <div class="form-group">

                                <input id="form_email" name="email" type="email" class="form-control" placeholder="Váš e-mail" required="required">

                            </div>

                            <div class="form-group">

                                <input id="form_phone" name="phone" type="text" class="form-control" placeholder="Telefónne číslo" required="required">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <textarea id="form_message" name="message" class="form-control" rows="5" placeholder="Dobrý deň,mám záujem o Vaše služby. Kontaktujte ma prosím."></textarea>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-white"><i class="imiddle material-icons">mail</i> Odoslať Správu</button>

                    </form>

                </div>

            </div>

        </div>
        <div class="row">

            <div class="footer-caption">
                <hr>
                <div class="col-md-4 col-xs-12 col-xs-center">
                    <h5 class="">SproEkon SK s.r.o.&copy;2013 </h5>
                </div>
                <div class="col-md-4 col-xs-12 col-xs-center">
                    <h5><i class="imiddle material-icons">local_phone</i>&nbsp;&nbsp;0948179888</h5>
                </div>
                <div class="col-md-4 col-xs-12 col-xs-center">
                    <h5><i class="imiddle material-icons">email</i>&nbsp;&nbsp;zalozsro@zalozsro.sk</h5>
                </div>
            </div>

        </div>

    </div>

</footer>


<!--========================================

       Modal Contact

========================================-->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Info o odoslaní správy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--
<script src="assets/bootstrap-3.4.1/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
-->
<!--  <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script> -->
<script src="assets/js/plugins/bootsnav_master/js/bootsnav.js"></script>
<script src="assets/js/plugins/bootsnav_master/js/bootstrap.min.js"></script>

<script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

<script src="assets/js/main.js"></script>

<script>
    $(function () {
    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contactModal').find('.modal-body').html(alertBox);
                        $('#contact-form')[0].reset();
                    }

                    $('#contactModal').modal('show')
                }
            });
            return false;
        }
    })
    })
</script>