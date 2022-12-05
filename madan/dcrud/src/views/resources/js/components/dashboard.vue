<template>
<div>
<div v-for="user in users.data" :key="user.id" :class="user.width" >
 
            <button class="info-box" @click.prevent="openModule(user.onclick,index,user.id)">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{user.name}}</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </button>
            <!-- /.info-box -->
         
			    <div v-for="(col,index) in user" class="align-middle" >
					<span v-if="allActions.hasOwnProperty(index) && (allActions[index]['state']==col || allActions[index]['reverse']==true)">
						<button v-if="allActions[index]['state']==col" class="btn btn-sm"  :class="allActions[index]['bclass']" @click.prevent="updateAction(user,allActions[index]['update'])">{{allActions[index]['name']}}</button>
						<button v-else-if="allActions[index]['reverse']==true" class="btn btn-sm" :class="allActions[index]['bclassrev']" @click.prevent="updateAction(user,allActions[index]['updaterev'])"> {{allActions[index]['namerev']}}</button>
					</span>
					
				</div>
               
              </div>
			
			  </div>
			  </template>
			  <script>
  // Declare /user-management component

  export default { 
     data() {  return {}}
	}
	</script>