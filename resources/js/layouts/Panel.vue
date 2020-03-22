<template>
    <div id="layout-panel" v-bind:class="{'overflow-hidden': this.$store.state.sidebar_active}">

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
    import { mapState } from 'vuex';
    import Navbar from '../components/Navbar';
    import Sidebar from '../components/Sidebar';
    export default {
        name: "Panel",
        components: {
            Navbar,
            Sidebar,
        },
        computed: mapState(['sidebar_active']),
        watch: {
            $route() {
                if(this.$store.state.sidebar_active) {
                    this.$store.state.sidebar_active = false;
                }
            },
            'sidebar_active' () {
                if(this.$store.state.sidebar_active) {
                    document.documentElement.style.overflow = 'hidden';
                } else {
                    document.documentElement.style.overflow = 'auto';
                }
            }
        }
    }
</script>