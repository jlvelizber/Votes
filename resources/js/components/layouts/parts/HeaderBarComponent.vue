<template>
  <nav
    class="navbar header-navbar pcoded-header"
    header-theme="theme1"
    pcoded-header-position="fixed"
  >
    <div class="navbar-wrapper">
      <div class="navbar-logo" logo-theme="theme1">
        <!-- TODO LOGO -->
        <b-link :to="{name:'vote'}" go>
          <img src="./../../../../images/logo.svg" class="mx-auto w-100 img-fluid" />
        </b-link>

        <a
          class="mobile-menu"
          id="mobile-collapse"
          @click="showMobileMenuComponent = !showMobileMenuComponent;emitEventForMobileMenu()"
        >
          <feather
            :type="!showMobileMenuComponent ? 'toggle-right' : 'toggle-left' "
            class="icon-menu"
          ></feather>
        </a>

        <a
          class="mobile-options waves-effect waves-light"
          @click="showMobileUserProfile = !showMobileUserProfile"
        >
          <feather type="more-horizontal"></feather>
        </a>
      </div>
      <div class="navbar-container container-fluid d-inline">
        <ul class="nav-right" :class="{'d-block':showMobileUserProfile}">
          <li class="user-profile header-notification">
            <user-profile :username="this.user.name"></user-profile>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import UserProfile from "./UserProfileComponent";

export default {
  name: "HeaderBar",
  data() {
    return {
      showMobileMenuComponent: false,
      showMobileUserProfile: false
    };
  },
  props: {
    user: {
      type: Object,
      default: {}
    }
  },
  components: {
    UserProfile
  },
  methods: {
    emitEventForMobileMenu() {
      this.$root.$emit("toggle-mobile-menu", this.showMobileMenuComponent);
    }
  }
};
</script>

<style scoped>
@media only screen and (max-width: 992px) {
  .header-navbar .navbar-wrapper .navbar-logo a img {
    width: 8% !important;
  }
}
</style>

<style lang="scss" scoped>
@import "./../../../../sass/horizontal-menu.scss";
</style>
