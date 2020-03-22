<template>
    <nav class="navbar">
        <div class="brand">
            <span>{{ this.$store.state.app_name }}</span>
        </div>
        <div class="menu">
            <a>
                <span>Nachname, Vorname</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <ul>
                <li class="separator">
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
        </div>
        <div class="toggle">
            <i class="fas fa-bars fa-lg"></i>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'Navbar',
    }
</script>