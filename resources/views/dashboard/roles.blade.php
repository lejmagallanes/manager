<div class="row">
    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="/activity">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-history fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Activity Log
                </div>
                <div class="circle-tile-number text-faded">
                    Users
                    <span id="sparklineA"></span>
                </div>
                <a href="/activity_logs" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="/permissions">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-lock fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Permissions
                </div>
                <div class="circle-tile-number text-faded">
                    Roles
                    <span id="sparklineA"></span>
                </div>
                <a href="/permissions" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="/users">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-users fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Users
                </div>
                <div class="circle-tile-number text-faded">
                    {{ count(Auth::user()->all())}}
                    <span id="sparklineA"></span>
                </div>
                <a href="/users" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="/users">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-briefcase fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Company Accounting
                </div>
                <div class="circle-tile-number text-faded">
                    Side
                    <span id="sparklineA"></span>
                </div>
                <a href="/users" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="circle-tile">
            <a href="/users">
                <div class="circle-tile-heading dark-blue">
                    <i class="fa fa-cubes fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded">
                    Warehouse Inventory
                </div>
                <div class="circle-tile-number text-faded">
                    Side
                    <span id="sparklineA"></span>
                </div>
                <a href="/users" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>