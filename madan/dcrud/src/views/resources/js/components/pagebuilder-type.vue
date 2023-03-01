<template>
 
    <div @click='emitVal' style='overflow:auto;width:100%;min-height:600px;position:relative'>
        
<div class='tools' ><button type='button' onclick="newdiv()">+ Div</button><button type='button' onclick='removeDiv()'>Delete</button><button type='button' onclick='downdiv()'>&darr;</button>
<button type='button' onclick='updiv()'>&uarr;</button>
<button type='button' onclick='leftdiv()'>&larr;</button>
<button type='button' onclick='rightdiv()'>&rarr;</button>
<button type='button' onclick='hcenter()'>&#x268B;</button>
<button type='button' onclick='center()'>&#9871;</button>
<button type='button' onclick='setCSS("text-align","left")'>-__</button>

<button type='button' onclick='setCSS("text-align","center")'>_-_</button>
<button type='button' onclick='setCSS("text-align","right")'>__-</button>

<button type='button' onclick='$("#picked").append("<div></div>");$(".selected").clone().appendTo("#picked>div");$(".selected").removeClass("selected")'>PICK</button>

<input type='color' onchange='$(".selected").css("color",this.value)' value='' class='cl'>

<input type='color' value='' onchange='$(".selected").css("background-color",this.value)' class='bcl'>
<input type='text' value='height' class='in1 hidden'>
<button type='button' onclick='pnm(".in1","+")'> h+</button><button type='button' onclick='pnm(".in1","-")' >h-</button>
<input type='text' value='width' class='in2 hidden'>
<button type='button' onclick='pnm(".in2","+")'> w+</button><button type='button' onclick='pnm(".in2","-")'>w-</button>
<input type='text' value='font-size' class='in3 hidden'>
<button type='button' onclick='pnm(".in3","+")'> t+</button><button type='button' onclick='pnm(".in3","-")'>t-</button>
<input type='text' value='border-radius' class='in4 hidden'>
<button type='button' onclick='pnm(".in4","+")'> r+</button><button type='button' onclick='pnm(".in4","-")'>r-</button>


 <textarea type='text' class='divtext' onchange='chtxt(this.value)' cols=30 rows=1></textarea>
 </div>
  <div class='float right animate-right hover-display-component right-box'>
      <div class='float round large-text padding background-green opacity hover-opacity pointer'>
    &nbsp;C&nbsp;
  
</div> 
    <div class='margin-top padding' id="appll">
     
      <button type='button' onclick="$('.tabsc').hide();$('.componentlist').show()">Components</button>
      
      <button type='button' onclick="$('.tabsc').hide();$('.pagelist').show()">Pages</button>
      
      <button type='button' onclick="$('.tabsc').hide();$('.filelist').show()">Media</button>
      
      <button type='button' onclick="$('.tabsc').hide();$('.formlist').show()">Form</button>
      
      <li  v-if='post.type=="api"' class='componentlist tabsc' v-for="post of posts">
          <div onclick='pick(this)'>
               <span class='currentcontent hidden' v-html='post.content' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
       
      </span>
      <strong>@{{post.name}}</strong>
     
       <img class='sidepreview'  :src="`${post.preview}`"  >
     </div>
     
      </li>
       <li  v-if='post.type=="page"' class='pagelist tabsc' v-for="post of posts">
          <div onclick='pick(this)'>
               <span class='currentcontent hidden' v-html='post.content' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
       
      </span>
      <strong>@{{post.name}}</strong>
     
       <img class='sidepreview'  :src="`${post.preview}`"  >
     </div>
     
      </li>
        <li v-if='post.type=="file"' class='filelist tabsc' v-for="post of posts">
          <div  >
              <button type='button' onclick='pick(this)'>
               <span class='currentcontent hidden' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
                   <img :src="`${post.preview}`"  style='object-fit:cover;max-height:100%'>
       </span>
       Image
              </button>
                <button type='button' onclick='pick(this)'>
               <span class='currentcontent hidden' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
                 <div style='border-radius:10px; padding:5px; border:1px solid green;max-width:max-content;'>
                  <a  :href="`${post.preview}`"  download>Download Now</a>
                  </div>
       </span>
       Download Button
              </button>
                 <button type='button' onclick="setbg(this)">
            <div class='hidden'  v-html='post.preview'  >
                
            </div>
      Set Background
              </button>
               <span class='currentcontent hidden' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
       
      </span>
      <strong>@{{post.name}}</strong>
     
       <img class='sidepreview'  :src="`${post.preview}`"  >
     </div>
     
      </li>
        <li  v-if='post.type=="form"' class='formlist tabsc' v-for="post of posts">
          <div onclick='pick(this)'>
               <span class='currentcontent hidden' v-html='post.content' :cname="`${post.name}`" :cdatasource="`${post.datasource}`">
       
      </span>
      <strong>@{{post.name}}</strong>
     
       <img class='sidepreview'  :src="`${post.preview}`"  >
     </div>
     
      </li>
    </div>
</div>


  <div class='float right animate-right hover-display-component right-box-1 '>
     <div class='float round large-text padding background-yellow opacity hover-opacity pointer'>
    &nbsp;+&nbsp;
  
</div>
</br>
</br>

</div>


  <div class='float right animate-right hover-display-component right-box-2 '>
     <div class='float round large-text padding background-blue opacity hover-opacity pointer'>
    &nbsp;&#9658;&nbsp;
  
