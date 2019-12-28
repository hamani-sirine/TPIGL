<template>
 <div>  
   <div class="row d-flex justify-content-center">
   <div class="col-md-3">
            <p-button round outline block @click.native="ajoutEtu()">Ajouter Etudiant </p-button>
   </div>
    <div class="col-md-3">
            <p-button round outline block @click.native="ajoutEns()">Ajouter Enseignant </p-button>
    </div>
    <div class="col-md-3">
            <p-button round outline block @click.native="ajoutAdmin()">Ajouter Administrateur </p-button>
    </div>  </div> 
    <br/> <br/> 
      <div v-if="vari==='true'"> 
        <form-etu> 
        </form-etu> 
     </div> 
     <div v-if="vari2==='true'"> 
        <form-ens> 
        </form-ens> 
     </div> 
     <div v-if="vari3==='true'"> 
        <form-admin> 
        </form-admin> 
     </div> 
     </div> 
</template>
<script>
import formEns from "./UserProfile/FormEns.vue";
import formEtu from "./UserProfile/MembersCard.vue";
import formAdmin from "./UserProfile/FormAdmin.vue";
export default {
  components: {
    formEtu,
    formEns,
    formAdmin
  } ,
  data :() => ({     
      vari:"true",
      vari3 :"false",
      vari2:"false"
  }),
  methods: {
    ajoutEtu: function () {
    // maintenant nous avons accès à l'évènement natif
    this.vari2="false"
    this.vari="true"    
    this.vari3="false"
  },
  ajoutEns: function () {
    // maintenant nous avons accès à l'évènement natif
    this.vari="false"
    this.vari3="false"
    this.vari2="true"
  },
  ajoutAdmin:function (){
     this.vari="false"
    this.vari2="false"
    this.vari3="true"
  }

  }
};
</script>
<style>
</style>