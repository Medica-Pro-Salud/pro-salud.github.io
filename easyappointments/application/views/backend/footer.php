<div id="footer">
    <div id="footer-content" class="col-12 col-sm-8">
        <img class="mr-1" src="<?= base_url('assets/img/logo-16x16.png') ?>" alt="Easy!Appointments Logo">
        <a href="http://localhost/pro-salud.github.io/">
            Pro-Salud
        </a>

        <!-- v<?= config('version') ?>
        <?php if (config('release_label')): ?>
            - <?= config('release_label') ?>
        <?php endif ?> -->

        |

        <img class="mx-1" src="<?= base_url('assets/img/alextselegidis-logo-16x16.png') ?>" alt="Alex Tselegidis Logo">
        <a href="http://localhost/pro-salud.github.io/">
            Titulacion II
        </a>
        &copy; <?= date('Y') ?> 
        
        |

        <a href="<?= site_url('appointments') ?>">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>

    <div id="footer-user-display-name" class="col-12 col-sm-4">
        <?= lang('hello') . ', ' . $user_display_name ?>!
    </div>
</div>

<script src="<?= asset_url('assets/js/backend.js') ?>"></script>
<script src="<?= asset_url('assets/js/polyfill.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
</body>
</html>
