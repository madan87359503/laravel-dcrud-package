Vue.component('text-type', {
  props: ['value'],
  template: `<input class="form-control"
      v-bind:value="value" v-on:input="$emit('input', $event.target.value)"
      
    >
  `
}); 
Vue.component('buttoncomp', {
  props: ['smName','filter','name','modFunc'],
  template: `<button v-else class="info-box" @click.prevent="openMod(smName,filter)" style="min-height: 50px;border: 1px;font-size: 19px;font-weight: 600;color: #3f474e;">
              <span class="info-box-icon bg-danger" style='max-width:max-content'><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{name}}</span>
               
              </div>
              <!-- /.info-box-content -->
            </button>
             
  `,
     methods: {
       openMod: function (a,b) {
           // Do your stuff
           this.modFunc(a,b);
       },
   }
}); 
Vue.component('hidden-type', {
  props: ['value'],
  template: `<input type='hidden' 
      v-bind:value="value" v-on:input="$emit('input', $event.target.value)"
      
    >
  `
});
Vue.component('select-type', {
  props: ['options','value'],

  template: `<select class="form-control"  v-bind:value="value" v-on:input="$emit('input', $event.target.value)">
				  <option v-for="(option, indx) in options "  v-bind:value="indx">
					{{ option }}
				</option>
				</select>
  `
}); 
Vue.component('radio-type', {
  props: ['options','namee','value'],

  template: `<div><span v-for='option in options'>
                          <input  type="radio" v-model='value'  :name="namee" :value="option" v-on:input="$emit('input', $event.target.value)">
                          <label >{{option}}</label>&nbsp;
                        </span></div>
  `
}); 


Vue.component('switch-type', {
  props: ['options','namee','value'],


methods:{
	emitVal(){
		
		this.$emit('input', this.value);
	}
	
},
mounted(){
	this.$emit('input', this.value);

},
  template: `<div class="custom-control custom-switch custom-trans" >
                      <input v-model="value"  type="checkbox"   class="custom-control-input" :id="'customSwitch1'+namee" :name='namee' @change='emitVal' >
                    <label class="custom-control-label"  :for="'customSwitch1'+namee" @click='emitVal'> </label>
                    </div>
  `
}); 

Vue.component('displayswitch-type', {
  props: ['options','namee','value'],


methods:{
	emitVal(){
		
		this.$emit('input', this.value);
	}
	
},
mounted(){
	this.$emit('input', this.value);

},
  template: ` <div class="custom-control custom-switch" >
                      <input v-model="value"  type="checkbox"   class="custom-control-input" :id="'customSwitch'+namee" @change='emitVal' >
					  <label class="custom-control-label"  :for="'customSwitch'+namee" @click='emitVal'> </label>
                    </div>
  `
}); 




Vue.component('dropzone-type', {
  props: ['namee','smName','value'],

  template: `
  <div>

   <div v-if='value!=""&&value!=null'>
	<div  v-for='aaa in value.split(",")'>
	
		<div style='float:left;margin:5px;'>
			<img title='click to remove' :src='aaa' style='width:60px;height:60px;float:left' @click="removeFile(aaa)" :alt="aaa.split('/')[aaa.split('/').length-1]" class='comp-theme'>
		</div>
	</div>
    </div>
	<span >
            
    <input :class='"dropzone"+namee' class='form-control' placeholder='Select Files' style='max-width:140px' readonly type="text"  >

        </span>
		
</div>

  `,

    methods: {
		addData(data){
			
			this.value=this.value==''||this.value==null?data:this.value.concat(','+data),
			this.$emit('input', this.value)
			// this.$emit('datachanged', this.upfile.toString(),this.name)
			//document.getElementById(this.name).value=this.upfile.toString();
			 // console.log(this.upfile);
		},
		removeFile :  function (aaa){
			this.value=this.value.replace(aaa,'');
			this.value=this.value.replace(/^,|,\s*$/, "");
			this.$emit('input', this.value)
		},
	
	},
	mounted(){
		
		const dropZone = new Dropzone('.dropzone'+this.namee, {
        url: homedir+"upload-file/"+this.smName+'/'+this.namee,
		 headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
	 
      });
	   dropZone.on("success", function(file,data){
		   console.log(data);
		  this.addData(JSON.parse(data).file.url);
			 
				
				
				
  }.bind(this),false);
	}
});



Vue.component('editorjs-type', {
  props: ['namee','smName','value'],

  template: `
  <div id='editorjs' class='comp-theme'>

</div>

  `,

    methods: {
	
	
	},
	mounted(){
		const ImageTool = window.ImageTool;
	const editor = new EditorJS({
  /**
   * Id of Element that should contain the Editor
   */
  holderId : 'editorjs',

  /**
   * Available Tools list.
   * Pass Tool's class or Settings object for each Tool you want to use
   */
  tools: {
	  	  image: {
      class: ImageTool,
	  
      config: {
		    additionalRequestHeaders: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
        endpoints: {
          byFile: homedir+"upload-file/"+this.smName+'/'+this.namee, // Your backend file uploader endpoint
          byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
        },
		field:'file'
      }
    },
    header: {
      class: Header, 

      inlineToolbar : true
    },
    // ...
  },
   onReady: () => {console.log('Editor.js is ready to work!')},
   
   /**
    * onChange callback
    */
   onChange: () => {
	   
	   editor.save().then((outputData) => {
 this.$emit('input', JSON.stringify(outputData, null, 4))
}).catch((error) => {
  console.log('Saving failed: ', error)
});
	   
	   console.log('Now I know that Editor\'s content changed!')},
  /**
   * Previously saved data that should be rendered
   */
  data: {}
});

	}
})

