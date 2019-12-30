<template>
  <card class="card" >
    <div>
      <form @submit.prevent>
        <div class="row">
          <div class="col-md-4">
                 <label> Occupation</label>  
              <select v-model="user.fonction" aria-placeholder="Occupation" class="custom-select"> 
              <option>Administrateur</option>
              <option>Enseignant</option>
              <option>Etudiant</option>
           </select>
           <br/><br/>
           <label  v-if="ch1==='false'" class="label-error">  Champ obligatoire </label > 
          </div>
          <div class="col-md-4">

            <fg-input type="text"
                      label="Nom d'utilisateur"
                      placeholder="Nom d'utilisateur"
                      v-model="user.login">
            </fg-input>
                       <label  v-if="ch2==='false'" class="label-error">  Champ obligatoire </label > 
          </div>
          <div class="col-md-4">
            <fg-input type="email"
                      label="Email"
                      placeholder="Email"
                      v-model="user.email">
            </fg-input>
                       <label  v-if="MailValide==='false'" class="label-error">  Champ obligatoire </label > 

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <fg-input type="text"
                      label="Prénom"
                      placeholder="Prénom"
                      v-model="user.prenom">
            </fg-input>
                       <label  v-if="ch4==='false'" class="label-error">  Champ obligatoire </label > 

          </div>
          <div class="col-md-6">
            <fg-input type="text"
                      label="Nom"
                      placeholder="Nom"
                      v-model="user.nom">
            </fg-input>
                       <label  v-if="ch5==='false'" class="label-error">  Champ obligatoire </label > 

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <fg-input type="password"
                      label="Mot de passe"
                      placeholder="Mot de passe"
                      v-model="user.mdp">
            </fg-input>
                       <label  v-if="ch6==='false'" class="label-error">  Champ obligatoire </label > 

          </div>
        </div>
        <div class="text-center">
          <p-button type="info"
                    round
                    @click.native.prevent="updateProfile">
            Enregistrer
          </p-button>
        </div>
        <div class="clearfix"></div>
      </form>
    </div>
  </card>
</template>
<script>
import axios from 'axios'
export default {
  data() {
    return {
      user: {
        fonction: "",
        login: "",
        email: "",
        prenom: "",
        nom: "",
        mdp: "", 
      } ,
     MailValide : "true", 
     ch1 : "true", 
     ch2: "true" , 
     ch3 : "true",
     ch4: "true" ,
     ch5: "true" , 
     ch6 : "true" ,
    };
  },
  methods: {
     validEmail: function (email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email); },
      
      champVide :function (s) 
      {
         if(s === "")
           return false ;
           else return true ; 
      },
    updateProfile() {
         this.MailValide= this.validEmail(this.user.email).toString() ;
      this.ch1= this.champVide(this.user.fonction).toString();
       this.ch2= this.champVide(this.user.login).toString(); 
       this.ch3= this.champVide(this.user.email).toString();
       this.ch4= this.champVide(this.user.prenom).toString();
       this.ch5= this.champVide(this.user.nom).toString();
       this.ch6= this.champVide(this.user.mdp).toString();
       this.ch7= this.champVide(this.user.promo).toString();
       this.ch8= this.champVide(this.user.groupe).toString();
       this.ch9= this.champVide(this.user.option).toString();
       if(this.validEmail(this.user.email) && this.champVide(this.user.fonction) && this.champVide(this.user.login)
       && this.champVide(this.user.email)
       && this.champVide(this.user.prenom)
       && this.champVide(this.user.nom)
       && this.champVide(this.user.mdp)
       && this.champVide(this.user.promo)
       && this.champVide(this.user.groupe)
       && this.champVide(this.user.option)     )
       {
      axios.post('http://127.0.0.1:8000/api/cr3',this.user) }
    }
  }
};
</script>
<style scoped>
.me {
  background-color: blue ,
  
}
.custom-select {
  position: relative;
  width: 100%;
  text-align: left;
  outline: none;
  height: 40px;
  background-color: #E7EAED;
  border-color: #E7EAED;
}


.custom-select {
  position: relative;
  width: 100%;
  text-align: left;
  outline: none;
  height: 40px;
  background-color: #E7EAED;
  border-color: #E7EAED;
}

.label-error {
 color: red ; 
}
</style>
