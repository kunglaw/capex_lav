<div>
	<h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    
    
    <div class="container" ng-app="bootapp">
    
    	<div ng-controller="ctrl-modal">
        <?php // harus didalam controller ?>
        	<!-- <div class="modal-temp">{{modal}}</div> -->
    		<div>{{pesan | unsafe}}</div>
            <div ng-bind-html="modal | unsafe"></div>
        	<button type="button" class="btn btn-default" ng-click="show_modal()" > modal </button>
        </div>
        
        
    
    </div>


</div>
<script>
	
	var myapp = angular.module("bootapp",[]);
	
	myapp.controller("ctrl-modal",function($scope,$http){
		
		$scope.pesan = "pesan ini muncul ";
		$scope.show_modal = function(){
			
			$http.get("<?=url("ajax/modal")?>").then(function(res){
				
				
				//$(".modal-temp").html(res.data);//bisa
				$scope.modal = res.data;
				$scope.pesan = "<b> Bisa kok ? <b>";
				
				//alert(res.toSource());
				
			});
				
		}
		
	});
	
	myapp.filter('unsafe', function($sce) {
	    return function(val) {
	        return $sce.trustAsHtml(val);
	    };
	});

</script>