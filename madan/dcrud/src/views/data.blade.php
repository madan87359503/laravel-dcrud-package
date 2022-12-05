@php
$data['modelData']=$modelData;
$data['tabHeadsG']=$tabHeadsG;
$data['formDataG']=$formDataG;
$data['allOptions']=$options;
$data['allSubModules']=$subModules;
$data['actions']=$actions;
$data['pType']=$pType;

$data['FormType']=$formType;
@endphp
{!!json_encode($data)!!}