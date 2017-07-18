<div class="fadeInRightBig">
    <h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    	
    <div ng-app="" class="container" ng-init="firstname='Aries'" >
    	<p> ng-app, ng-bind, ng-model</p>
        <div> On Keyup </div>
    	<div class="form-group">
    		<label> Name </label>
    		<input type="text" ng-model="name" name="name" class="form-control">
        	<div ng-bind="name"> </div>
        </div>
        
        <p> Angular Js Directives </p>
        <div class="form-group">
        	<label>Firstname </label>
            <input type="text" ng-bind="firstname" class="form-control">
        	<span ng-bind="firstname" title="ng-bind=firstname"></span>
        </div>
        
        
        <p>Angular Expression double braces {{value}}</p>
        <div class="form-group">
        	<div> My First Expression : {{ 5+5+5 }}</div>
        </div>
        <div class="form-group">
        	<span>Lastname</span>
            <input type="text" ng-model="lastname" class="form-control">
            <div>Output : {{lastname}}</div>
        </div>
        
        
        
    </div>
    <!-- beda app -->
    <!-- <div data-ng-app="" data-ng-init="firstname='Aries Dimas'" class="container">
    	<p> Alternatively with valid HTML: <br>
        *tidak bisa jalan karena beda app disatu halaman. 1 halaman tidak boleh lebih dari 1 app
        </p>
    	<div class="form-group">
    		<label>Firstname</label>
            <input name="firstname" data-ng-bind="firstname" class="form-control">
        
        </div>
        <span data-ng-bind="firstname"></span>
    </div> -->
    
    <hr>
    <div>catatan : </div>
    <ul>
    	<li> ng-app = environment/penampung penggunaan angular</li>
        <li>ng-model = yang mengatur input</li>
        <li>ng-bind = yang mengatur output </li>
    	<li> 1 halaman tidak boleh lebih dari 1 app </li>
        <li> input tidak bisa menjadi ng-bind</li>
    </ul>
</div>

