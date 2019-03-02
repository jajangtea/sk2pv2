
                     
                    <!-- Footer -->
                    <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                        <div class="row align-items-center">
                            <!-- Footer Nav -->
                            <div class="col-md-4 g-mb-10 g-mb-0--md">
                                <ul class="list-inline text-center text-md-left mb-0">
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#!">FAQ</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="g-color-gray-dark-v6">|</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#!">Support</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="g-color-gray-dark-v6">|</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#!">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Nav -->

                            <!-- Footer Socials -->
                            <div class="col-md-4 g-mb-10 g-mb-0--md">
                                <ul class="list-inline g-font-size-16 text-center mb-0">
                                    <li class="list-inline-item g-mx-10">
                                        <a href="#!" class="g-color-facebook g-color-secondary--hover">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10">
                                        <a href="#!" class="g-color-google-plus g-color-secondary--hover">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10">
                                        <a href="#!" class="g-color-black g-color-secondary--hover">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-10">
                                        <a href="#!" class="g-color-twitter g-color-secondary--hover">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Socials -->

                            <!-- Footer Copyrights -->
                            <div class="col-md-4 text-center text-md-right">
                                <small class="d-block g-font-size-default">&copy; 2018 Htmlstream. All Rights Reserved.</small>
                            </div>
                            <!-- End Footer Copyrights -->
                        </div>
                    </footer>
                    <!-- End Footer -->
                </div>
            </div>
        </main>
        <script>
            $(document).on('ready', function () {
                // initialization of custom select
                $('.js-select').selectpicker();

                // initialization of hamburger
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of charts
                $.HSCore.components.HSAreaChart.init('.js-area-chart');
                $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                $.HSCore.components.HSBarChart.init('.js-bar-chart');

                // initialization of sidebar navigation component
                $.HSCore.components.HSSideNav.init('.js-side-nav', {
                    afterOpen: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    },
                    afterClose: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    }
                });

                // initialization of range datepicker
                $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

                // initialization of datepicker
                $.HSCore.components.HSDatepicker.init('#datepicker', {
                    dayNamesMin: [
                        'SU',
                        'MO',
                        'TU',
                        'WE',
                        'TH',
                        'FR',
                        'SA'
                    ]
                });

                // initialization of HSDropdown component
                $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

                // initialization of custom scrollbar
                $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox', {
                    btnTpl: {
                        smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
                    }
                });
            });
        </script>
        <?php $this->endBody() ?>
    </body>
</html>

<?php $this->endPage() ?>
