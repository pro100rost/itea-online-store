<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>666</h3>

                    <p>All ads</p>
                </div>
                <div class="icon">
                    <i class="fa fa-adn"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>New ads</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-arrow-dropup-circle"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>All messages</p>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope-square"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <!-- Chat box -->
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>

                    <h3 class="box-title">Chat</h3>

                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                        <div class="btn-group" data-toggle="btn-toggle">
                            <button type="button" class="btn btn-default btn-sm active"><i
                                        class="fa fa-square text-green"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm"><i
                                        class="fa fa-square text-red"></i></button>
                        </div>
                    </div>
                </div>
                <div class="box-body chat" id="chat-box">
                    <!-- chat item -->
                    <div class="item">
                        <img src="img/user4-128x128.jpg" alt="user image" class="online">

                        <p class="message">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                Mike Doe
                            </a>
                            I would like to meet you to discuss the latest news about
                            the arrival of the new theme. They say it is going to be one the
                            best themes on the market
                        </p>
                        <div class="attachment">
                            <h4>Attachments:</h4>

                            <p class="filename">
                                Theme-thumbnail-image.jpg
                            </p>

                            <div class="pull-right">
                                <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                            </div>
                        </div>
                        <!-- /.attachment -->
                    </div>
                    <!-- /.item -->
                    <!-- chat item -->
                    <div class="item">
                        <img src="img/user3-128x128.jpg" alt="user image" class="offline">

                        <p class="message">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                Alexander Pierce
                            </a>
                            I would like to meet you to discuss the latest news about
                            the arrival of the new theme. They say it is going to be one the
                            best themes on the market
                        </p>
                    </div>
                    <!-- /.item -->
                    <!-- chat item -->
                    <div class="item">
                        <img src="img/user2-160x160.jpg" alt="user image" class="offline">

                        <p class="message">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                Susan Doe
                            </a>
                            I would like to meet you to discuss the latest news about
                            the arrival of the new theme. They say it is going to be one the
                            best themes on the market
                        </p>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.chat -->
                <div class="box-footer">
                    <div class="input-group">
                        <input class="form-control" placeholder="Type message...">

                        <div class="input-group-btn">
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box (chat box) -->

        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
