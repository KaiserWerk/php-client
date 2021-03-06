<!-- content -->

<script src="scripts/countdown.js"></script>

<div class="row" id="page-content">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 content-header">
                {planet} "{planet_name}" (<a href="game.php?page=overview&mode=renameplanet">{edit}</a>)
            </div>
            <div class="col-md-12 content-body">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <div>{server_time}</div>
                    </div>
                    <div class="col-md-10 text-center">
                        <div><?php echo date('D M d H:m:s'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 content-header">
                {events}
            </div>
            <div class="col-md-12 content-body">
                <div class="row">
                    <div class="col-md-2 text-center vertical-center">
                        <div>{moon_image}</div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div>
                            <img src="{planet_image}" class="planetImage" alt="Planet"/><br/>
                            {building}
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div>
                            {planetlist_row}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 content-body">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <div>{diameter}</div>
                    </div>
                    <div class="col-md-10 text-center">
                        <div>{planet_diameter} km ({planet_fields_current} / {planet_fields_max} {fields})</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-center">
                        <div>{temperature}</div>
                    </div>
                    <div class="col-md-10 text-center">
                        <div>{approx} {planet_temp_min}&deg;C {to} {planet_temp_max}&deg;C</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-center">
                        <div>{position}</div>
                    </div>
                    <div class="col-md-10 text-center">
                        <div><a href="game.php?page=galaxy&g={planet_galaxy}&s={planet_system}">{planet_galaxy}:{planet_system}:{planet_planet}</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-center">
                        <div>{points}</div>
                    </div>
                    <div class="col-md-10 text-center">
                        <div>{user_points} ({rank} <a href="game.php?page=stats&start={user_rank}">{user_rank}</a> {of}
                            {num_users})
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>