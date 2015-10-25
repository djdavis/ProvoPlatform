<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header text-center">Welcome, <?=$user->user_fname. ' '.$user->user_lname;?>!</small></h1>
	<p class="lead text-center"><?=date('F jS Y, g:i:sa')?></p>
   <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="margin-top-none">Views<span class="label label-success pull-right">Monthly</span></h5>
                    <h1 class="text-center">6,200</h1>
                    <p class="small text-muted text-center">Total Views</p>
                </div>
                <div class="panel-footer">Last Month <span class="text-success pull-right">34%<i class="fa fa-fw fa-level-up"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="margin-top-none">Orders<span class="label label-info pull-right">Annual</span></h5>
                    <h1 class="text-center">80,800</h1>
                    <p class="small text-muted text-center">New Orders</p>
                </div>
                <div class="panel-footer">Last Month <span class="text-info pull-right">90%<i class="fa fa-fw fa-level-down"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="margin-top-none">Visits<span class="label label-danger pull-right">Today</span></h5>
                    <h1 class="text-center">763</h1>
                    <p class="small text-muted text-center">New Visits</p>
                </div>
                <div class="panel-footer">Yesterday <span class="text-danger pull-right">27%<i class="fa fa-fw fa-level-down"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="margin-top-none">User Activity<span class="label label-warning pull-right">Monthly</span></h5>
                    <h1 class="text-center">27,985</h1>
                    <p class="small text-muted text-center">In First Month</p>
                </div>
                <div class="panel-footer">Last Month <span class="text-warning pull-right">34% <i class="fa fa-fw fa-level-up"></i></span>
                </div>
            </div>
        </div>
    </div> 
</div>
<?=$footer?>