import DashboardLayout from "@/layout/dashboard/DashboardLayout.vue";
// GeneralViews
import NotFound from "@/pages/NotFoundPage.vue";

// Admin pages
import Edt from "@/pages/edt.vue";
import UserProfile from "@/pages/UserProfile.vue";
import Icons from "@/pages/Icons.vue";
import FormAjout from "@/pages/ChoixAjout.vue";
import TableList from "@/pages/TableList.vue";

const routes = [
  {
    path: "/",
    component: DashboardLayout,
    redirect: "/dashboard",
    children: [
      {
        path: "dashboard",
        name: "Listes",
        component: Icons
      },
      {
        path: "stats",
        name: "Profil",
        component: UserProfile
      },
      {
        path: "notifications",
        name: "Devoirs",
        component: Edt
      },
      {
        path: "icons",
        name: "Emploi du temps",
        component: Edt
      },
   
      {
        path: "form-ajout",
        name: "Ajout d'un profil",
        component: FormAjout
      },
      {
        path: "table-list",
        name: "Notes",
        component: TableList
      }
    ]
  },
  { path: "*", component: NotFound }
];

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * The specified component must be inside the Views folder
 * @param  {string} name  the filename (basename) of the view to load.
function view(name) {
   var res= require('../components/Dashboard/Views/' + name + '.vue');
   return res;
};**/

export default routes;
