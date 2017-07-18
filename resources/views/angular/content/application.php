<div>	
	<h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    
    <div ng-app="myApp" ng-init="" class="container">
    	
        <p>Angular JS Application </p>
        <form class="form" ng-controller="myCtrl">
          <div class="form-group">
              <label>Firstname</label>
              <input class="form-control" type="text" value="" name="nama_depan" ng-model="nama_depan">
          </div>
          <div class="form-group">
          	  <label>Lastname </label>
              <input class="form-control" type="text" value="" name="nama_belakang" ng-model="nama_belakang">
          </div>
        </form>
        
    </div>
    <div id="jquery"> jquery </div>	
    
    <hr>
    <p>*catatan : </p>
    <ul>
    	<li> Menaruh value pada input gunakan controller </li>
    </ul>
</div>

<script>
	var app = angular.module("myApp",[]);
	
	app.controller("myCtrl",function($scope){
		
		$scope.nama_depan 	 = "Aries Dimas";
		$scope.nama_belakang = "Yudhistira";
	});
	
	$(document).ready(function(e) {
        
		
		$("#jquery").html("<div> Tulisan ini di load dari jquery: Integrasi Angular dan Jquery </div>");
		
    });
	

</script>