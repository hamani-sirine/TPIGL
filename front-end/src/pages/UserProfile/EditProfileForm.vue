<template>
  <card class="card" >
    <div>
      <form @submit.prevent>
        <div class="row">
          <div class="col-md-4">
            <fg-input type="text"
                      label="Occupation" 
                      placeholder="Admin, enseignant, etudiant .."
                      v-model="user.fonction">
            </fg-input>
          </div>
          <div class="col-md-4">

            <fg-input type="text"
                      label="Nom d'utilisateur"
                      placeholder="Nom d'utilisateur"
                      v-model="user.login">
            </fg-input>
          </div>
          <div class="col-md-4">
            <fg-input type="email"
                      label="Email"
                      placeholder="Email"
                      v-model="user.email">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <fg-input type="text"
                      label="Prénom"
                      placeholder="Prénom"
                      v-model="user.prenom">
            </fg-input>
          </div>
          <div class="col-md-6">
            <fg-input type="text"
                      label="Nom"
                      placeholder="Nom"
                      v-model="user.nom">
            </fg-input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <fg-input type="password"
                      label="Mot de passe"
                      placeholder="Mot de passe"
                      v-model="user.mdp">
            </fg-input>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <fg-input type="text"
                      label="Promo"
                      placeholder="promo"
                      v-model="user.promo">
            </fg-input>
          </div>
          <div class="col-md-4">
            <fg-input type="number"
                      label="Groupe"
                      placeholder="groupe"
                      v-model="user.groupe">
            </fg-input>
          </div>
          <div class="col-md-4">
            <fg-input type="text"
                      label="Option"
                      placeholder="Option"
                      v-model="user.option">
            </fg-input>
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
export default {
  data() {
    return {
      user: {
        fonction: "Etudiante",
        login: "RomaissaLMH",
        email: "hr_kessi@esi.dz",
        prenom: "Romaissa",
        nom: "Kessi",
        mdp: "ilovefood",
        promo:"1CS",
        groupe :2,
        option:"",
       
      
      }
    };
  },
  methods: {
    updateProfile() {
      alert("Your data: " + JSON.stringify(this.user));
    }
  }
};
</script>
<style>
</style>
