<footer>
    <template>
        <div class="d-flex" id="headerbox">
            <div class="d-flex" id="header">
                <div id="logoheader">
                    <img src="../../img/dc-logo.png" alt="">
                </div>
                <div id="nav" class="d-flex">
                    <ul>
                        <li @foreach ($navData as $item) @endforeach>{{}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </template>
</footer>
