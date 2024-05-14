// vite.config.js
import { defineConfig } from "file:///C:/Users/gabri/Desktop/teste%20azure/Straddie/node_modules/vite/dist/node/index.js";
import laravel, { refreshPaths } from "file:///C:/Users/gabri/Desktop/teste%20azure/Straddie/node_modules/laravel-vite-plugin/dist/index.mjs";
import { viteStaticCopy } from "file:///C:/Users/gabri/Desktop/teste%20azure/Straddie/node_modules/vite-plugin-static-copy/dist/index.js";
import path from "path";
var __vite_injected_original_dirname = "C:\\Users\\gabri\\Desktop\\teste azure\\Straddie";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        // Resources paths
        "resources/css/app.css",
        "resources/sass/app.scss",
        "resources/v1/site/css/app.css",
        "resources/js/app.js",
        "resources/js/my-app.js",
        "resources/v1/site/js/app.js",
        "resources/js/viacep.js",
        "resources/js/bootstrap.js",
        "resources/assets/js/components/addCorporateUser.js",
        "resources/assets/js/components/defaultForm.js",
        "resources/js/importmask.js",
        "resources/assets/js/components/addPhone.js",
        "resources/assets/js/addPhone-lib.js",
        "resources/assets/js/components/requestsaxios.js",
        "resources/assets/js/customFilter-lib.js",
        "resources/assets/js/components/customFilter.js",
        "resources/js/basicMask.js",
        "resources/assets/js/pages/formDocuments.js",
        "resources/assets/js/components/selectTypeTitle.js",
        "resources/assets/js/components/addUserInCreditRigthTitle.js",
        "resources/assets/js/pages/adminCreate.js",
        "resources/assets/js/pages/organization.js",
        // Resources assets js file paths
        "resources/assets/js/add-products",
        "resources/assets/js/advancedform",
        "resources/assets/js/alerts",
        "resources/assets/js/apexchart",
        "resources/assets/js/authentication-main",
        "resources/assets/js/authentication",
        "resources/assets/js/blog-post",
        "resources/assets/js/canada",
        "resources/assets/js/carousel",
        "resources/assets/js/cart",
        "resources/assets/js/chart",
        "resources/assets/js/chartjs-charts",
        "resources/assets/js/charts",
        "resources/assets/js/chat",
        "resources/assets/js/Check-out",
        "resources/assets/js/checkbox-selectall",
        "resources/assets/js/color-picker",
        "resources/assets/js/construction",
        "resources/assets/js/content-scroll",
        "resources/assets/js/custom-switcher",
        "resources/assets/js/datatable",
        "resources/assets/js/defaultmenu",
        "resources/assets/js/echarts",
        "resources/assets/js/email-ibox",
        "resources/assets/js/form-elements",
        "resources/assets/js/form-layout",
        "resources/assets/js/form-validation",
        "resources/assets/js/formelementadvnced",
        "resources/assets/js/fullcalendar",
        "resources/assets/js/gallery",
        "resources/assets/js/gmaps",
        "resources/assets/js/google-maps",
        "resources/assets/js/grid",
        "resources/assets/js/index1",
        "resources/assets/js/jvectormap",
        "resources/assets/js/landing",
        "resources/assets/js/map-leafleft",
        "resources/assets/js/modal",
        "resources/assets/js/notifications",
        "resources/assets/js/nouislider",
        "resources/assets/js/profile",
        "resources/assets/js/quill-editor",
        "resources/assets/js/range",
        "resources/assets/js/rangeslider",
        "resources/assets/js/ratings",
        "resources/assets/js/russia",
        "resources/assets/js/select2",
        "resources/assets/js/setting",
        "resources/assets/js/show-code",
        "resources/assets/js/simplebar",
        "resources/assets/js/slider",
        "resources/assets/js/spain",
        "resources/assets/js/sweet-alert",
        "resources/assets/js/swiper",
        "resources/assets/js/table-data",
        "resources/assets/js/themeColors",
        "resources/assets/js/toast",
        "resources/assets/js/treeview",
        "resources/assets/js/us-merc-en",
        "resources/assets/js/widget",
        "resources/assets/js/wishlist",
        "resources/js/jquery-3.7.1.js"
      ],
      refresh: [
        ...refreshPaths,
        "app/Livewire/**"
      ]
    }),
    viteStaticCopy({
      targets: [
        {
          src: [
            "resources/assets/images/",
            "resources/assets/libs/",
            "resources/assets/iconfonts/",
            "resources/assets/js/libs",
            "resources/assets/js/sticky.js",
            "resources/assets/js/main.js",
            "resources/assets/js/under-maintenance.js",
            "resources/assets/js/show-password.js",
            "resources/assets/js/filemanager-list.js",
            "resources/assets/js/apexcharts-stock-prices.js",
            "resources/js/jquery-3.7.1.js",
            "resources/js/jquery.mask.js",
            "resources/js/awersome-alert.js"
          ],
          dest: "assets/"
        }
      ]
    }),
    {
      name: "blade",
      handleHotUpdate({ file, server }) {
        if (file.endsWith(".blade.php")) {
          server.ws.send({
            type: "full-reload",
            path: "*"
          });
        }
      }
    }
  ],
  build: {
    chunkSizeWarningLimit: 1600,
    commonjsOptions: { transformMixedEsModules: true }
  },
  resolve: {
    alias: {
      "~bootstrap": path.resolve(__vite_injected_original_dirname, "node_modules/bootstrap/dist"),
      "~resources": path.resolve(__vite_injected_original_dirname, "resources"),
      "~jquery": path.resolve(__vite_injected_original_dirname, "node_modules/jquery/dist/jquery.min.js")
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxnYWJyaVxcXFxEZXNrdG9wXFxcXHRlc3RlIGF6dXJlXFxcXFN0cmFkZGllXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxnYWJyaVxcXFxEZXNrdG9wXFxcXHRlc3RlIGF6dXJlXFxcXFN0cmFkZGllXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9nYWJyaS9EZXNrdG9wL3Rlc3RlJTIwYXp1cmUvU3RyYWRkaWUvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsLCB7IHJlZnJlc2hQYXRocyB9IGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuaW1wb3J0IHsgdml0ZVN0YXRpY0NvcHkgfSBmcm9tICd2aXRlLXBsdWdpbi1zdGF0aWMtY29weSc7XG5pbXBvcnQgcGF0aCBmcm9tICdwYXRoJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcblxuICAgICAgICAgICAgICAgIC8vIFJlc291cmNlcyBwYXRoc1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy92MS9zaXRlL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9teS1hcHAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvdjEvc2l0ZS9qcy9hcHAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvdmlhY2VwLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2Jvb3RzdHJhcC5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29tcG9uZW50cy9hZGRDb3Jwb3JhdGVVc2VyLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb21wb25lbnRzL2RlZmF1bHRGb3JtLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2ltcG9ydG1hc2suanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbXBvbmVudHMvYWRkUGhvbmUuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FkZFBob25lLWxpYi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29tcG9uZW50cy9yZXF1ZXN0c2F4aW9zLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jdXN0b21GaWx0ZXItbGliLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb21wb25lbnRzL2N1c3RvbUZpbHRlci5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9iYXNpY01hc2suanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3BhZ2VzL2Zvcm1Eb2N1bWVudHMuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbXBvbmVudHMvc2VsZWN0VHlwZVRpdGxlLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb21wb25lbnRzL2FkZFVzZXJJbkNyZWRpdFJpZ3RoVGl0bGUuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3BhZ2VzL2FkbWluQ3JlYXRlLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9wYWdlcy9vcmdhbml6YXRpb24uanMnLFxuICAgICAgICAgICAgICAgIC8vIFJlc291cmNlcyBhc3NldHMganMgZmlsZSBwYXRoc1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FkZC1wcm9kdWN0cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYWR2YW5jZWRmb3JtJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9hbGVydHMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FwZXhjaGFydCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXV0aGVudGljYXRpb24tbWFpbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXV0aGVudGljYXRpb24nLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Jsb2ctcG9zdCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2FuYWRhJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jYXJvdXNlbCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2FydCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hhcnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NoYXJ0anMtY2hhcnRzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jaGFydHMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NoYXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL0NoZWNrLW91dCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hlY2tib3gtc2VsZWN0YWxsJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb2xvci1waWNrZXInLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbnN0cnVjdGlvbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29udGVudC1zY3JvbGwnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2N1c3RvbS1zd2l0Y2hlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZGF0YXRhYmxlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9kZWZhdWx0bWVudScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZWNoYXJ0cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZW1haWwtaWJveCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS1lbGVtZW50cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS1sYXlvdXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Zvcm0tdmFsaWRhdGlvbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybWVsZW1lbnRhZHZuY2VkJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9mdWxsY2FsZW5kYXInLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2dhbGxlcnknLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2dtYXBzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9nb29nbGUtbWFwcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZ3JpZCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvaW5kZXgxJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9qdmVjdG9ybWFwJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9sYW5kaW5nJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9tYXAtbGVhZmxlZnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL21vZGFsJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9ub3RpZmljYXRpb25zJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9ub3Vpc2xpZGVyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9wcm9maWxlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9xdWlsbC1lZGl0b3InLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3JhbmdlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9yYW5nZXNsaWRlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvcmF0aW5ncycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvcnVzc2lhJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zZWxlY3QyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zZXR0aW5nJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zaG93LWNvZGUnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3NpbXBsZWJhcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc2xpZGVyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zcGFpbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc3dlZXQtYWxlcnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3N3aXBlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdGFibGUtZGF0YScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdGhlbWVDb2xvcnMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3RvYXN0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy90cmVldmlldycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdXMtbWVyYy1lbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvd2lkZ2V0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy93aXNobGlzdCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnktMy43LjEuanMnXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogW1xuICAgICAgICAgICAgICAgIC4uLnJlZnJlc2hQYXRocyxcbiAgICAgICAgICAgICAgICAnYXBwL0xpdmV3aXJlLyoqJyxcbiAgICAgICAgICAgIF0sXG4gICAgICAgIH0pLFxuICAgICAgICB2aXRlU3RhdGljQ29weSh7XG4gICAgICAgICAgICB0YXJnZXRzOiBbXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICBzcmM6IChbXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9pbWFnZXMvJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2xpYnMvJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2ljb25mb250cy8nLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbGlicycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zdGlja3kuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbWFpbi5qcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy91bmRlci1tYWludGVuYW5jZS5qcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zaG93LXBhc3N3b3JkLmpzJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2ZpbGVtYW5hZ2VyLWxpc3QuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXBleGNoYXJ0cy1zdG9jay1wcmljZXMuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnktMy43LjEuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnkubWFzay5qcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2F3ZXJzb21lLWFsZXJ0LmpzJ1xuICAgICAgICAgICAgICAgICAgICBdKSxcbiAgICAgICAgICAgICAgICAgICAgZGVzdDogJ2Fzc2V0cy8nXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgXVxuICAgICAgICB9KSxcbiAgICAgICAge1xuICAgICAgICAgICAgbmFtZTogJ2JsYWRlJyxcbiAgICAgICAgICAgIGhhbmRsZUhvdFVwZGF0ZSh7IGZpbGUsIHNlcnZlciB9KSB7XG4gICAgICAgICAgICAgICAgaWYgKGZpbGUuZW5kc1dpdGgoJy5ibGFkZS5waHAnKSkge1xuICAgICAgICAgICAgICAgICAgICBzZXJ2ZXIud3Muc2VuZCh7XG4gICAgICAgICAgICAgICAgICAgICAgICB0eXBlOiAnZnVsbC1yZWxvYWQnLFxuICAgICAgICAgICAgICAgICAgICAgICAgcGF0aDogJyonLFxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9LFxuICAgICAgICB9LFxuICAgIF0sXG4gICAgYnVpbGQ6IHtcbiAgICAgICAgY2h1bmtTaXplV2FybmluZ0xpbWl0OiAxNjAwLFxuICAgICAgICBjb21tb25qc09wdGlvbnM6IHsgdHJhbnNmb3JtTWl4ZWRFc01vZHVsZXM6IHRydWUgfVxuICAgIH0sXG4gICAgcmVzb2x2ZToge1xuICAgICAgICBhbGlhczoge1xuICAgICAgICAgICAgJ35ib290c3RyYXAnOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lLCAnbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9kaXN0JyksXG4gICAgICAgICAgICAnfnJlc291cmNlcyc6IHBhdGgucmVzb2x2ZShfX2Rpcm5hbWUsICdyZXNvdXJjZXMnKSxcbiAgICAgICAgICAgICd+anF1ZXJ5JzogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSwgJ25vZGVfbW9kdWxlcy9qcXVlcnkvZGlzdC9qcXVlcnkubWluLmpzJylcbiAgICAgICAgfSxcbiAgICB9XG59KTtcblxuXG5cbi8vIGV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XG4vLyAgICAgcGx1Z2luczogW1xuLy8gICAgICAgICBsYXJhdmVsKHtcbi8vICAgICAgICAgICAgIGlucHV0OiBbXG4vLyAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvYXBwLmNzcycsXG4vLyAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9hcHAuanMnLFxuLy8gICAgICAgICAgICAgXSxcbi8vICAgICAgICAgICAgIHJlZnJlc2g6IFtcbi8vICAgICAgICAgICAgICAgICAuLi5yZWZyZXNoUGF0aHMsXG4vLyAgICAgICAgICAgICAgICAgJ2FwcC9MaXZld2lyZS8qKicsXG4vLyAgICAgICAgICAgICBdLFxuLy8gICAgICAgICB9KSxcbi8vICAgICBdLFxuLy8gfSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQWlVLFNBQVMsb0JBQW9CO0FBQzlWLE9BQU8sV0FBVyxvQkFBb0I7QUFDdEMsU0FBUyxzQkFBc0I7QUFDL0IsT0FBTyxVQUFVO0FBSGpCLElBQU0sbUNBQW1DO0FBS3pDLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU87QUFBQTtBQUFBLFFBR0g7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBRUE7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsTUFDSjtBQUFBLE1BQ0EsU0FBUztBQUFBLFFBQ0wsR0FBRztBQUFBLFFBQ0g7QUFBQSxNQUNKO0FBQUEsSUFDSixDQUFDO0FBQUEsSUFDRCxlQUFlO0FBQUEsTUFDWCxTQUFTO0FBQUEsUUFDTDtBQUFBLFVBQ0ksS0FBTTtBQUFBLFlBQ0Y7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxVQUNKO0FBQUEsVUFDQSxNQUFNO0FBQUEsUUFDVjtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxJQUNEO0FBQUEsTUFDSSxNQUFNO0FBQUEsTUFDTixnQkFBZ0IsRUFBRSxNQUFNLE9BQU8sR0FBRztBQUM5QixZQUFJLEtBQUssU0FBUyxZQUFZLEdBQUc7QUFDN0IsaUJBQU8sR0FBRyxLQUFLO0FBQUEsWUFDWCxNQUFNO0FBQUEsWUFDTixNQUFNO0FBQUEsVUFDVixDQUFDO0FBQUEsUUFDTDtBQUFBLE1BQ0o7QUFBQSxJQUNKO0FBQUEsRUFDSjtBQUFBLEVBQ0EsT0FBTztBQUFBLElBQ0gsdUJBQXVCO0FBQUEsSUFDdkIsaUJBQWlCLEVBQUUseUJBQXlCLEtBQUs7QUFBQSxFQUNyRDtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsT0FBTztBQUFBLE1BQ0gsY0FBYyxLQUFLLFFBQVEsa0NBQVcsNkJBQTZCO0FBQUEsTUFDbkUsY0FBYyxLQUFLLFFBQVEsa0NBQVcsV0FBVztBQUFBLE1BQ2pELFdBQVcsS0FBSyxRQUFRLGtDQUFXLHdDQUF3QztBQUFBLElBQy9FO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
