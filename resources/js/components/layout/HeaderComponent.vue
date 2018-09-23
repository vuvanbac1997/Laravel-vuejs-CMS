<template>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand mr-1" href="">Admin</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a  class="flagstrap" data-selected-country=""></a>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger"></span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header"></h6>
                        <h6 class="dropdown-header">System Messages</h6>

                        <a class="dropdown-item" href="" style="white-space: inherit;">
                            <p></p>
                        </a>

                    </div>
                </li>

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <h6 class="dropdown-header">Name: $authUser->name
                        </h6>
                        <h6 class="dropdown-header">Role: {{user.role}}</h6>
                        <a class="dropdown-item" href="">Profile</a>
                        <div class="dropdown-divider"></div>
                        <form id="signout" method="post" action="">
                            <button class="btn btn-secondary" href="">signout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
</template>

<script>
    export default {
        name: "HeaderComponent",
        props:['name'],
        data: function () {
            return {
                user: [],
                notification: []
            }
        },
    }
</script>

<style scoped>

</style>