<script>
	function get_department(id)
	{
		return "dept";
		
		
		
	}
</script>
<div>
	<h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    
    
    <div class="container" ng-app="bootapp">
    
  		<table ng-controller="myTable" class="table table-responsive table-bordered">
        	<thead>
            	<th> Nama </th>
                <th> Alamat </th>
                <th> Email</th>
                <th> Department </th>
                <th> Rank </th>
            </thead>
            <tbody ng-repeat="row in result">
            	<td>{{ row.nama_depan+" "+row.nama_belakang }}</td>
                <td>{{ row.alamat}}</td>
                <td>{{ row.email }}</td>
                <td>{{ row.department }} / {{ department }}</td>
                <td>{{ row.rank }}</td>
            </tbody>
    
    	</table>
	</div>

</div>
<script>
	
	var app = angular.module("bootapp",[]);
	
	
	
	app.controller("myTable",function($scope,$http){
		
		
		
		$http.get("<?=url("ajax/get_pelaut")?>").then(function(response){
			
			//alert(response);
			//$scope.data = response.data; // data table 
			
			for($scope.data in response.data)
			{
				
				$scope.result			 = $scope.data;
				alert($scope.result);		 
				//$scope.result.department = get_department(row.department);
			}
			
			$scope.test = "Test value";
			
		});
		
		
		
		
		
	});

</script>