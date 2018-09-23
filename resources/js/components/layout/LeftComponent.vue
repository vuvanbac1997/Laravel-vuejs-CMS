<template>
    <ul class="sidebar navbar-nav">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" href="">
                <i class="fa fa-file"></i>
                <span>Article</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Users Management</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">User Managerment</h6>
                <router-link class="dropdown-item" href=""><span>User</span></router-link>
                <router-link class="dropdown-item" href=""><span>Notification</span></router-link>
                <router-link class="dropdown-item" href=""><span>@lang('admin.menu.users')</span></router-link>
                <router-link class="dropdown-item"  href=""><span>User Notification</span></router-link>

            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Backend</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Backend</h6>
                <router-link class="dropdown-item" href=""><span>OauthClients</span></router-link>
                <router-link class="dropdown-item" href=""><span>image</span></router-link>
                <router-link class="dropdown-item" href=""><span>log System</span></router-link>
            </div>
        </li>
        <!-- %%SIDEMENU%% -->
        <!-- /.sidebar -->
    </ul>
</template>

<script>
    export default {
        name: "LeftComponent"
    }
</script>

<style scoped>

</style>