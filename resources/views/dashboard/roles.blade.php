<!--IF USER ROLE = ADMIN-->
@if (Auth::user()->role == 'admin')
<div class="row">
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
                    <i class="fa fa-users fa-fw fa-3x"></i>
                </div>
            </a>
            <div class="circle-tile-content dark-blue">
                <div class="text-faded">
                    ACTIVITY LOG
                </div>
                <div class="circle-tile-number text-faded">
                    {{ $latestLog->created_at->diffForHumans() }}
                    <span id="sparklineA"></span>
                </div>
                <a href="/activity_log" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div> 
    </div>

   
</div>
@endif
