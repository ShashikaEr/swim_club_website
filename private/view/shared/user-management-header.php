<?php $page_title = 'User Management'; ?>
<?php include('header.php'); ?>
<?php include('navbarView.php'); ?>

<section class="profile">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>User Management</h2>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-non-staff-tab" data-bs-toggle="tab" data-bs-target="#nav-non-staff" type="button" role="tab" aria-controls="nav-non-staff" aria-selected="false">Non-Staff</button>
                <button class="nav-link" id="nav-coach-tab" data-bs-toggle="tab" data-bs-target="#nav-coach" type="button" role="tab" aria-controls="nav-coach" aria-selected="false">Coach</button>
                <button class="nav-link" id="nav-admin-tab" data-bs-toggle="tab" data-bs-target="#nav-admin" type="button" role="tab" aria-controls="nav-admin" aria-selected="false" >Admin</button>
            </div>
        </nav>
        <script>
            $(document).ready(function(){
                $(".nav-link").click(function(){
                    if (!$(this).hasClass("active")) {
                        $(".nav-link").removeClass("active");
                        $(this).addClass("active");
                    }
                });
            });
        </script>
        <div class="tab-content" id="nav-tabContent">



