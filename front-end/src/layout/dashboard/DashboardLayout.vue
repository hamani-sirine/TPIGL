<template>
  <div class="wrapper">
    <side-bar>
      <template slot="links">
        <sidebar-link to="/stats" name="Profil" icon="ti-user"/>
        <sidebar-link to="/table-list" name="Notes" icon="ti-view-list-alt"/>
        <sidebar-link to="/form-ajout" name="Ajout" icon="ti-pencil-alt"/>
        <sidebar-link to="/icons" name="Emploi du temps" icon="ti-timer"/>
        <sidebar-link to="/dashboard" name="Listes" icon="ti-file"/>
        <sidebar-link to="/notifications" name="Devoirs" icon="ti-book"/>
      
      </template>
      
    </side-bar>
    <div class="main-panel">
      <top-navbar></top-navbar>

      <dashboard-content @click.native="toggleSidebar">

      </dashboard-content>

      <content-footer></content-footer>
    </div>
  </div>
</template>
<style lang="scss">
</style>
<script>
import TopNavbar from "./TopNavbar.vue";
import ContentFooter from "./ContentFooter.vue";
import DashboardContent from "./Content.vue";
export default {
  components: {
    TopNavbar,
    ContentFooter,
    DashboardContent,
    
  },
  methods: {
    toggleSidebar() {
      if (this.$sidebar.showSidebar) {
        this.$sidebar.displaySidebar(false);
      }
    }
  }
};
</script>
