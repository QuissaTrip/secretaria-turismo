<?php
    $agenda = json_decode( file_get_contents(APP_URL . "/events") );
?>

<?php getHtmlHeader() ?>
    <?php getNavbar() ?>

    <section id="agenda" class="testimonials">
        <div class="container">
            <header class="text-center no-margin-bottom">
                <h2 style="margin-bottom: 50px">Agenda de eventos</h2>
            </header>
            <div class="row">
                <div id="calendar"></div>
            </div>
        </div>
    </section>

    <?php scrollToTop() ?>
    <?php getFooter() ?>
<?php getScripts( array("calendar" => true) ) ?>

<script>

	$(document).ready(function() {
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'title',
				right: 'prev,next today'
			},
			editable: false,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: false,
			defaultView: 'month',

			events: [
                <?php
                    $i = 0;
                    foreach ($agenda as $months) {
                        foreach ($months as $event) { ?>
            				{
            					title: "<?php echo $event->text ?>",
            					start: new Date(<?php echo date("Y") ?>, <?php echo $i ?>, <?php echo $event->date ?>),
                                className: "success"
            				}, <?php
                        }
                        $i++;
                    }
                ?>
			],
		});
	});

</script>
<style>
	.fc-day-number {
        width: 33px !important;
        height: 33px !important;
    }
    section {
        padding: 80px 0 30px;
    }
	#calendar {
        margin: 0 auto;
		width: 100%;
		background-color: #FFFFFF;
        border-radius: 6px;
        box-shadow: 0px 1px 9px rgba(0, 0, 0, 0.3)
	}

</style>
