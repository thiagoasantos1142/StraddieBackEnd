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
        "resources/assets/js/wishlist"
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
            "resources/js/jquery-3.7.1.js"
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
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxnYWJyaVxcXFxEZXNrdG9wXFxcXHRlc3RlIGF6dXJlXFxcXFN0cmFkZGllXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxnYWJyaVxcXFxEZXNrdG9wXFxcXHRlc3RlIGF6dXJlXFxcXFN0cmFkZGllXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9nYWJyaS9EZXNrdG9wL3Rlc3RlJTIwYXp1cmUvU3RyYWRkaWUvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsLCB7IHJlZnJlc2hQYXRocyB9IGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuaW1wb3J0IHsgdml0ZVN0YXRpY0NvcHkgfSBmcm9tICd2aXRlLXBsdWdpbi1zdGF0aWMtY29weSc7XG5pbXBvcnQgcGF0aCBmcm9tICdwYXRoJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcblxuICAgICAgICAgICAgICAgIC8vIFJlc291cmNlcyBwYXRoc1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy92MS9zaXRlL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9teS1hcHAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvdjEvc2l0ZS9qcy9hcHAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvdmlhY2VwLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2Jvb3RzdHJhcC5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29tcG9uZW50cy9hZGRDb3Jwb3JhdGVVc2VyLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb21wb25lbnRzL2RlZmF1bHRGb3JtLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2ltcG9ydG1hc2suanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbXBvbmVudHMvYWRkUGhvbmUuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FkZFBob25lLWxpYi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29tcG9uZW50cy9yZXF1ZXN0c2F4aW9zLmpzJyxcblxuICAgICAgICAgICAgICAgIC8vIFJlc291cmNlcyBhc3NldHMganMgZmlsZSBwYXRoc1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FkZC1wcm9kdWN0cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYWR2YW5jZWRmb3JtJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9hbGVydHMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FwZXhjaGFydCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXV0aGVudGljYXRpb24tbWFpbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXV0aGVudGljYXRpb24nLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Jsb2ctcG9zdCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2FuYWRhJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jYXJvdXNlbCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2FydCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hhcnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NoYXJ0anMtY2hhcnRzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jaGFydHMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NoYXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL0NoZWNrLW91dCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hlY2tib3gtc2VsZWN0YWxsJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jb2xvci1waWNrZXInLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbnN0cnVjdGlvbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29udGVudC1zY3JvbGwnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2N1c3RvbS1zd2l0Y2hlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZGF0YXRhYmxlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9kZWZhdWx0bWVudScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZWNoYXJ0cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZW1haWwtaWJveCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS1lbGVtZW50cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS1sYXlvdXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Zvcm0tdmFsaWRhdGlvbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybWVsZW1lbnRhZHZuY2VkJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9mdWxsY2FsZW5kYXInLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2dhbGxlcnknLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2dtYXBzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9nb29nbGUtbWFwcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZ3JpZCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvaW5kZXgxJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9qdmVjdG9ybWFwJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9sYW5kaW5nJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9tYXAtbGVhZmxlZnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL21vZGFsJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9ub3RpZmljYXRpb25zJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9ub3Vpc2xpZGVyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9wcm9maWxlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9xdWlsbC1lZGl0b3InLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3JhbmdlJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9yYW5nZXNsaWRlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvcmF0aW5ncycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvcnVzc2lhJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zZWxlY3QyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zZXR0aW5nJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zaG93LWNvZGUnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3NpbXBsZWJhcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc2xpZGVyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zcGFpbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc3dlZXQtYWxlcnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3N3aXBlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdGFibGUtZGF0YScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdGhlbWVDb2xvcnMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3RvYXN0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy90cmVldmlldycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvdXMtbWVyYy1lbicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvd2lkZ2V0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy93aXNobGlzdCcsXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogW1xuICAgICAgICAgICAgICAgIC4uLnJlZnJlc2hQYXRocyxcbiAgICAgICAgICAgICAgICAnYXBwL0xpdmV3aXJlLyoqJyxcbiAgICAgICAgICAgIF0sXG4gICAgICAgIH0pLFxuICAgICAgICB2aXRlU3RhdGljQ29weSh7XG4gICAgICAgICAgICB0YXJnZXRzOiBbXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICBzcmM6IChbXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9pbWFnZXMvJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2xpYnMvJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2ljb25mb250cy8nLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbGlicycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zdGlja3kuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbWFpbi5qcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy91bmRlci1tYWludGVuYW5jZS5qcycsXG4gICAgICAgICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9zaG93LXBhc3N3b3JkLmpzJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2ZpbGVtYW5hZ2VyLWxpc3QuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYXBleGNoYXJ0cy1zdG9jay1wcmljZXMuanMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnktMy43LjEuanMnXG4gICAgICAgICAgICAgICAgICAgIF0pLFxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYXNzZXRzLydcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICBdXG4gICAgICAgIH0pLFxuICAgICAgICB7XG4gICAgICAgICAgICBuYW1lOiAnYmxhZGUnLFxuICAgICAgICAgICAgaGFuZGxlSG90VXBkYXRlKHsgZmlsZSwgc2VydmVyIH0pIHtcbiAgICAgICAgICAgICAgICBpZiAoZmlsZS5lbmRzV2l0aCgnLmJsYWRlLnBocCcpKSB7XG4gICAgICAgICAgICAgICAgICAgIHNlcnZlci53cy5zZW5kKHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdmdWxsLXJlbG9hZCcsXG4gICAgICAgICAgICAgICAgICAgICAgICBwYXRoOiAnKicsXG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0sXG4gICAgXSxcbiAgICBidWlsZDoge1xuICAgICAgICBjaHVua1NpemVXYXJuaW5nTGltaXQ6IDE2MDAsXG4gICAgICAgIGNvbW1vbmpzT3B0aW9uczogeyB0cmFuc2Zvcm1NaXhlZEVzTW9kdWxlczogdHJ1ZSB9XG4gICAgfSxcbiAgICByZXNvbHZlOiB7XG4gICAgICAgIGFsaWFzOiB7XG4gICAgICAgICAgICAnfmJvb3RzdHJhcCc6IHBhdGgucmVzb2x2ZShfX2Rpcm5hbWUsICdub2RlX21vZHVsZXMvYm9vdHN0cmFwL2Rpc3QnKSxcbiAgICAgICAgICAgICd+cmVzb3VyY2VzJzogcGF0aC5yZXNvbHZlKF9fZGlybmFtZSwgJ3Jlc291cmNlcycpLFxuICAgICAgICAgICAgJ35qcXVlcnknOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lLCAnbm9kZV9tb2R1bGVzL2pxdWVyeS9kaXN0L2pxdWVyeS5taW4uanMnKVxuICAgICAgICB9LFxuICAgIH1cbn0pO1xuXG5cblxuLy8gZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbi8vICAgICBwbHVnaW5zOiBbXG4vLyAgICAgICAgIGxhcmF2ZWwoe1xuLy8gICAgICAgICAgICAgaW5wdXQ6IFtcbi8vICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJyxcbi8vICAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4vLyAgICAgICAgICAgICBdLFxuLy8gICAgICAgICAgICAgcmVmcmVzaDogW1xuLy8gICAgICAgICAgICAgICAgIC4uLnJlZnJlc2hQYXRocyxcbi8vICAgICAgICAgICAgICAgICAnYXBwL0xpdmV3aXJlLyoqJyxcbi8vICAgICAgICAgICAgIF0sXG4vLyAgICAgICAgIH0pLFxuLy8gICAgIF0sXG4vLyB9KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBaVUsU0FBUyxvQkFBb0I7QUFDOVYsT0FBTyxXQUFXLG9CQUFvQjtBQUN0QyxTQUFTLHNCQUFzQjtBQUMvQixPQUFPLFVBQVU7QUFIakIsSUFBTSxtQ0FBbUM7QUFLekMsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBO0FBQUEsUUFHSDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBR0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsUUFDTCxHQUFHO0FBQUEsUUFDSDtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxJQUNELGVBQWU7QUFBQSxNQUNYLFNBQVM7QUFBQSxRQUNMO0FBQUEsVUFDSSxLQUFNO0FBQUEsWUFDRjtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxZQUNBO0FBQUEsWUFDQTtBQUFBLFlBQ0E7QUFBQSxVQUNKO0FBQUEsVUFDQSxNQUFNO0FBQUEsUUFDVjtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxJQUNEO0FBQUEsTUFDSSxNQUFNO0FBQUEsTUFDTixnQkFBZ0IsRUFBRSxNQUFNLE9BQU8sR0FBRztBQUM5QixZQUFJLEtBQUssU0FBUyxZQUFZLEdBQUc7QUFDN0IsaUJBQU8sR0FBRyxLQUFLO0FBQUEsWUFDWCxNQUFNO0FBQUEsWUFDTixNQUFNO0FBQUEsVUFDVixDQUFDO0FBQUEsUUFDTDtBQUFBLE1BQ0o7QUFBQSxJQUNKO0FBQUEsRUFDSjtBQUFBLEVBQ0EsT0FBTztBQUFBLElBQ0gsdUJBQXVCO0FBQUEsSUFDdkIsaUJBQWlCLEVBQUUseUJBQXlCLEtBQUs7QUFBQSxFQUNyRDtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsT0FBTztBQUFBLE1BQ0gsY0FBYyxLQUFLLFFBQVEsa0NBQVcsNkJBQTZCO0FBQUEsTUFDbkUsY0FBYyxLQUFLLFFBQVEsa0NBQVcsV0FBVztBQUFBLE1BQ2pELFdBQVcsS0FBSyxRQUFRLGtDQUFXLHdDQUF3QztBQUFBLElBQy9FO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
