<footer>
    <template>
        <div class="d-flex" id="headerbox">
            <div class="d-flex" id="header">
                <div id="logoheader">
                    <img src="{{ URL::asset('../../img/dc-logo-bg.png') }}" alt="">
                </div>
                <div id="nav" class="d-flex">
                    <ul>
                        @yield('header')
                    </ul>
                </div>
            </div>
        </div>
    </template>
</footer>
