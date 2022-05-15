</div>
    </main>

    <footer class="dashboard-footer container-fluid">
        <div class="d-flex flex-column">
            <section class="row bottom">
                <div class="col-12 col-sm-8 text-center text-sm-end">
                    <i class="far fa-copyright"></i>
                    تمامی حقوق برای وبسایت کیمیای مهر محفوظ می باشد.
                </div>
                <div class="col-12 col-sm-4 text-center text-sm-start dir-ltr">
                    1399 - <?= jdate( "Y" ); ?>
                </div>
            </section>
        </div>
    </footer>

    <!-- scripts -->
    <script type="text/javascript" src="<?= base_url( "/assets/js/lib/bootstrap.bundle.min.js" )?>"></script>
    <script type="text/javascript" src="<?= base_url( "/assets/js/lib/sweetalert2.min.js" )?>"></script>
    <script type="text/javascript" src="<?= base_url( "/assets/js/lib/jalaali.min.js" )?>"></script>
    
    <script type="text/javascript" src="<?= base_url( "/assets/js/global/config.js" )?>"></script>
    <script type="text/javascript" src="<?= base_url( "/assets/js/global/helper.js" )?>"></script>
    <script type="text/javascript" src="<?= base_url( "/assets/js/global/Alert.js" )?>"></script>
    <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/Dashboard.js" )?>"></script>
    
    <?php if( $page_name === "booking_index" ) : ?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/lib/mds.bs.datetimepicker.js" )?>"></script>
        <script type="text/javascript" src="<?= base_url( "/assets/js/lib/mdtimepicker.js" )?>"></script>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/Booking.js" )?>"></script>
    <?php elseif( $page_name === "reservation_index" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/Reservation.js" ) ?>"></script>
    <?php elseif( $page_name === "reservation_turns" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/ReservationTurns.js" ) ?>"></script>
    <?php elseif( $page_name === "booking_turns" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/BookingTurns.js" ) ?>"></script>
    <?php elseif( $page_name === "question_answer_index_patient" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/QAPatient.js" ) ?>"></script>
    <?php elseif( $page_name === "question_answer_index_doctor" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/QADoctor.js" ) ?>"></script>
    <?php elseif( $page_name === "exam_index" ) :?>
        <script type="text/javascript" src="<?= base_url( "/assets/js/page/dashboard/Exam.js" ) ?>"></script>
    <?php endif; ?>
</body>
</html>