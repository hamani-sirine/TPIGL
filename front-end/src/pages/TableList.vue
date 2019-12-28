<template>
      <div class="row">
     
      <div class="col-12">
        <card :title="title1" :subTitle="subTitle">
          <div slot="raw-content" class="table-responsive">
            <paper-table :data="tableData" :columns="tableColumns">

            </paper-table>
          </div>
        </card>
      </div>
      <div class="col-12">
       <card :title="title2" :subTitle="subTitle">
          <div slot="raw-content" class="table-responsive">
            <paper-table :data="tableData1" :columns="tableColumns1">

            </paper-table>
          </div>
        </card>
      </div>
      <div class="col-12">
      </div>
    </div>
</template>
<script>
import { PaperTable } from "@/components";
import Axios from 'axios'

export default {
  components: {
    PaperTable,
  },
  data() {
    return {
    /* headers: [  {text:'alo',value:'modules_s1'}, {text:'wow',value:'modules_s2'}, ],  dataTable:[{}   ],*/
       title1: "Notes du S1",
       subTitle: "",
       tableColumns : ["module", "cc", "ci","cf"],
       tableData : [{}],
       title2: "Notes du S2",
       tableColumns1 : ["module", "cc", "ci","cf"],
       tableData1 : [{}],
       info : ''
    };
   },
   mounted()
   {
       Axios
      .get('http://127.0.0.1:8000/api/notes/1')
      .then((response) => {
      this.tableData = response.data[0];  // notes du 1er semestre 
      this.tableData1=response.data[1];   // notes du 2éme semestre
      console.log(response.data[0]);
      })  
      console.log(this.tableData); // Le résultat est dans info 
   },
  
};
</script>
<style>
</style>








