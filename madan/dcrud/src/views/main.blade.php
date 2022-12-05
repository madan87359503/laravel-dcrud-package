
@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
	<link rel="stylesheet" type="text/css" href="{{str_replace('http:','',asset('css'))}}/app.css"> 
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
<script>
var modelData={!!json_encode($modelData)!!};

var	tabHeadsG={!!json_encode($tabHeadsG)!!};

var	 formDataG={!!json_encode($formDataG)!!};
var	allOptions={!!json_encode($options)!!};
var allSubModules={!!json_encode($subModules)!!}
var actions={!!json_encode($actions)!!}
var pType={!!json_encode($pType)!!}
var FormType={!!json_encode($formType)!!}
var apipath='{{route("public")}}/api/dcrud/'
var homedir='{{route("public")}}'
@php $a=explode('/',Request::path());@endphp
var dashboardtools='{{end($a)}}'
</script>
 <div id="app">
        <router-view></router-view>
      </div>
<footer style="bottom:0px;position:absolute">
<div class="float-right d-none d-sm-block" style='float:right'>
<b>Version</b> 1.0.0
</div>
<strong>Copyright © {{date('Y')}} <a href="https://solutionswithmaster.com">Master Solutions Inc.</a>.</strong> All rights reserved.
</footer>
  <script src="{{ str_replace('http:','',url(asset('js').'/app.js')) }}"></script>

@stop

