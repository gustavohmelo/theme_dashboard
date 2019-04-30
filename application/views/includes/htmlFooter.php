</div>
</div>
</div>
<!-- Page content -->

<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url()?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url()?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url()?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url()?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="<?= base_url()?>/assets/js/argon.js?v=1.0.0"></script>

<?php
    if (isset($js)) {
        foreach ($js as $j) {
            echo '<script src="' . base_url() . '/assets/js/' . $j . '.js"></script>';
        }
    }

?>
</body>

</html>