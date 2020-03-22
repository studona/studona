<template>
    <div id="layout-panel">

        <!-- navbar -->
        <Navbar></Navbar>
        
        <!-- main container -->
        <main>

            <!-- sidebar -->
            <Sidebar></Sidebar>

            <!-- content with container -->
            <content>
                <router-view class="container"></router-view>
            </content>
        </main>
    </div>
</template>

<script>
    import Navbar from '../components/Navbar';
    import Sidebar from '../components/Sidebar';
    export default {
        name: "Panel",
        components: {
            Navbar,
            Sidebar,
        }
    }
</script>