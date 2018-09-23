<template>
    <div class="body-wrapper" id="app">
        <Navbar></Navbar>

        <div id="wrapper">
            <Leftbar></Leftbar>
            <div id="content-wrapper">
                <div class="container-fluid">
                    <section class="content-header">
                        <h1>Header</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="">Dashboard</a>
                            </li>
                        </ol>
                    </section>
                    <div class="content" style="min-height: 650px;">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>

        <Foot></Foot>
    </div>
</template>

<script>
    import Navbar from './components/layout/HeaderComponent';
    import Leftbar from './components/layout/LeftComponent';
    import Footer from './components/layout/FooterComponent';

    export default {
        name: "App",
        components:{
            'Navbar': Navbar,
            'Leftbar': Leftbar,
            'Foot'  : Footer
        }
    }
</script>

<style scoped>

</style>