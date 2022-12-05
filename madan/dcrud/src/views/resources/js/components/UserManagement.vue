 <!-- We put our HTML code inside template tag -->
<template>


   



  <div class="">
  <div class="content-header row col-12">
                    <div class='btn-group'>
					 
                            <a class='btn btn-sm btn-success' @click.prevent="openModule(myapps,'')"><i class="fa fa-home" ></i> </a>
							
							 <a  v-for='(ch,index) in moduleHistory' :class=" moduleHistory.length-1==index?'btn btn-sm btn-primary ':'browsed-history btn btn-sm btn-primary '"  @click.prevent="openModule(ch[0],ch[1],ch[2])" :style=" (moduleHistory.length-1==index ||index%2==1)?' ':'background:#586c7b'"> / {{ch[0].toUpperCase()}} 
						
							 <span  v-if="ch[1]!=''&&ch[1]!=undefined" class='badge badge-danger ' style='font-size:12px;'> {{ch[1]}}&nbsp; 	</span>
							
							 
							
							</a>
						
							
							
							
							
							
			
							
							
                    </div>
                </div>

    <div  v-if="ptype.dashboard=='yes'" class='row'>
	
 <div v-for="user in users.data" :key="user.id"  :class="user.width">

 <component v-bind:is='user.type' :smName="user.onclick.split(',')[0]" :filter="user.onclick.split(',')[1]" :name="user.name" :modFunc="openModule" ></component>
          
            <!-- /.info-box -->
         
			    <div v-for="(col,indx) in user" class="align-middle" >
					<span v-if="allActions.hasOwnProperty(indx) && (allActions[indx]['state']==col || allActions[indx]['reverse']==true)">
						<button v-if="allActions[indx]['state']==col" class="btn btn-sm"  :class="allActions[indx]['bclass']" @click.prevent="updateAction(user,allActions[indx]['update'])">{{allActions[indx]['name']}}</button>
						<button v-else-if="allActions[indx]['reverse']==true" class="btn btn-sm" :class="allActions[indx]['bclassrev']" @click.prevent="updateAction(user,allActions[indx]['updaterev'])"> {{allActions[indx]['namerev']}}</button>
					</span>
					
				</div>
               
              </div>
			  </div>
  <div class='row'>
    <div  class="col-12"  v-if='ptype.showCrud!="no"'>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{smName.toUpperCase()}}</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm">
              <!-- Button "add new user". When clicked, it will call /showModal function (function to display modal pop up containing "add new user" form). -->
             
			  <div class="btn-group">
                 
					<button type="button" class="btn-sm btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-columns"></i>
                    </button>
					<div class="dropdown-menu dropdown-menu-right" role="menu" style="position: absolute; will-change: transform; transform: translate3d(46px, -14px, 0px);">
						  <form>
						
						<div class='card-header' style='padding:5px'>
					<h6>Show/Hide Columns</h6>
					
						</div>
						<div class='card-body' style='padding:5px'>
					 <div  v-for="tabHead in tabHeads" style='max-height:25PX;padding:5px'>
					  <label  >{{tabHead.toUpperCase()}}</label>
					   <displayswitch-type  class='col-sm-6' style='left: 100px;
    top: -33px;TRANSFORM: SCALE(1) !important;' v-model='formType[tabHead].tablehead'    :namee='tabHead+"s"'></displayswitch-type>
					</div>
                     </div>
					  </form>
                    </div>
					 
					 <button class="btn-sm btn btn-danger"  @click.prevent="showModal"><i class="fas fa-plus"></i></button>
                   
					 
			 
                  </div>
				   
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0" v-if='ptype.showCrud!="no"'>
          <!-- Data-table with pagination for user list. -->
		  <div :class="'filterTable'+smName" >

          <table class="table table-hover" style='zoom:90%;'>
		  
            <thead>
              <tr>
			  
                <th v-for="tabHead in tabHeads" v-if='formType[tabHead].tablehead'  :style="'min-width : '+((tabHead.length * 22)>140?(tabHead.length * 22>250?'250':tabHead.length * 22):'140' )+'px !important;max-width:'+ ((tabHead.length*25)>340?'340': tabHead.length * 25) +'px' ">
				<div class="input-group input-group-xs">
                 
                {{tabHead.toUpperCase()}}<select  v-model="searchform['sort__'+tabHead]" class='btn-default' style='zoom:80%;' :name='"sort__"+tabHead' @input='getUsers' :class='formType[tabHead].sortale?"":"hidden"'>
						<option value=''>Sort</option>
						<option value='asc' >Asc</option>
						<option value='desc' >Desc</option>
				</select>
				 
				</div>
				<div class="input-group input-group-xs" :style='formType[tabHead].searchableforms?"width:"+(tabHead.length*10+50*formType[tabHead].sortale)+"px":"display:none"'>
                 
				 <component v-bind:is='formType[tabHead].type+"-type"'  v-model="searchform['filter__'+tabHead]"  :placeholder='"search "+tabHead' :name='"filter__"+tabHead' :namee='"filter__"+tabHead' :options="options[tabHead]" v-bind:smName='smName' @input='getUsers()'></component>
         
				 
                
			  </div>
				
				</th> 
                <th></th>
				
				
              </tr>
            </thead>
			
			
            <tbody>
              <!-- Loop through each user record and display 
			  user details -->
              <tr v-for="user in users.data" :key="user.id">
			    <td v-if='formType[indx].tablehead==1' v-for="(col,indx) in user" class="align-middle">
					<span v-if="allActions.hasOwnProperty(indx) && (allActions[indx]['state']==col || allActions[indx]['reverse']=='true')">
						<button v-if="allActions[indx]['state']==col" class="btn btn-sm"  :class="allActions[indx]['bclass']" @click.prevent="updateAction(user,allActions[indx]['update'])">{{allActions[indx]['name']}}</button>
						<button v-else-if="allActions[indx]['reverse']=='true'" class="btn btn-sm" :class="allActions[indx]['bclassrev']" @click.prevent="updateAction(user,allActions[indx]['updaterev'])"> {{allActions[indx]['namerev']}}</button>
					</span>
					<span v-else-if="formType[indx].type=='select'">{{ options[indx][col] }}</span>
					<span v-else-if="formType[indx].type=='dropzone'"><span v-if="col!=null && col!='null' && col!=''"><img style='max-width:70px;max-height:70px;' v-for= "(a,b) in col.split(',')" :src='a'></span> </span>
                                        <span v-else >{{col}}</span>
				</td>
                <td class="align-middle btn-group">
                  <a class='btn btn-sm btn-info ' href="" @click.prevent="editUser(user)">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a class='btn btn-sm btn-danger' href="" @click.prevent="deleteUser(user.id)">
                    <i class="fa fa-trash"></i>
                  </a>
               
				  <sub-modules :submodules='subModules' :id='user.id' ></sub-modules>	</td>
              </tr> 
            </tbody>
          </table>  
		  </div>
          <nav aria-label="Page navigation example" class="pagination-container">
            <pagination :data="users" @pagination-change-page="getUsers"></pagination>
          </nav>      
        </div>
      </div>
    </div>
