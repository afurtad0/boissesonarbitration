<?php
include('config.php');
include('header.php');
?>
        <!-- <div class="d-table s-jumbotron">
            <div class="text-center">
                <h5>CONTACT</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div> -->

        <br>

        <div class="row">
            <div class="col-md-3">
                &nbsp;
            </div>

            <div class="col-md-6">

                <?php if (isset($result)) { ?>
                    <div class="alert alert-info" role="alert"><?php echo $result ?></div>
                <?php } ?>

                <h5>CONTACT US</h5>

                <!-- <p>Matthieu de Boisséson<br>
                    Arbitrator</p> -->

                <p><a href="mailto:mdb@matthieudeboisseson.com">mdb@matthieudeboisseson.com</a> /
                    <a href="mailto:mdb@boisseson.net">mdb@boisseson.net</a><br>
                    <a href="mailto:mtarre@matthieudeboisseson.com">mtarre@matthieudeboisseson.com</a><br>
                    <a href="mailto:secretariat@matthieudeboisseson.com">secretariat@matthieudeboisseson.com</a>

                <p>Littleton Chambers, London<br>
                    United Kingdom<br>
                    Tel: <a href="tel:+442077978600">+44 20 7797 8600</a></p>

                <p>3186 Avenida Atlantica, Rio de Janeiro<br>
                    Brazil<br>
                    Tel:  <a href="tel:+552135462372">+55 21 3546 2372</a></p>

                <p>Arbitration Chambers Hong Kong<br>
                    China<br>
                    Tel: <a href="tel:+85221406555">+852 2140 6555</a></p>

                <!--
                <p>You can contact us using our online form below or sending an e-mail to <a href="mailto:secretariat@matthieudeboisseson.com">secretariat@matthieudeboisseson.com</a>.</p>

                <form method="POST">
                    <input type="hidden" name="phone" value="">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
                -->
                <br>
            </div>

            <div class="col-md-3">
                &nbsp;
            </div>
        </div>

<?php include('footer.php') ?>