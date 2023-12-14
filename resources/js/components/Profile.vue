<template>
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
        </li>
        </ul>

        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
        <form class="form-inline">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
        <i class="fas fa-times"></i>
        </button>
        </div>
        </div>
        </form>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">

        <div class="media">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        Brad Diesel
        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">Call me whenever you can...</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>

        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">

        <div class="media">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        John Pierce
        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">I got your message bro</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>

        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">

        <div class="media">
        <div class="media-body">
        <h3 class="dropdown-item-title">
        Nora Silvester
        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
        </h3>
        <p class="text-sm">The subject goes here</p>
        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
        </div>
        </div>

        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        {{ user.name }}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
        </a>
        </li>
        </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Task</a>
        </div>
        </div>

        <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
        </div><div class="sidebar-search-results">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <div class="search-title">
                        <strong class="text-light">

                        </strong>
                        N
                        <strong class="text-light">

                        </strong>o<strong class="text-light"></strong>
                         <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="./index.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Users</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="./index2.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Events</p>
            </a>
            </li>
            </ul>
            </li>
            </ul>
            </nav>


        </div>

        </aside>

        <div class="content-wrapper" style="min-height: 1302.4px;">
            </div>


        <aside class="control-sidebar control-sidebar-dark" style="display: none;">

        <div class="p-3 control-sidebar-content" style=""><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="#">clear</a></select></div></aside>


        <footer class="main-footer">
        <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
        </div>
        </footer>
        <div id="sidebar-overlay"></div></div>
</template>


<script>
export default {
    data() {
    },
    methods: {
    },
    computed:{
        user(){
            return this.$store.getters.getUserData
        }
    },
    mounted() {
        this.$store.dispatch("me");
    }
  }
  </script>
