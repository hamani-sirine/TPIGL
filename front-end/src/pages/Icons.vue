<template>
<div>
   <!--  <p> Rome </p>
    <button @click="showjoke()"> click</button>
   <div v-if="joke">
        <p> {{joke}} </p>
    </div> -->
     
   
      
      <div  class="col-12">
        <card :title="title" :subTitle="subTitle">
          <div slot="raw-content" class="table-responsive">
            <paper-table :data="tableData" :columns="tableColumns">

            </paper-table>
          </div>
        </card>
     
</div>

  </div>
</template>
<script>

import { PaperTable } from "@/components";
import axios from 'axios'
export default { 
     components: { PaperTable, },
    data()
    {
    return {
    title: "Liste des utilisateurs : ",
    subTitle: "",
    joke : '',
    tableColumns : ["id_user","login","email","mdp","nom","prenom","fonction"],
    tableData : [{  },],
}
    },
    mounted()
     {
    
           const info=null ;
       axios
      .get('http://127.0.0.1:8000/api/viewst')
      .then((response) => {
      this.tableData = response.data.data ; 
      console.log(response.data);
      })  
      console.log(this.tableData); // Le résultat est dans info 
     },
    methods : {
    /*  async showjoke(){
           // alert('hello world')
           let config ={
                headers : {
                   'Accept':'application/json'
               }
           }
           const joke = await axios.get('https://icanhazdadjoke.com',config)  ;
           this.joke=  joke.data.joke
      },*/
    
    }

};
</script>
<style></style>
