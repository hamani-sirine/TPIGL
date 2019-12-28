import vue from 'vue'
import vuex from 'vuex'
import axios from 'axios'


vnue.use(vuex, axios);
export default new vuex.Store({
    state:{
        test : 'Test 123 ...'
    }
})