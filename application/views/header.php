<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Museum Pos Indonesia</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('dashboard');?>">Museum Pos Indonesia</a>
    </div>
    <ul class="nav navbar-right top-nav">               
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ucwords($this->session->nama); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li <?php if(!isset($subheading)){echo 'class="active"';}?> >
                <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Beranda</a>
            </li>
            <li <?php if(isset($subheading) && $subheading == 'Koleksi'){echo 'class="active"';}?> >
                <a href="<?php echo base_url('koleksi'); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Koleksi</a>
            </li>
            <?php if($this->session->role == "super admin"){ ?>
            <li <?php if(isset($subheading) && $subheading == 'Petugas'){echo 'class="active"';}?> >
                <a href="<?php echo base_url('petugas'); ?>"><i class="fa fa-fw fa-table"></i> Petugas</a>
            </li>
            <?php } ?>
            <li <?php if(isset($subheading) && $subheading == 'Kritik Saran'){echo 'class="active"';}?> >
                <a href="<?php echo base_url('kritik-saran'); ?>"><i class="fa fa-fw fa-edit"></i> Kritik Saran</a>
            </li>
        </ul>
    </div>
</nav>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php if(isset($subheading) && !isset($subsubheading)){echo $subheading;}else if(isset($subsubheading)){echo ucwords($subsubheading);}else{echo 'Beranda';} ?>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> <?php if(isset($subheading)){echo '<a href="'.base_url("dashboard").'">Beranda</a>';}else{echo 'Beranda';}?>
                    </li>
                    <?php
                    if(isset($subheading)){
                    ?>
                    <li class="active">
                        <i class="fa fa-file"></i> <?php if(isset($subsubheading)){echo '<a href="'.base_url($subheadingurl).'">'.$subheading.'</a>';}else{echo $subheading;}?>
                    </li>
                    <?php
                    }
                    if(isset($subsubheading)){
                        ?>
                    <li class="active">
                         <i class="fa fa-file"></i> <?php echo ucwords($subsubheading);?>
                         </i>
                         <?php
                    }
                    ?>
                </ol>
            </div>
        </div>