<!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Dashboard <small>Control Panel</small></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2><?php countrecords("incoming_deceased"); ?></h2>
                                    <p>Incoming Deceased</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-ambulance"></i>
                                </div>

                                <div class="details bg-primary-3">
                                     <a href="incoming_deceased_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-info-1">
                                <div class="inner">
                                    <h2><?php countrecords("outgoing_deceased"); ?></h2>
                                    <p>Outgoing Deceased</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-cab"></i>
                                </div>

                                <div class="details bg-info-3">
                                     <a href="outgoing_deceased_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-success-1">
                                <div class="inner">
                                    <h2><?php countrecords("relatives_info"); ?></h2>
                                    <p>Relatives</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>

                                <div class="details bg-success-3">
                                     <a href="relatives_info_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-danger-1">
                                <div class="inner">
                                    <h2><?php countrecords("rooms"); ?></h2>
                                    <p>Rooms</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-building"></i>
                                </div>

                                <div class="details bg-danger-3">
                                     <a href="rooms_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second set-->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-success-3">
                                <div class="inner">
                                    <h2><?php countrecords("beds"); ?></h2>
                                    <p>Beds</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-hotel"></i>
                                </div>

                                <div class="details bg-success-1">
                                     <a href="beds_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2><?php countrecords("invoices"); ?></h2>
                                    <p>Invoices</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>

                                <div class="details bg-primary-3">
                                     <a href="invoices_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-warning-1">
                                <div class="inner">
                                    <h2><?php countrecords("bill"); ?></h2>
                                    <p>Bills</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>

                                <div class="details bg-warning-3">
                                   <a href="bill_view.php" style="color: white;text-decoration: none;"><span>View Details <i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                        

                    
                        
            <!-- /PAGE CONTENT -->