</div>
   <modelform :createUser='createUser' :updateUser='updateUser' :smName='smName' :formType='formType' :isFormCreateMode='isFormCreateUserMode' :options='options' :formData='formData' :form='form'></modelform>
	
	
	
	  
	
	<div class="modal fade" tabindex="-1" id="subModal" role="dialog" aria-labelledby="subModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content embed-content">
    {{smContent}}
    </div>
  </div>
</div>
	
  </div>
</template>

<!-- We put our scripts inside script tag -->
<script>
  // Declare /user-management component
  var cpage=1;
  export default { 
    name: 'user-management',
    // Declare users (as object), form (as /vform instance) and /isFormCreateUserMode (as boolean defaulted to 'true') inside /data() { return {} }.
    data() {
      return {
        users: {},
		tabHeads : tabHeadsG,
		formData : formDataG,
        form: new Form(modelData),
		searchform: new Form(),
        isFormCreateUserMode: true,
		options:allOptions,
		subModules:allSubModules,
		smName:this.$route.params.modelName,
		smContent:'',
		apiPath:apipath,
		homeDir:homedir,
		allActions:actions,
		moduleHistory:[],
		ptype:pType,
		id:'',
		formType:FormType,
                myapps:dashboardtools,
                filter:'',
                query:''
		
		
	
		
      }
    },

    methods: {
	changeval(val,name){
	this.form[name]=val;
		//console.log(val+'triggered'+name);
	},
      // /getUsers() function. Function we use to get user list by calling api/users method GET. 
      getUsers(page,filter) {
	 
        if (typeof page === 'undefined') {
          page = cpage;
        }
		if(filter==undefined){
		filter=$('.filterTable'+this.smName+'  input:not([type="checkbox"]) , .filterTable'+this.smName+'  select').serialize();
		 var str1=$('.filterTable'+this.smName+" input[type='checkbox']").map(function(){return this.name+"="+(this.checked?'1':'');}).get().join("&");
    if(str1!="" && filter!="") filter+="&"+str1;
    else filter+=str1; 
	}
		//console.log(this.apiPath+'apiPath');
		cpage=page;
        axios.get(this.apiPath+this.smName, {
          params: {
		  filter,
            page: page
          }
        }).then(data => {
          this.users = data.data;
        });     
      },
      // /showModal() function. Function we use to 1. Set /isFormCreateUserMode to 'true', 2. Reset form data, 3. Show modal containing dynamic form for adding/updating user details.
      showModal() {
        this.isFormCreateUserMode = true;
        this.form.reset(); // v form reset
        $('#form'+this.smName).modal('show'); // show modal
      },
      // /createUser() function. Function we use to store user details by calling api/users method POST (carrying form input data).
      createUser() {
        // request post
        this.form.post(this.apiPath+this.smName, {
        }).then(() => {
           $('#form'+this.smName).modal('hide'); // hide modal

          // sweet alert 2
          swal.fire({
            icon: 'success',
            title: this.smName+' created successfully'
          })

          this.getUsers();

        }).catch(() => {
          console.log('transaction fail');
        });
      },
      // /editUser() function. Function we use to 1. Set /isFormCreateUserMode to 'false', 2. Reset and clear form data, 3. Show modal containing dynamic form for adding/updating user details, 4. Fill form with user details.
      editUser(user){
        this.isFormCreateUserMode = false;
        this.form.reset(); // v form reset inputs
        this.form.clear(); // v form clear errors
         $('#form'+this.smName).modal('show'); // show modal
        this.form.fill(user);
      },
      // /updateUser() function. Function we use to update user details by calling api/users/{id} method PUT (carrying form input data).
      updateUser(){
        // request put
        this.form.put(this.apiPath+this.smName+'/' + this.form.id, {
        }).then(() => {
           $('#form'+this.smName).modal('hide'); // hide modal
          
          // sweet alert 2
          swal.fire({
            icon: 'success',
            title: this.smName+' updated successfully'
          })

          this.getUsers();
        }).catch(() => {
          console.log('transaction fail');
        });
      },   
  updateAction(user,b){
  
    this.isFormCreateUserMode = false;
        this.form.reset(); // v form reset inputs
        this.form.clear(); // v form clear errors
        this.form.fill(user);
		let a=b.split(',');
		for(const c of a){
		let d=c.split('=')[0];
			this.form[d]=c.split('=')[1];
		}
        // request put
        this.form.put(this.apiPath+this.smName+'/' + this.form.id, {
        }).then(() => {
          
		  
          // sweet alert 2
          swal.fire({
            icon: 'success',
            title: this.smName+' updated successfully'
          })

          this.getUsers();
        }).catch(() => {
          console.log('transaction fail');
        });
      }, 	  
      // /deleteUser() function. Function we use to delete user record by calling api/users/{id} method DELETE.
      deleteUser(id) {
        // sweet alert confirmation
        swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          // confirm delete?
          if (result.value) {
            // request delete
            this.form.delete(this.apiPath+this.smName+'/' + id, {
            }).then(() => {
              // sweet alert success
              swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )   

              this.getUsers(); // reload table users
            }).catch(() => {
              // sweet alert fail
              swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
              })
            }); 
          }
        })
      },
	  openModule(subModule,query) {
	 
	  let qdata=new Array();
let vuemodel='';let modeldata='';
	  this.users= {};
	  this.tabHeads=[];
          this.query=query;
	  let pM=this.smName;
this.searchform= new Form();
	  this.smName=subModule;

	    axios.get(subModule+'?load_type=data', {
          params: {
          
          }
        }).then(data => {
		
		 
		  this.tabHeads = data.data.tabHeadsG,
		this.formData = data.data.formDataG,
        this.form= new Form(data.data.modelData),
		this.options=data.data.allOptions,
		this.subModules=data.data.allSubModules,
		this.allActions=data.data.actions,
		this.ptype=data.data.pType,
		this.formType=data.data.FormType,
		this.getUsers(1,query)
		
        }).then( 
 history.pushState({}, null, subModule),
this.moduleHistory.push([subModule,query]),
		);
		qdata=this.query.split('&');
for(let i=0;i<qdata.length;i++){
 vuemodel=qdata[i].split('=')[0],
modeldata=qdata[i].split('=')[1],
this.searchform[vuemodel]=modeldata
}
		if(subModule== this.myapps)
		this.moduleHistory=[];
	
		},
		
    },
    created() {
      // Call /getUsers() function initially. 
      this.getUsers();
    },
    mounted() {
var $me=this;
      console.log('Component mounted.')
 window.onpopstate = function(event) {
        var mod=document.location.href.split('/');
        mod=mod[mod.length-1];
        $me.openModule($me.smName);
        moduleHistory.pop(); 
this.getUsers();
   };
    }
  }

</script>

<!-- We put our custom css/scss inside style (type can be css or scss) -->
<style type="scss">
table tbody {
  display: block;
  max-height: 500px;
  overflow-y: auto;
}
td{
padding:5px !important;
}
.pagination-container {
    height: 45px !important;
    margin-top: -16px !important;
}
table thead, table tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}
  .pagination-container {
    height: 75px;
    display: grid;
  }
  .pagination {
    margin: auto !important;
  }
  li{
  list-style:none;
  }
  .card-title{
	margin-bottom:0px !important;
  }
  
  .browsed-history{
  content-visibility:hidden;
  border:1px solid red !important;
  }
  .browsed-history:hover{
  content-visibility:visible;
  
  }
  .custom-trans{
  transform: scale(2, 2);
  max-width: 0px;
left: 15px;
  }
  .comp-theme{
  object-fit:contain;border:1px solid green; border-radius:10px;
  }
  .hidden{display:none}

.min-h-75{min-height:75%;height:500px;max-height:100%;} 
</style>