Vue.component('crud', {
  props: ['smName','filter','name'],
   template: `
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{name}}</h3>
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
   
 <div class="card-body table-responsive p-0" >
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
                <th>

</th>
				
				
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
               <sub-modules :submodules='subModules' :id='user.id' ></sub-modules>
				
	</td>
              </tr> 
            </tbody>
          </table>  
		  </div>
          <nav aria-label="Page navigation example" class="pagination-container">
            <pagination :data="users" @pagination-change-page="getUsers"></pagination>
          </nav>      
        </div>
 <modelform :createUser='createUser' :updateUser='updateUser' :smName='smName' :formType='formType' :isFormCreateMode='isFormCreateUserMode' :options='options' :formData='formData' :form='form'></modelform>
	
 </div>

`,
    data() {
      return {
        users: {},
        cpage:1,
		tabHeads : [],
		formData : [],
        form: [],
		searchform: new Form(),
        isFormCreateUserMode: true,
		options:[],
		subModules:[],
		smContent:'',
		apiPath:apipath,
		homeDir:homedir,
		allActions:[],
		moduleHistory:[],
		ptype:pType,
		id:'',
		formType:[],
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
          page = this.cpage;
        }
		if(filter==undefined){
		filter=$('.filterTable'+this.smName+'  input:not([type="checkbox"]) , .filterTable'+this.smName+'  select').serialize();
		 var str1=$('.filterTable'+this.smName+" input[type='checkbox']").map(function(){return this.name+"="+(this.checked?'1':'');}).get().join("&");
    if(str1!="" && filter!="") filter+="&"+str1;
    else filter+=str1; 
	}
		//console.log(this.apiPath+'apiPath');
		this.cpage=page;
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
		);
		qdata=this.query.split('&');
for(let i=0;i<qdata.length;i++){
 vuemodel=qdata[i].split('=')[0],
modeldata=qdata[i].split('=')[1],
this.searchform[vuemodel]=modeldata
}
	
		},
		
    },
    created() {
      // Call /getUsers() function initially. 
      this.openModule(this.smName);
      this.getUsers();
    },
    mounted() {
var $me=this;
      console.log('crud mounted.')
 window.onpopstate = function(event) {
        var mod=document.location.href.split('/');
        mod=mod[mod.length-1];
        $me.openModule(mod);
   };
    }
});

Vue.component('modelform', {
  props: ['createUser','updateUser','smName','formType','isFormCreateMode','options','formData','form'],
   template: ` <!-- Modal containing dynamic form for adding/updating user details. -->
    <div class="modal fade" :id="'form'+smName" tabindex="-1" role="dialog" :aria-labelledby="'form'+smName" aria-hidden="true"> 
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- Show/hide headings dynamically based on /isFormCreateMode value (true/false) -->
            <h5 v-show="isFormCreateMode" class="modal-title" >Add new {{smName}}</h5>
            <h5 v-show="!isFormCreateMode" class="modal-title" >Update {{smName}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!-- Form for adding/updating user details. When submitted call /createUser() function if /isFormCreateUserMode value is true. Otherwise call /updateUser() function. -->
          <form @submit.prevent="isFormCreateMode ? create() : update()" class="modal-body row">
            <div :class='"form-group "+formType[md].formclass' v-for='md in formData' >
			 <label v-if='!(formType[md].type=="hidden")'>{{md.toUpperCase()}}</label> 
			<component v-bind:is='formType[md].type+"-type"'  v-model="form[md]"   :class="{ 'is-invalid': form.errors.has(md) }" :namee="md" :options="options[md]" v-bind:smName='smName' ></component>
            	<has-error :form="form" :field="md"></has-error>
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" v-show="isFormCreateMode">Add {{smName}}</button>
              <button type="submit" class="btn btn-primary" v-show="!isFormCreateMode">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>  `,
         methods: {
       create: function () {
           // Do your stuff
           this.createUser();
       },
       update: function () {
           // Do your stuff
           this.updateUser();
       },
   }
       
    });
    
    
    Vue.component('barchart', {
  props: ['smName','filter','name'],
   template: `<div class="card-body">
<div class="tab-content p-0">

<div class="chart " >
<canvas id="myChart" width="400" height="100" style="height: 200px;"></canvas>
</div>
</div>
</div>
</div>
`, 
      data() {
      return {
       apiPath:apipath
    }
      },
   methods:{
	
	
},
mounted(){
	    const chartCDN = document.createElement("script");
    chartCDN.setAttribute(
      "src",
      "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
    );
    document.head.appendChild(chartCDN);

    axios.get(this.apiPath+this.smName+'?'+this.filter, {
          params: {
          
          }
        }).then(data => {
            const {...obdata}=data.data;
            console.log(obdata.datasets);
		const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx,{
    type: "bar",
    data: {
        labels:obdata.labels,
        datasets:[{
            label:obdata.datasets.label,
            data:obdata.datasets.data,
            backgroundColor:obdata.datasets.backgroundColor,
            borderColor:obdata.datasets.borderColor
    }],
    options: [{
        scales: {
            "y": {
                "beginAtZero": true
            }
        }
    }]
    }});
console.log(myChart);
console.log(obdata);
console.log('myChart');

        }).then( 
		);
},
});

Vue.component('sub-modules', {
  props: ['submodules','id','modFunc'],


methods:{
	   openMod: function (a,b) {
           // Do your stuff
           this.modFunc(a,b);
       },
	
},
mounted(){
	this.$emit('input', this.value);

},
  template: `
<div>
    
    
    <a  v-for="(filter,subModule) in submodules" class='btn btn-warning btn-sm ' href="" @click.prevent="openMod(subModule,'filter__'+filter+'='+user.id)">{{subModule}}</a>
			
    </div>

`
});