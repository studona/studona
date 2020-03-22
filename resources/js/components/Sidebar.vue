<template>
    <aside class="sidebar" v-bind:class="{active: this.$store.state.sidebar_active}">
        <ul>
            <li>
                <router-link to="/">
                    <i class="fas fa-thumbtack"></i>
                    <span>Übersicht</span>
                </router-link>
            </li>
        </ul>
        <ul>
            <li>
                <router-link to="/group">
                    <i class="fas fa-project-diagram"></i>
                    <span>Gruppe</span>
                </router-link>
            </li>
            <li>
                <router-link to="/appointment">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Termine</span>
                </router-link>
            </li>
        </ul>
        <ul class="only-mobile">
            <li>
                <router-link to="/settings">
                    <i class="fas fa-cog"></i>
                    <span>Einstellungen</span>
                </router-link>
            </li>
            <li>
                <router-link to="/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Ausloggen</span>
                </router-link>
            </li>
        </ul>
    </aside>
</template>

<script>
    export default {
        name: 'Sidebar',
    }
</script>