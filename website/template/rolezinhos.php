<?php
    $rolezinhos = json_decode( file_get_contents(APP_URL . "/rolezinhos") );
?>

<?php getHtmlHeader() ?>
    <?php getNavbar() ?>

    <section id="lugares" class="testimonials">
        <div class="container">
            <header class="text-center no-margin-bottom">
                <h3 style="margin-bottom: 50px">Veja o que as pessoas estão postando atualmente</h3>
            </header>
            <div class="row">
                <?php
                    foreach ($rolezinhos as $rolezinho) { ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <a href="<?php echo $rolezinho->media ?>" class="glightbox">
                                <div class="role-card text-center" style="background-image: url(<?php echo $rolezinho->media ?>)">
                                    <div class="content">
                                        <div class="user-info">
                                            <img src="<?php echo $rolezinho->user->avatar ?>" />
                                            <p><?php echo $rolezinho->text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <style>
        .glightbox {
            display: block;
            color: #000;
        }
            .glightbox:hover {
                color: #000;
            }

        .role-card {
            background-position: center center !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-color: #000 !important;

            height: 450px;
            width: 100%;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.23);
            background-color: #000;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            border: none;
        }
            .role-card .content {
                position: absolute;
                top: 0;
                left: 0;
                background-color: rgba(0,0,0,0.4);
                width: 92%;
                height: 95%;
                border-radius: 6px;
                margin: auto 4%;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                flex-direction: column;
                padding: 0px;
            }

                .role-card .content .user-info {
                    background: rgba(197, 197, 197, 0.89);
                    width: calc(100% + 2px);
                    margin-bottom: -3px;
                    border-bottom-left-radius: 6px;
                    border-bottom-right-radius: 6px;
                    min-height: 80px;

                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    padding: 20px;
                }

                .role-card .content .user-info p {
                    margin: 0px;
                }

                .role-card .content .user-info img {
                    height: 40px;
                    width: 40px;
                    border-radius: 50%;
                    border: 2px solid #FFF;
                    background: #FFF;
                    position: absolute;
                    bottom: 60px;
                    left: 25px;
                }
    </style>
    <?php scrollToTop() ?>
    <?php getFooter() ?>
<?php getScripts() ?>