</div>
    <div class='margin-top'>
      Preview
      <svg>
      <div class='fullwidth border-red' id='preview1' >
   
</div>
</svg>
    </div>
</div>
  <div class='float right animate-right hover-display-component right-box-3 '>
     <div class='float round large-text padding background-red opacity hover-opacity pointer'>
    &nbsp;S&nbsp;
   
</div>
    <div class='margin-top' id="appl2">
       
  <h2>Style Editor</h2>
 <table>
     <thead>
     <tr>
         <th>Attribute</th>
         <th>Value</th>
     </tr>
     </thead>
     <tbody class='styles'>
    
     </tbody>
     <tfoot>
         <tr>
             <td colspan=2><button type='button' onclick='addnew()'>+</button></td>
         </tr>
     </tfoot>
 </table> 
 <h2>Attribute Editor</h2>
 <table>
     <thead>
     <tr>
         <th>Name</th>
         <th>Value</th>
     </tr>
     </thead>
     <tbody class='attrs'>
    
     </tbody>
     <tfoot>
         <tr>
             <td colspan=2><button type='button' onclick='addnewattr()'>+</button></td>
         </tr>
     </tfoot>
 </table> 
    </div>
</div>

</br>
</br>

 

<div class='fullpage' >
    <div id='pagecontent' v-html='value' class='fullpage' onmousemove="myFunction(event)" onclick='clickedhere()'>
    
</div>
</div>

<div id="picked" ></div>
</div>
</template>

<script>

       export default {
                 name: 'pagebuilder',
             props: ['options','namee','value'],
    created() {
        this.fetchData();
        this.fetchCss();
    },
   data() {
      return {
        posts: [],
        css:[],
       homeDir:homedir,
}
    },
    methods: {
        fetchData() {
        axios.get(homedir+'/allcomponents').then(response => {
       
            this.posts =response.data;
            console.log(this.posts);
            });
        },
emitVal(){
console.log(this.value);
		
		this.$emit('input',$('#pagecontent').html());
	}
    },
    mounted(){
        const chartCDN = document.createElement("script");
    chartCDN.setAttribute(
      "src",
     homedir+'/js/pagebuilder.js'
    );
    document.head.appendChild(chartCDN);
this.$emit('input', this.value);
    }
};
</script>
<style>
 
.fullpage a {
    pointer-events:none;
}
 .selected{
    box-shadow: 1px 1px 0px 2px #77d817;
    
    
 }
    .float{
        position:absolute;
    }
    .right{
        right:-350px;
    }
    .round{
        border-radius:100%;
    }
    .large-text{
        font-size:1.1em;
    }
    .padding{
        padding:12px;
    }
    .padding-min{
        padding:6px;
    }
    .background-green{
        background:green;
    }
    .background-yellow{
        background:yellow;
    }
     .background-red{
        background:red;
    }
      .background-blue{
        background:blue;
    }
    .opacity{
        opacity:0.8;
    }
    .hover-opacity:hover{
        opacity:0.9;
    }
    .pointer{
        cursor:pointer;
    }
    .hidden{
    display:none;
    }
    .animate-right{
        transition:all 0.2s cubic-bezier(0, 0, 0.2, 1);
    }
    .hover-display-component{
       width:400px;
       height:50px;
        overflow:hidden;
        background:white;
    }
    .hover-display-component:hover{
        right:-10px;
       top:10px;
       margin-top:0px;
          overflow-y:scroll;
       position:absolute;
        height:600px;
        z-index:9999999;
    }
   
    .scroll-y{
      
    }
    .right-box{
        border:1px solid green;
        font-size:1em !important;
            box-shadow: -8px -2px 20px 0px;
    border-radius: 5px;
    margin-top:60px;
    }
      .right-box-1{
        border:1px solid green;
        font-size:1em !important;
            box-shadow: -8px -2px 20px 0px;
    border-radius: 5px;
    margin-top:120px;
    }
      .right-box-2{
        border:1px solid green;
        font-size:1em !important;
            box-shadow: -8px -2px 20px 0px;
    border-radius: 5px;
    margin-top:180px;
    }
      .right-box-3{
        border:1px solid green;
        font-size:1em !important;
            box-shadow: -8px -2px 20px 0px;
    border-radius: 5px;
    margin-top:240px;
    }
    .sidepreview{
        max-width:260px;
        max-height:600px;
        text-align:center;
    }
    .margin-top{
        margin-top:10px;
    }
    .fullpage{
        position:absolute;
        background:white;
        border:1px solid black;
        max-width:95%;
        min-width:90%;
        min-height:500px;
        padding:5px;
      
    }
    .fullpage div:hover{
       box-shadow: 1px 1px 9px 1px cyan;
  
   border-radius:2px;
   
        
    }
     .fullpage div:hover + .fullpage div:hover>.tool{
        border:1px solid green;
   box-shadow: -8px -2px 20px 0px;
   border-radius:2px;
        display:block;
        z-index:9999;
    }
    #picked{
        position:absolute;
        max-width:250px;
        max-height:500px;
        overflow:hidden;
    }
    .fullwidth{
        width:100%;
    }
     .halfwidth{
        width:50%;
        float:left;
    }
    .border-red{
        border:1px solid red;
    }
    .fullwidth>div:hover{
        border:1px solid red;
    }
</style>

